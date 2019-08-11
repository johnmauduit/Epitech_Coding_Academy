<?php
include_once("Animal.php");

class Shark extends Animal
{
    private $frenzy;

    public function __construct($newName)
    {
        parent::__construct($newName, 0, 1);
       
            echo "A KILLER IS BORN !" . "\n";
        
            $this->frenzy = false;
    }

    public function smellBlood($smell)
    {
            if(is_bool($smell))
                $this->frenzy = $smell;
    }

    public function status()
    {
        if($this->frenzy == true)
        {
            echo $this->name . " is smelling blood and wants to kill.\n";
        }
        else
            echo $this->name . " is swimming peacefully.\n";
    }


}

?>