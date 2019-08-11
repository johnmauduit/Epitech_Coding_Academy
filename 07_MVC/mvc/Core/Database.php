<?php

namespace Core;

use Helpers\Singleton;

class Database
{
    use Singleton;

    private $connection;

    private $dsn = 'mysql:host=localhost;dbname=hetwan;charset=utf8';
    private $username = 'root';
    private $password = 'root';

    public function getConnection()
    {
        if (!$this->connection) {
            $this->connection = new \PDO($this->dsn, $this->username, $this->password);
            $this->connection->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        }

        return $this->connection;
    }
}