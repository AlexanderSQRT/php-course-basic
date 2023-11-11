<?php

namespace src\orm;
use \PDO;

class Connector
{

    private $dsn;
    private $username;
    Private $password;

    public function __construct()
    {
        $params = include __DIR__ . "/../config/params.php";
        $this->dsn = $params["driver"] . ":host=" . $params["host"] . ";dbname=" . $params["dbname"];
        $this->username = $params["user"];
        $this->password = $params["password"];
    }

    /**
     * @return PDO
     */

    public function connect(): PDO {
        return new PDO($this->dsn, $this->username, $this->password);
}
}