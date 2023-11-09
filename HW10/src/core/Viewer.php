<?php

namespace src\core;

class Viewer
{
    public static function View(string $name, array $data = []): void
    {
        extract($data); // get all the keys from the array and transform them into variables with their values
        include __DIR__ . "\\..\\..\\view\\" . $name . ".php";
    }
}