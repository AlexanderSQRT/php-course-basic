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
        if (!empty($_POST)) {
            $obj = new Users();
            $obj->insertUser(array_filter($_POST));
        }
        Viewer::view("Home/create");
    }

    public function update() {
        $data = [];
        if (!empty($_GET['id'])) {
            $usersObj = new Users();
            $data = $usersObj->findOne($_GET['id']);
        }
        if (!empty($_POST)) {
            $obj = new Users();
            $obj->updateUser(array_filter($_POST), $_GET['id']);
        }
        Viewer::view("Home/update", $data);
    }

    public function delete() {
        if (!empty($_GET['id'])) {
            $usersObj = new Users();
            $usersObj->deleteUser($_GET['id']);
        }
        header('Location:/HW11/Home');
    }

}