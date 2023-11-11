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
        Viewer::view("Gallery/update");
    }

    public function delete() {
        echo "delete!";
    }
}