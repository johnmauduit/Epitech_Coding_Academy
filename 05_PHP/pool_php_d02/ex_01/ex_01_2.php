<?php


function    my_included_putstr($argv)
{
    for ($i = 1; $i < count($argv); $i++)
    {
        echo $argv[$i];
    }
}


?>