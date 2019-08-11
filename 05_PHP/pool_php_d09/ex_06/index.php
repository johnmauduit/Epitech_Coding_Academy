<?php


if(isset($_GET["name"]))   
{

    setcookie("name", $_GET["name"], time() + 60);     
    $_COOKIE["name"] = $_GET["name"];
}

if (!isset($_COOKIE["name"]))
    {
        echo "Hello platypus";
    }
else
    {
        echo "Hello " . htmlspecialchars($_COOKIE["name"]);
    }


function remove_session($del)
{
    unset($_COOKIE[$del]);
    setcookie($del, "", time() - 3600);
}

remove_session("name");
?>