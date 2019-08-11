<?php


/*if(isset($_GET["name"]))   
{

    setcookie("name", $_GET["name"], time() + 5);     
    $_COOKIE["name"] = $_GET["name"];
}

if (!isset($_COOKIE["name"]))
    {
        echo "Hello platypus";
    }
else
    {
        echo "Hello " . htmlspecialchars($_COOKIE["name"]);
    }*/


function modify_cookie($name, $value)
{
    setcookie($name, $value, time() + 5);
    $_COOKIE[$name] = $value;
}

modify_cookie("name", "robert");
modify_cookie("name", "Johnson");
modify_cookie("name", "Thompson");
echo "Hello " . htmlspecialchars($_COOKIE["name"]);
?>