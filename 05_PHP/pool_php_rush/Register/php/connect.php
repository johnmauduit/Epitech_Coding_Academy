<?php

class database extends PDO
{
    protected static $connection = NULL;

    function __construct()
    {
        parent::__construct("mysql:host=localhost; port=80; dbname=pool_php_rush", "Admin", "admin123");
        $this->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    public static function connect()
    {
        if(!isset(self::$connection))
        {
            self::$connection = new database;
        }
        return self::$connection;
    }
}