<?php

function my_swap(&$a, &$b){

   $temp = $a;
   $a = $b;
   $b = $temp;

}

/*$a = "Hello";
$b = "World";

my_swap($a, $b);

var_dump($a, $b);*/

?>
