<?php 

namespace Entity;

use ludk\Utils\Serializer;

class Category
{
    public $id;
    public $category;

    use Serializer;
}
