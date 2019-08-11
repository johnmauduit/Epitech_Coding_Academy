<?php

class Animal
{
    public const MAMMAL = 0;
    public const FISH = 1;
    public const BIRD = 2;

    protected $name;
    private $legs;
    private $type;
    private $number;

    private static $countAnimals = 0;
    private static $countMammals = 0;
    private static $countFishes = 0;
    private static $countBirds = 0;

    public function __construct($newName, $newLegs, $newType)
    {
       
            $this->name = $newName;
            $this->legs = $newLegs;
            $this->type = $newType;

            self::$countAnimals++;
            
            if ($this->getType() == "mammal")
                self::$countMammals++;

            if ($this->getType() == "fish")
                self::$countFishes++;

            if ($this->getType() == "bird")
                self::$countBirds++;

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

    public function getNumberOfAnimalsAlive()
    {
        $animal = " animal";
        echo "There " . (self::$countAnimals <= 1 ? "is" : "are") . " currently " . self::$countAnimals . $animal . (self::$countAnimals <= 1 ? "" : "s") . " alive in our world.\n";
        return self::$countAnimals;
    }

    public function getNumberOfMammals()
    {
        $mammal = " mammal";
        echo "There " . (self::$countMammals <= 1 ? "is" : "are") . " currently " . self::$countMammals . $mammal . (self::$countMammals <= 1 ? "" : "s") . " alive in our world.\n";
        return self::$countMammals;
    }
    

    public function getNumberOfFishes()
    {
        $fish = " fish";
        echo "There " . (self::$countFishes <= 1 ? "is" : "are") . " currently " . self::$countFishes . $fish . (self::$countFishes <= 1 ? "" : "es") . " alive in our world.\n";
        return self::$countFishes;
    }
    

    public function getNumberOfBirds()
    {
        $bird = " bird";
        echo "There " . (self::$countBirds <= 1 ? "is" : "are") . " currently " . self::$countBirds . $bird . (self::$countBirds <= 1 ? "" : "s") . " alive in our world.\n";
        return self::$countBirds;
    }


    public function __destruct()
    {
        self::$countAnimals--;

            if ($this->getType() == "mammal")
        self::$countMammals--;
        
            if ($this->getType() == "fish")
        self::$countFishes--;
        
            if ($this->getType() == "bird")
        self::$countBirds--;
    }

}

?>