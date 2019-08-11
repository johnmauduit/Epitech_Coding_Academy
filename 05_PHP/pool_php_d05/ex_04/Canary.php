<?php
include_once("Animal.php");

class Canary extends Animal
{
    private $eggs = 0;

    //private static $countEggs = 0;

    public function __construct($newName)
    {
       parent::__construct($newName, 2, 2);

        echo "Yellow and smart ? Here I am !" . "\n";
     
        
    }

    public function getEggsCount()
    {
        return $this->eggs;
    }

    public function layEgg()
    {
       $this->eggs++;
    }
}

?>