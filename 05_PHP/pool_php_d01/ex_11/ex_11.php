<?php




function     my_print_args($argv)
{
    
    for ($i = 1; $i < count($argv); $i++)
    {
        echo "$argv[$i]\n";
    }
}
//var_dump($argv)
//my_print_args($argv);

?>