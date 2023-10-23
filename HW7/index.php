<?php

include "vendor\autoload.php";

$URL = $_SERVER['REQUEST_URI'];
$endPointName = basename($URL); // name of the method. like home in /HW7/home

$classPatch = 'src\controllers\\'; // get access to the classes

$path = "";

function getLastCharacter($path) {
    return substr($path, strlen($path) - 1);
}

if ($URL !== "/HW7/") {
    $path = $classPatch . substr($URL, 5);
    $lastCharacter = getLastCharacter($path);
    $path = $lastCharacter === "/" ? substr_replace($path, "", -1) : $path;
} else {
    $path = $classPatch . "home";
    $endPointName = "home";
}

if (!class_exists($path)) {
    $path = $classPatch . "error";
}

$obj = new $path();

if (method_exists($obj, $endPointName)) {
    $obj->$endPointName();
} else {
    $endPointName = "error";
    $obj->$endPointName();
}