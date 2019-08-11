<?php



class Character
{

    private $name;
    private $strength = 2;
    private $magic = 2;
    private $intelligence = 2;
    private $life = 50;

    private static $i = 1;
    
        public function __construct($newName = null)
        {
            if (is_null($newName))
            {
                $this->name = "Character " . self::$i++;
            }
            else
            $this->name = $newName;

        }

        protected function getName()
        {
            return $this->name;
        }
        
        protected function getStrength()
        {
            return $this->strength;
        }

        
        
        protected function getMagic()
        {
            return $this->magic; 
        }
        
        
        
        
        public function getIntelligence()
        {
            return $this->intelligence;
        }
        
        protected function getLife()
        {
            return $this->life;
        }

        public function __toString()
        {
            return ("My name is " . $this->name . "\n");
        }



}

?>