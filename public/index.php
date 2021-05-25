<?php

use Entity\Movie;
use Entity\User;
use Entity\Category;
use ludk\Persistence\ORM;
use Controller\HomeController;
use Controller\AuthController;
use Controller\ContentController;

require __DIR__ . "/../vendor/autoload.php";

session_start();

$orm = new ORM(__DIR__ . '/../Ressources');

$manager = $orm->getManager();

$movieRepo = $orm->getRepository(Movie::class);
$userRepo = $orm->getRepository(User::class);
$categoryRepo = $orm->getRepository(Category::class);

$action =substr(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH),1);
switch ($action) {

    case 'register':
        $controller = new AuthController();
        $controller->register();
        break;

    case 'logout':
        $controller = new AuthController();
        $controller->logout();
        break;

    case 'login':
        $controller = new AuthController();
        $controller->login();
        break;

    case 'new':
        $controller = new ContentController();
        $controller->create();
        break;

    case 'display':
    default:
        $controller = new HomeController();
        $controller->display();
        break;
}
