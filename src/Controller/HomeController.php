<?php

namespace Controller;

class HomeController
{
    public function display()
    {
        global $movieRepo;

        $ItemsDc = [];
        $ItemsMarvel = [];
        if (isset($_GET["search"])) {
            $ItemsDc = $movieRepo->findBy(array("category" => "2", "title" => '%' . $_GET["search"] . '%'));
            $ItemsMarvel = $movieRepo->findBy(array("category" => "1", "title" => '%' . $_GET["search"] . '%'));
        } else {
            $ItemsDc = $movieRepo->findBy(array("category" => "2"));
            $ItemsMarvel = $movieRepo->findBy(array("category" => "1"));
        }

        include "../templates/display.php";
    }
}
