<?php


function    my_create_map(...$array)
{
    if(count($array) == 0)
    {
        echo "The given arguments aren't valid.\n";
            return NULL;
    }
    $array3 = [];
    foreach ($array as $value)
    {
        if(count($value) < 2)
        {
            echo "The given arguments aren't valid.\n";
            return NULL;
        }
        $array3[($value[0])] = $value[1];

    }
    return $array3;
};

//$array1 = ["pi", 3.14];
//$array2 = ["answer", 42];

// var_dump(my_create_map($array1, $array2));
//my_create_map($array1, $array2);

?>