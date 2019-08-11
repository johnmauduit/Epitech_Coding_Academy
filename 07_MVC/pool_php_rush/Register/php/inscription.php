<?php

include_once('class_user.php');

if(isset($_POST['submit']))
{
    if($_POST['password'] != $_POST['password_confirmation'])
    {
        echo "Error your password or your password confirmation is incorrect ! \n";
        header('Location: ../register.html');
    }
    else
    {
        $user = new user;
        $connect = database::connect();
        $name = $_POST['name'];
        $email = $_POST['email'] ;
        $pwd = $_POST['password'] ;
        $verif_name = $user->check_name($connect, $name);           //Verification si le nom n'existe pas dans la BD 
        $verif_email = $user->check_email($connect, $email);        //Verification si le mail n'existe pas dans la BD
        if($verif_name == false && $verif_email == false)
        {
            echo "This name already exist !\n";
        }
        else
        {
            $user->create_user($connect, $name, $email, $pwd);         //Requete pour la creation dans la BD
            session_start();
            $_SESSION['name'] = $name;
            header('Location: ../../index.php');
        }
    }
}