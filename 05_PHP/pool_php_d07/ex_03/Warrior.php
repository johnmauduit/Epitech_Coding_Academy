<?php

include_once("Character.php");

class Warrior extends Character
{

    protected $name;
    protected $life = 100;
    protected $agility = 10;
    protected $strength = 8;
    protected $wit = 3;
    const classe = "Warrior";

        public function __construct($newName)
        {
            $this->name = $newName;
                echo $this->name . ": I'll engrave my name in history!\n";
        }

        public function getName()
        {
            return $this->name;
        }

        public function getLife()
        {
            return $this->life;
        }


        public function getAgility()
        {
            return $this->agility; 
        }


        public function getStrength()
        {
            return $this->strength;
        }


        public function getWit()
        {
            return $this->wit;
        }

        public function getClasse()
        {
            return self::classe; 
        }

        public function attack()
        {
             echo $this->name . ": I'll crush you with my hammer!\n";
        }

        public function __destruct()
        {
            echo $this->name . ": Aarrg I can't believe i'm dead...\n";
        }



}

?>