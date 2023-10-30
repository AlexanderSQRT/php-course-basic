<?php

namespace src\controllers;
use src\core\Viewer;
use src\modules\GalleryImages;

class Gallery
{
    public function gallery() {
        $picturesObj = new GalleryImages();
        $data['data'] = $picturesObj->getTeamPictures();
        Viewer::view("Gallery", $data);
    }
}