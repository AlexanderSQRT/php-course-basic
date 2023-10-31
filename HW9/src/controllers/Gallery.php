<?php

namespace src\controllers;
use src\core\Viewer;
use src\modules\Movies;

class Gallery
{
    public function gallery() {
        $picturesObj = new Movies();
        $data['data'] = $picturesObj->getMovies();
        Viewer::view("Gallery", $data);
    }
}