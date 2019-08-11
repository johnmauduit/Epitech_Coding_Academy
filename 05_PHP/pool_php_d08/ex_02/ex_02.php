<?php

$password = "marvin";

function    my_password_hash($password)
{
    $salt = uniqid();
   
    $hash = md5($password. $salt);
    return array("hash" => $hash, "salt" => $salt);
}
function    my_password_verify($password, $salt, $hash)
{
    $crypto = md5($password. $salt);
    if ($crypto === $hash)
    {
      return true;  
    }
    else
        return false;
    
}


//var_dump(my_password_hash($salt));
//$pass = "pls en ppp avec cqf";
//$ppp = my_password_hash($pass);
//$test = my_password_verify("pls", $ppp["salt"], $ppp["hash"]);
//var_dump($test);

?>