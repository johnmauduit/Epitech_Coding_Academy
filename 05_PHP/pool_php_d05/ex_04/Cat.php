<?php
include_once("Animal.php");

class Cat extends Animal
{
    private $color;

    public function __construct($newName, $newColor = NULL)
    {
       parent::__construct($newName, 4, 0);
            //$this->name = $newName;
            

            echo $newName . ": MEEEOOWWWW" . "\n";
        
            if($newColor == NULL)
            {
                $this->color = "grey";
            }
            else
                $this->color = $newColor;


        
    }

    public function getColor()
    {
        return $this->color; 
    }

    public function setColor($newColor)
    {
        $this->color = $newColor; 
    }

    public function meow()
    {
//        echo parent::$name . " the " . $this->color . " kitty is meowing.\n";

        echo $this->name . " the " . $this->color . " kitty is meowing.\n";
    }

    

}

?>