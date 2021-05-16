<?php

namespace Entity;

use Entity\User;
use ludk\Utils\Serializer;

class Movie
{
    public $id;
    public $viewOrder;
    public $title;
    public $author;
    public $date;
    public $image;
    public $category;
    public User $user;

    use Serializer;
}
