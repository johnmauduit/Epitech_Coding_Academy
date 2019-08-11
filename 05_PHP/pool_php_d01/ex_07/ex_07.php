<?php



function     get_angry_dog($nbr){
    $str = "woof";
    $result = "";
    for ($i = 0; $i < $nbr; $i++){

        $result .= $str;
        
    }
   return($result . "\n");
}

//echo (get_angry_dog(5));

?>