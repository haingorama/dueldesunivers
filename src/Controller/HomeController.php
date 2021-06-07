<?php

namespace Controller;

use Entity\Category;
use Entity\Movie;
use ludk\Http\Request;
use ludk\Http\Response;
use ludk\Controller\AbstractController;

class HomeController extends AbstractController
{
    public function display(Request $request): Response
    {
        $movieRepo = $this->getOrm()->getRepository(Movie::class);
        
        $ItemsDc = [];
        $ItemsMarvel = [];

        if ($request->query->has("search")) {
            $ItemsDc = $movieRepo->findBy(array("category" => "2", "title" => '%' . $request->query->get("search") . '%'));
            $ItemsMarvel = $movieRepo->findBy(array("category" => "1", "title" => '%' . $request->query->get("search") . '%'));
        } else {
            $ItemsDc = $movieRepo->findBy(array("category" => "2"));
            $ItemsMarvel = $movieRepo->findBy(array("category" => "1"));
        }
        $data = array(
            "ItemsMarvel" => $ItemsMarvel,
            "ItemsDc" => $ItemsDc
        );
        return $this->render('display.php', $data);
    }
}
