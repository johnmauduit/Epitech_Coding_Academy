<?php

include_once('admin.php');

if(isset($_POST['update']))
{
    if($_POST['password'] != $_POST['password_confirmation'])
    {
        echo "Error your password or your password confirmation is incorrect ! \n";
        //header("Refresh:0");
        //header('Location: ../adminspace/adminindex.php');
    }
    else
    {
        $user = new AdminUser;
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
            $user->uUpdate($connect, $name, $email, $admin);         //Requete pour la creation dans la BD
            //header("Refresh:0; url=../adminspace/adminindex.php");
            //header('Location: ../adminspace/adminindex.php');
        }
    }
}


?>