<?php

namespace src\orm;

class Where
{

    static function addWhere(array $condition): string
    {
        $result = '';
        foreach ($condition as $row) {
            if (empty($result)) {
                $result = 'WHERE ';
            } else {
                $result .= ' AND ';
            }
            $result .= $row[0] . ' ' . $row[2] . ' ' . $row[1];
        }

        return $result;
    }

    static function orWhere(array $condition): string
    {
        $result = '';
        foreach ($condition as $row) {
            if (empty($result)) {
                $result = 'WHERE ';
            } else {
                $result .= ' OR ';
            }
            $result .= $row[0] . ' ' . $row[2] . ' ' . $row[1];
        }

        return $result;
    }
}