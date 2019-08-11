<?php



if (!isset($_GET["name"]))
{
    echo "Hello platypus";
}
else
    echo "Hello " . htmlspecialchars($_GET["name"]);

?>