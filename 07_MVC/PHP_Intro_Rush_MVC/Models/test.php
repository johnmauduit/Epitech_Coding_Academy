<?php

include_once("Db.php");

//$co = Database::db_connect();
$connect = Database::$db;

$test = new Database();
// $res = $test->db_connect($connect);
var_dump($connect);
//var_dump($test);



?>