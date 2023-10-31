<?php

namespace src\controllers;
use src\core\Viewer;
use src\modules\ErrorMessage;

class Error
{
    public function error() {
        $info = new ErrorMessage();
        $data['data'] = $info->getMessage();
        Viewer::view("Error", $data);
    }
}