<?php

namespace src\modules;
use \PDO;
use src\orm\Connector;
use src\orm\Insert;

class Movies
{
    private $tableName = 'Movies';
    public function getMovies(): array
    {
        $connect = new Connector();
        $query = $connect->connect()->query("SELECT * FROM Movies", PDO::FETCH_ASSOC);
        $movies = $query->fetchAll();
        return $movies;
    }

    public function insertMovie(array $data): bool
    {
        try {
            $insert = new Insert();
            return $insert->exec($data, $this->tableName);
        } catch (\Exception $e) {
            var_dump("Error in inserting to Movies!");
            var_dump($e->getMessage());
        }
        return false;
    }
}