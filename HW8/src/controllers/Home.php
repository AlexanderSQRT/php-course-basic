<?php

namespace src\controllers;
use src\core\Viewer;
use src\modules\Users;

class Home
{
    public function home() {
        $usersObj = new Users();
        $data['data'] = $usersObj->findAll();
        Viewer::view("Home", $data);
    }

}