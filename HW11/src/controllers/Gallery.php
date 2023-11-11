<?php

namespace src\controllers;
use src\core\Viewer;
use src\modules\Movies;

class Gallery
{
    public function gallery() {
        $picturesObj = new Movies();
        $data['data'] = $picturesObj->getMovies();
        Viewer::view("Gallery/index", $data);
    }

    public function create() {
        if (!empty($_POST)) {
            $obj = new Movies();
            $obj->insertMovie(array_filter($_POST));
        }
        Viewer::view("Gallery/create");
    }

    public function update() {
        $data = [];
        if (!empty($_GET['id'])) {
            $usersObj = new Movies();
            $data = $usersObj->getMovie($_GET['id']);
        }
        if (!empty($_POST)) {
            $obj = new Movies();
            $obj->updateMovie(array_filter($_POST), $_GET['id']);
        }
        Viewer::view("Gallery/update", $data);
    }

    public function delete() {
        if (!empty($_GET['id'])) {
            $usersObj = new Movies();
            $usersObj->deleteMovie($_GET['id']);
        }
        header('Location:/HW11/Gallery');
    }
}