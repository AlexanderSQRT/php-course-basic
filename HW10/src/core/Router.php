<?php

namespace src\core;

final class Router
{
    private $classPatch = 'src\\controllers\\'; // get access to the classes
    public function run()
 {
     $URL = $_SERVER['REQUEST_URI'];
     $endPointName = basename($URL); // name of the method. like home in /HW7/home

     $path = "";

     function getLastCharacter($path) {
         return substr($path, strlen($path) - 1);
     }

     if ($URL !== "/HW10/") {
         $urlParts = explode("/", substr($URL, 6));
         $path = $this->classPatch . $urlParts[0];
         $lastCharacter = getLastCharacter($path);
         $path = $lastCharacter === "/" ? substr_replace($path, "", -1) : $path;
     } else {
         $path = $this->classPatch . "home";
         $endPointName = "home";
     }

     if (!class_exists($path)) {
         $path = $this->classPatch . "error";
     }

     $obj = new $path();

     if (method_exists($obj, $endPointName)) {
         $obj->$endPointName();
     } else {
         $path = $this->classPatch . "error";
         $obj = new $path();
         $endPointName = "error";
         $obj->$endPointName();
     }
 }
}