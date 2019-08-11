<?php
    class Gecko
    {
        public $name;

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
    }

?>