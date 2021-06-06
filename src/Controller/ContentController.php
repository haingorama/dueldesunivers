<?php 
namespace ContentController;

use Entity\Movie;

class ContentController
{
    public function create()
    {
        global $categoryRepo;
        global $manager;
        $categories = $categoryRepo->findAll();

        if (
            isset($_SESSION['user']) 
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
    }
}