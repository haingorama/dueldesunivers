<?php

namespace Entity;

use Entity\User;

class Movie
{
    public $id;
    public $title;
    public $author;
    public $date;
    public $url_image;
    public User $user;
}
