<?php

session_start();

if(isset($_GET["name"]))        
    $_SESSION["name"] = $_GET["name"];

if (!isset($_SESSION["name"]))
    {
        echo "Hello platypus";
    }
else
    {
        echo "Hello " . htmlspecialchars($_SESSION["name"]);
    }


function remove_session()
{
    session_destroy();
}
?>