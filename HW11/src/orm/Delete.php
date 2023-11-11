<?php

namespace src\orm;

class Delete
{

    private $connector;

    public function __construct()
    {
        $this->connector = new Connector();
    }

    public function exec(string $tableName, string $condition)
    {
        $query = $this->build_sql($tableName, $condition);
        return $this->connector->connect()->exec($query);
    }

    private function build_sql($tableName, $condition): string
    {
        return 'DELETE FROM ' . $tableName . ' ' . $condition;
    }
}