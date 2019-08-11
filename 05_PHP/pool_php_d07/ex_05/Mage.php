<?php

include_once("Character.php");


class Mage extends Character
{

    protected $name;
    protected $life = 70;
    protected $agility = 10;
    protected $strength = 3;
    protected $wit = 10;
    const classe = "Mage";

        public function __construct($newName)
        {
            $this->name = $newName;
                echo $this->name . ": May the god be with me!\n";
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
            echo $this->name . ": Feel the power of my magic!\n"; 
        }

        public function moveRight()
        {
            echo $this->name . ": moves right furtively.\n";
        }
    
        public function moveLeft()
        {
            echo $this->name . ": moves left furtively.\n";
        }
    
        public function moveUp()
        {
            echo $this->name . ": moves up furtively.\n";
        }
    
        public function moveDown()
        {
            echo $this->name . ": moves down furtively.\n";
        }

        public function __destruct()
        {
            echo $this->name . ": By the four gods, I passed away...\n";
        }

}

?>