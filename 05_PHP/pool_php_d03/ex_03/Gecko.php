<?php
    class Gecko
    {
        private $name;

        public function __construct($name = NULL)
        {
            if($name != NULL)
            {
                $this->name = $name;
                echo "Hello " . $name . " !" . "\n";
                
            }
            else
                echo "Hello !\n";
        }

        public function getName()
        {
            return $this->name;
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