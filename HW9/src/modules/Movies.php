<?php

namespace src\modules;
use \PDO;

class Movies
{
    public function getMovies(): array
    {
        $dsn = "mysql:host=localhost;dbname=php-course-basic";
        $dbObject = new PDO($dsn, "root");
        $moviesAssocArray = $dbObject->query("SELECT * FROM Movies", PDO::FETCH_ASSOC);
        $movies = $moviesAssocArray->fetchAll();
        return $movies;
    }
}