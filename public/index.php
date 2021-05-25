<?php

use Entity\Movie;
use Entity\User;
use Entity\Category;
use ludk\Persistence\ORM;

require __DIR__ . "/../vendor/autoload.php";

session_start();

$orm = new ORM(__DIR__ . '/../Ressources');

$manager = $orm->getManager();

$movieRepo = $orm->getRepository(Movie::class);
$userRepo = $orm->getRepository(User::class);
$categoryRepo = $orm->getRepository(Category::class);

$action = $_GET["action"] ?? "display";
switch ($action) {
    case 'register':
        if (isset($_POST['username']) && isset($_POST['password']) && isset($_POST['passwordRetype'])) {
            $usersWithThisUsername = $userRepo->findBy(["nickname" => $_POST["username"]]);
            if (count($usersWithThisUsername) > 0) {
                $errorMsg = "Nickname already used.";
            } else if ($_POST['password'] != $_POST['passwordRetype']) {
                $errorMsg = "Passwords are not the same.";
            } else if (strlen(trim($_POST['password'])) < 4) {
                $errorMsg = "Your password should have at least 4 characters.";
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
        $categories = $categoryRepo->findAll();
        if (
            isset($_SESSION['user']) //la personne est connectée
            && isset($_POST['title'])
            && isset($_POST['author'])
            && isset($_POST['date'])
            && isset($_POST['viewOrder'])
            && isset($_POST['image'])
            && isset($_POST['categoryId'])
        ) {
            $errorMsg = NULL;
            if (strlen(trim($_POST['title'])) < 2) {
                $errorMsg = "Your title should have at least 2 characters.";
            } else if (strlen(trim($_POST['author'])) < 2) {
                $errorMsg = "Your author should have at least 2 characters.";
            } else if (strlen(trim($_POST['date'])) == 0) {
                $errorMsg = "Your content shouldn't be empty.";
            } else if (intval(trim($_POST['viewOrder'])) == 0) {
                $errorMsg =  "You should tell the order of view.";
            } else if (intval($_POST['image']) == 0) {
                $errorMsg = "You should choose an image";
            } else if (intval($_POST['categoryId']) == 0) {
                $errorMsg = "You should choose an universe.";
            }
            if ($errorMsg) {
                include "../templates/CreateForm.php";
            } else {
                $category = $categoryRepo->find($_POST['categoryId']);
                $newMovie = new Movie();
                $newMovie->title = trim($_POST['title']);
                $newMovie->author = trim($_POST['author']);
                $newMovie->viewOrder = trim($_POST['viewOrder']);
                $newMovie->date = date('Y');
                $newMovie->image = intval($_POST['image']);
                $newMovie->category = $category;
                $newMovie->user = $_SESSION['user'];
                $manager->persist($newMovie);
                $manager->flush();
                header('Location: ?action=display');
            }
        } else {
            include "../templates/CreateForm.php";
        }
        break;
    case 'display':
    default: // cette vue utilise les actions d'afficher les ajouts de films DC ou Marvel
        $ItemsDc = [];
        $ItemsMarvel = [];
        if (isset($_GET["search"])) {
            $ItemsDc = $movieRepo->findBy(array("category" => "1", "title" => '%' . $_GET["search"] . '%'));
            $ItemsMarvel = $movieRepo->findBy(array("category" => "2", "title" => '%' . $_GET["search"] . '%'));
        } else {
            $ItemsDc = $movieRepo->findBy(array("category" => "1"));
            $ItemsMarvel = $movieRepo->findBy(array("category" => "2"));
        }

        include "../templates/display.php";

        break;
}
