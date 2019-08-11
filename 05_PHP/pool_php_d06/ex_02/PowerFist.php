<?php

include_once("AWeapon.php");

class PowerFist extends AWeapon
{
    protected $melee = true; // boolean //representing if the weapon is use for close combat or not

    public function __construct()
    {
       parent::__construct("Power Fist", 8, 50);

    }

    public function attack()
    {
        echo "SBAM\n";
    }


}

?>