<?php

namespace src\orm;
use src\orm\Connector;

class Update
{
    private $connector;

    public function __construct()
    {
        $this->connector = new Connector();
    }

    public function exec(array $data, string $tableName, string $condition)
    {
        $updated = [];
        foreach ($data as $key => $value) {
            $value = "'" . $value . "'";
            $updated[] = $key . "=" . $value;
        }

        $query = $this->build_sql(implode(',', $updated), $tableName, $condition);
        return $this->connector->connect()->exec($query);
    }

    private function build_sql($data, $tableName, $condition): string
    {
        return 'UPDATE ' . $tableName . ' SET ' . $data . ' ' . $condition;
    }
}