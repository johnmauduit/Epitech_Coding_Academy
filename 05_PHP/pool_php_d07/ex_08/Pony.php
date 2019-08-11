<?php


class Pony
{

    private $gender;
    private $name;
    private $color;


        public function __construct($newGender, $newName, $newColor)
        {
            $this->gender = $newGender;
            $this->name = $newName;
            $this->color = $newColor;
                
        }

        public function __toString()
        {
            return ("Don't worry, I'm a pony!\n");
        }

        public function __call($method, $args)
        {
            echo "I don't know what to do...\n";
        }

        public function __get($property)
        {
            if (array_key_exists($property, get_object_vars($this))) 
            {
                echo "It's not right to get a private attribute!\n";
                return get_object_vars($this)[$property];
            }
            else
                echo "There is no attribute: " . $property . ".\n";
        }

        public function __set($property, $value)
        {
            if (array_key_exists($property, get_object_vars($this))) 
            {
                echo "It's not right to get a private attribute!\n";
                $this->$property = $value;
            }
            else
                echo "There is no attribute: " . $property . ".\n";
        }


        public function speak()
        {
            echo "Hiii hiii hiii\n";
        }

        public function __destruct()
        {
            echo "I'm a dead pony.\n";
        }



}

?>