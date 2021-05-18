<?php

use ludk\Persistence\ORM;
use Entity\Movie; //utilise le bdd movie
use Entity\User; // idem user

require __DIR__ . "/../vendor/autoload.php"; // j'inclue redirige vers autoload.php

session_start(); //va utiliser la session

$orm = new ORM(__DIR__ . '/../Ressources');

$manager = $orm->getManager();

$movieRepo = $orm->getRepository(Movie::class); //on reprend-récupère le tableau, l'entité
//userRepo =$orm->getepository(User::class), //si on veut récup l'entité user

// $items = $codeRepo->findall(); // récup tout de l'entité au dessus en requette (select * from ...) 

$ItemsDc = [];
$ItemsMarvel = [];
if (isset($_GET["search"])) {
    $ItemsDc = $movieRepo->findBy(array("category" => "dc", "title" => '%' . $_GET["search"] . '%')); //on choisie la catégorie dc
    $ItemsMarvel = $movieRepo->findBy(array("category" => "marvel", "title" => '%' . $_GET["search"] . '%')); //idem marvel
} else {
    $ItemsDc = $movieRepo->findBy(array("category" => "dc")); //on choisie la catégorie dc
    $ItemsMarvel = $movieRepo->findBy(array("category" => "marvel")); //idem marvel

}

include "../templates/display.php";

$action = $_GET["action"] ?? "display";
switch ($action) {
    case 'register':
        break;
    case 'logout':
        break;
    case 'login':
        break;
    case 'new':
        break;
    case 'display':
    default:
        break;
}
