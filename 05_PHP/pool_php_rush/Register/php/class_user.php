<?php

include_once('connect.php');

class user{

function __construc()
{

}
// Method GET

function get_name($objet, $email)
{
    $result = $objet->prepare("SELECT username FROM users WHERE email = ?");
    $result->execute(array($email));
    return $result->fetch(PDO::FETCH_COLUMN);
}

public function get_user_by_email($objet, $email)
{
    $result = $objet->prepare("SELECT * FROM users WHERE email = ? LIMIT 1");
    $result->execute(array($email));
    return $result->fetch(PDO::FETCH_ASSOC);
}

function get_id($objet, $email)
{
    $result = $objet->prepare("SELECT id FROM users WHERE email = ?");
    $result->execute(array($email));
    return $result->fetch(PDO::FETCH_COLUMN);
}

function get_email($objet, $name)
{
    $result = $objet->prepare("SELECT email FROM users WHERE username = ?");
    $result->execute(array($name));
    return $result->fetch(PDO::FETCH_COLUMN);
}

function get_admin($objet, $email)
{
    $result = $objet->prepare("SELECT admin FROM users WHERE email = ?");
    $result->execute(array($email));
    return $result->fetch(PDO::FETCH_COLUMN);
}

//Method CHECK

function check_name($objet, $name)
{
    $result = $objet->prepare("SELECT * FROM users WHERE username = ?");
    $result->execute(array($name));
    $result = $result->fetch(PDO::FETCH_ASSOC);
    if($result == false)
        return true;
    else
        return false;
}

function check_login($objet, $email, $pwd)
{
     $result = $objet->prepare("SELECT * FROM users WHERE email = ?");
     $result->execute(array($email));
     $result = $result->fetch(PDO::FETCH_ASSOC);
     $check = password_verify($pwd, $result['password']);
     if($result == false)
     {
         return false;
     }
     else if($result['email'] == $email && $check === true)
     {
         return true;
     }
}

function check_email($objet, $email)
{
    $result = $objet->prepare("SELECT * FROM users WHERE email = ?");
    $result->execute(array($email));
    $result = $result->fetch(PDO::FETCH_ASSOC);
    if($result == false)
        return true;
    else
        return false;
}

//Method CREATE
function create_user($objet, $name, $email, $pwd)
{
    $hash_pwd = password_hash($pwd, PASSWORD_DEFAULT);
    $req = $objet->prepare('INSERT INTO users (username, password, email, admin) VALUES (:username, :password, :email , 0)');
    $req->bindParam(':username', $name);
    $req->bindParam(':email', $email);
    $req->bindParam(':password', $hash_pwd);
    $req->execute();
}

function __destruct()
    {

    }
}