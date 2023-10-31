<?php

namespace src\modules;
use \PDO;


class Users
{
    public function findAll(): array
    {
        $dsn = "mysql:host=localhost;dbname=php-course-basic";
        $dbObject = new PDO($dsn, "root");
        $usersAssocArray = $dbObject->query("SELECT * FROM Users", PDO::FETCH_ASSOC);
        $users = $usersAssocArray->fetchAll();
        return $users;
    }
}