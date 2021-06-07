<?php 
namespace ContentController;

use Entity\Category;
use Entity\Movie;
use ludk\Http\Request;
use ludk\Http\Response;
use ludk\Controller\AbstractController;

class ContentController extends AbstractController
{
    public function create(Request $request): Response
    {
        $categoryRepo = $this->getOrm()->getRepository(Category::class);
        $manager = $this->getOrm()->getManager();
        $categories = $categoryRepo->findAll();

        if (
            $request->getSession()->has('user')
            && $request->request->has('title')
            && $request->request->has('author')
            && $request->request->has('date')
            && $request->request->has('viewOrder')
            && $request->request->has('image')
            && $request->request->has('categoryId')
        ) {
            $errorMsg = NULL;
            if (strlen(trim($request->request->get('title'))) < 2) {
                $errorMsg = "Your title should have at least 2 characters.";
            } else if (strlen(trim($request->request->get('author'))) < 2) {
                $errorMsg = "Your author should have at least 2 characters.";
            } else if (strlen(trim($request->request->get('date'))) == 0) {
                $errorMsg = "Your content shouldn't be empty.";
            } else if (intval(trim($request->request->get('viewOrder'))) == 0) {
                $errorMsg =  "You should tell the order of view.";
            } else if (intval($request->request->get('image')) == 0) {
                $errorMsg = "You should choose an image";
            } else if (intval($request->request->get('categoryId')) == 0) {
                $errorMsg = "You should choose an universe.";
            }
            if ($errorMsg) {
                $data = array(
                    "errorMsg" => $errorMsg,
                    "categories" => $categories
                );
                return $this->render("CreateForm.php", $data);
                // include "../templates/CreateForm.php";
            } else {
                $category = $categoryRepo->find($request->request->get('categoryId'));
                $newMovie = new Movie();
                $newMovie->title = trim($request->request->get('title'));
                $newMovie->author = trim($request->request->get('author'));
                $newMovie->viewOrder = trim($request->request->get('viewOrder'));
                $newMovie->date = date('Y');
                $newMovie->image = intval($request->request->get('image'));
                $newMovie->category = $category;
                $newMovie->user = $request->getSession()->get("user");
                $manager->persist($newMovie);
                $manager->flush();
                return $this->redirectToRoute("display");
            }
        } else {
            $data = array(
                "categories" => $categories
            );
            return $this->render("CreateForm.php", $data);
        }
    }
}