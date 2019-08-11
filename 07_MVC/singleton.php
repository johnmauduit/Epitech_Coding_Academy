<?php

trait Singleton
{
    public static $instances = [];

    public function getInstance() {
        $caller = get_called_class();

        if (!isset(self::$instances[$caller]))
            self::$instances[$caller] = new static;
        
        return self::$instances[$caller];
    }
}

class Database
{
    use Singleton;

    public $test;

    public function set($var) {
        $this->test = $var;
    }
}

class Test extends Database
{
    use Singleton;
}

Database::getInstance()->set('foo');
echo Database::getInstance()->test . "\n";
var_dump(Database::getInstance());
var_dump(Test::getInstance());