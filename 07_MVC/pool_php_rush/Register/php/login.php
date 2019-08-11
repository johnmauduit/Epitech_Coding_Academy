<?php

include_once('class_user.php');

if(isset($_POST['submit']))
{
    $user = new user;
    $connect = database::connect();
    $email = $_POST['email'];
    $pwd = $_POST['password'];
    $verif_login = $user->check_login($connect, $email, $pwd);  //Verification dans la BD du mail et pwd, renvoi true or false
    $admin = $user->get_admin($connect, $email);                //Verification de l admin (0 ou 1)
    $name = $user->get_name($connect, $email);                  // Recuperation du name a partir du mail
    if($verif_login == false)
    {
        echo "Error your email/password is incorrect ! \n";
    }
    else
    {
        //echo "Login success !\n";
        session_start();
        $_SESSION['name'] = $name;
        $_SESSION['admin'] = $admin;
        if(isset($_POST['remember']))
        {
            setcookie("name", $name, time() + 3600, "/");
        }
        header('Location: ../../index.php');
    }
}
