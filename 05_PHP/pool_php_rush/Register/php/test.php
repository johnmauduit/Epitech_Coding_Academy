<?php

include_once('connect.php');
include_once('class_user.php');

$connect = database::connect();
//$req = $connect->query('select email from users');
/*while($d = $req->fetchcolumn())
    print_r($d. "\n") ;*/
$lol = new user;
//$lol->create_user($connect, "Luke", "luke@gmail.com", "loulou");
//$lol->check_name($connect, "luke");
//$lol->check_email($connect, "hug@hugo.com");
$res = $lol->get_admin($connect, "hugo@hugo.com");
var_dump($res);

