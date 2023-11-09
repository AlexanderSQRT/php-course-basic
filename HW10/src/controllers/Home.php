<?php

namespace src\controllers;
use src\core\Viewer;
use src\modules\Users;

class Home
{
    public function home() {
        $usersObj = new Users();
        $data['data'] = $usersObj->findAll();
        Viewer::view("Home/index", $data);
    }

    public function create() {
        var_dump($_POST);
        if (!empty($_POST)) {
            $obj = new Users();
            $obj->insertUser(array_filter($_POST));
        }
        Viewer::view("Home/create");
    }

    public function update() {
        Viewer::view("Home/update");
    }

    public function delete() {
        echo "delete!";
    }

}