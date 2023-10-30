<?php

namespace src\controllers;
use src\core\Viewer;
use src\modules\Info;

class About
{
    public function about() {
        $info = new Info();
        $data['data'] = $info->getInformationAboutUs();
        Viewer::view("About", $data);
    }
}