<?php

class Animal
{
    public const MAMMAL = 0;
    public const FISH = 1;
    public const BIRD = 2;

    private $name;
    private $legs;
    private $type;

    public function __construct($newName, $newLegs, $newType)
    {
       
            $this->name = $newName;
            $this->legs = $newLegs;
            $this->type = $newType;
            echo "My name is " . $newName . " and I am a " . $this->getType() . " !" . "\n";
        
    }

    public function getName()
        {
            return $this->name; 
        }

        public function getLegs()
        {
            return $this->legs; 
        }

        public function getType()
        {
            switch($this->type)
            {
                case 0:
                    return "mammal";
                    break;
                case 1:
                    return "fish";
                    break;
                case 2:
                    return "bird";
                    break;
                default:
                    //echo "Not an Animal\n";
                    break;
            }  
        }

}

?>