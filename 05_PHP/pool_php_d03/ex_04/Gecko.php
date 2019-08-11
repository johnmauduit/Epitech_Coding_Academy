<?php
    class Gecko
    {
        private $name;
        private $age;

        public function __construct($name = NULL, $age  = NULL)
        {
            if($name != NULL)
            {
                $this->name = $name;
                echo "Hello " . $name . " !" . "\n";
                
            }
            else
                echo "Hello !\n";

             $this->setAge($age);   
        }

        public function getName()
        {
            return $this->name;
        }

        public function setAge($age)
        {
            $this->age = $age;
        }

        public function getAge()
        {
            return $this->age;
        }

        public function status()
        {
            switch($this->age)
            {
                case 0:
                    echo "Unborn Gecko\n";
                    break;
                case in_array ($this->age, range(1, 2)):
                    echo "Baby Gecko\n";
                    break;
                case in_array($this->age, range(3, 10)):
                    echo "Adult Gecko\n";
                    break;
                case in_array ($this->age, range(11, 13)):
                    echo "Old Gecko\n";
                    break;
                default:
                    echo "Impossible Gecko\n";
                    break;
            } 
        }

        public function __destruct()
        {
            if($this->name != NULL)
            {
                echo "Bye " . $this->name . " !" . "\n";
                
            }
            else
                echo "Bye !\n";
        }
    }

?>