<?php

//////////////////// SINGLETON TO CONNECT DB ////////////////////

class Database extends PDO
{
    protected static $db = NULL;
//tester de passer le construct en private
    function __construct()
    {
        parent::__construct("mysql:host=localhost; port=80; dbname=todo_php", "Admin", "admin123");
        $this->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    public static function get_db() // la bonne convention est de mettre get_instance().
    {
        if (!isset(self::$db))
        {
            self::$db = new Database();
        }
        return self::$db;
    }
}
?>