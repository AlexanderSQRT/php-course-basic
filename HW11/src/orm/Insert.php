<?php

namespace src\orm;
use src\orm\Connector;

class Insert
{

    private $connector;

    public function __construct()
    {
        $this->connector = new Connector();
    }

    public function exec(array $data, string $tableName)
    {
        $columns = [];
        $values = [];
        foreach ($data as $key => $value) {
            $columns[] = $key;
            $values[] = $value;
        }

        $query = $this->build_sql(implode(',', $columns) , $this->prepareValues($values) , $tableName);
        return $this->connector->connect()->exec($query);
    }

    private function build_sql($columns, $values, $tableName): string
    {
        return 'INSERT INTO ' . $tableName . '(' . $columns . ') VALUES (' . $values . ')';
    }

    private function prepareValues(array $values): string
    {
        $temp = [];
        foreach ($values as $elem) {
            if (!is_int($values)) {
                $temp[] = "'" . $elem . "'";
            } else {
                $temp = $elem;
            }
        }
        return implode(",", $temp);
    }
}