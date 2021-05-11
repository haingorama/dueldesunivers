<?php

namespace Entity;

use ludk\Utils\Serializer; //la classe 

class User
{
    public $id;
    public $nickname;
    public $password;

    use Serializer; //import la class > clique droit pour le faire directement
}
