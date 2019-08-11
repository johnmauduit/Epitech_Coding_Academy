<?php

include_once("Character.php");

class Pony extends Character
{

    public $gender;
    public $name;
    public $color;


        public function __construct($newName)
        {
            $this->name = $newName;
                
        }

        public function __toString()
        {
            return ("Don't worry, I'm a pony!\n");
        }

        public function __destruct()
        {
            echo "I'm a dead pony.\n";
        }



}

?>