<?php

use ludk\Persistence\ORM;
use Entity\Movie; //utilise le bdd movie
use Entity\User; // idem user

require __DIR__ . "/../vendor/autoload.php"; // j'inclue redirige vers autoload.php

session_start(); //va utiliser la session

$orm = new ORM(__DIR__ . '/../Ressources');

$manager = $orm->getManager();

$movieRepo = $orm->getRepository(Movie::class);
$userRepo = $orm->getRepository(User::class);

$action = $_GET["action"] ?? "display";
switch ($action) {
    case 'register':
        // include "../Ressources/User.json";
        if (isset($_POST['username']) && isset($_POST['password']) && isset($_POST['passwordRetype'])) {
            $usersWithThisUsername = $userRepo->findBy(["nickname" => $_POST["username"]]);
            if (count($usersWithThisUsername) > 0) {
                $errorMsg = "Nickname already used.";
            } else if ($_POST['password'] != $_POST['passwordRetype']) {
                $errorMsg = "Passwords are not the same.";
            } else if (strlen(trim($_POST['password'])) < 4) {
                $errorMsg = "Your password should have at least 8 characters.";
            } else if (strlen(trim($_POST['username'])) < 4) {
                $errorMsg = "Your nickame should have at least 4 characters.";
            }
            if ($errorMsg) {
                include "../templates/RegisterForm.php";
            } else {
                $newUser = new User();
                $newUser->nickname = $_POST['username'];
                $newUser->password = $_POST['password'];
                $manager->persist($newUser);
                $manager->flush();
                $_SESSION['user'] = $newUser;
                header('Location: ?action=display');
            }
        } else {
            include "../templates/RegisterForm.php";
        }
        break;
    case 'logout':
        if (isset($_SESSION['user'])) {
            unset($_SESSION['user']);
        }
        header('Location: ?action=display');
        break;
    case 'login':
        if (isset($_POST['username']) && isset($_POST['password'])) {
            $criteriaWithloginAndPawword = [
                "nickname" => $_POST['username'],
                "password" => $_POST['password']
            ];
            $usersWithThisNicknameAndPassword = $userRepo->findBy($criteriaWithloginAndPawword);
            if (count($usersWithThisNicknameAndPassword) == 1) {
                $_SESSION['user'] = $usersWithThisNicknameAndPassword[0];
                header('Location: ?action=display');
            } else {
                $errorMsg = "Wrong login and/or password.";
                include "../templates/loginForm.php";
            }
        } else {
            include "../templates/loginForm.php";
        }
        break;
    case 'new':
        break;
    case 'display':
    default: // cette vue utilise les actions d'afficher les ajouts de films DC ou Marvel
        $ItemsDc = [];
        $ItemsMarvel = [];
        if (isset($_GET["search"])) {
            $ItemsDc = $movieRepo->findBy(array("category" => "dc", "title" => '%' . $_GET["search"] . '%')); //on choisie la catégorie dc
            $ItemsMarvel = $movieRepo->findBy(array("category" => "marvel", "title" => '%' . $_GET["search"] . '%')); //idem marvel
        } else {
            $ItemsDc = $movieRepo->findBy(array("category" => "dc")); //on choisie la catégorie dc
            $ItemsMarvel = $movieRepo->findBy(array("category" => "marvel")); //idem marvel
        }

        include "../templates/display.php"; //vue html qui se trouve dans display

        break;
}
