<?php

namespace src\modules;
use \PDO;
use src\orm\Connector;
use src\orm\Insert;

class Users
{

    private $tableName = 'Users';
    public function findAll(): array
    {

        $connect = new Connector();
        $query = $connect->connect()->query("SELECT * FROM Users", PDO::FETCH_ASSOC);
        $users = $query->fetchAll();
        return $users;
    }

    public function insertUser(array $data): bool
    {
        try {
            $insert = new Insert();
            return $insert->exec($data, $this->tableName);
        } catch (\Exception $e) {
            var_dump("Error in inserting to Users!");
            var_dump($e->getMessage());
        }
        return false;
    }
}