<?php

namespace src\modules;
use \PDO;
use src\orm\Connector;
use src\orm\Delete;
use src\orm\Insert;
use src\orm\Update;
use src\orm\Where;

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

    public function getMovie(int $id): array
    {

        $connect = new Connector();
        $query = $connect->connect()->query("SELECT * FROM Movies WHERE id=" . $id, PDO::FETCH_ASSOC);
        $users = $query->fetchAll();
        return $users;
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

    public function updateMovie(array $data, int $condition): bool {
        try {
            $update = new Update();
            return $update->exec($data, $this->tableName, Where::addWhere([['id', $condition, '=']]));
        } catch (\Exception $e) {
            var_dump("Error in updating to Users!");
            var_dump($e->getMessage());
        }
        return false;
    }

    public function deleteMovie($condition): bool
    {
        try {
            $delete = new Delete();
            return $delete->exec($this->tableName, Where::addWhere([['id', $condition, '=']]));
        } catch (\Exception $e) {
            var_dump("Error in deleting from Users!");
            var_dump($e->getMessage());
        }
        return false;
    }
}