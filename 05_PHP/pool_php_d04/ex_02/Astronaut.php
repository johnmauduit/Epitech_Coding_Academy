<?php

    class Astronaut
    {
        private static $id = 0;
        private $name = NULL;
        private $snacks = 0;
        private $destination = NULL;

        public function __construct($newName)
        {

                $this->name = $newName;
                echo $this->name . " ready for launch !\n";

        }
        
        public function getId()
        {
            return self::$id++;
        }

        public function getDestination()
        {
            //return self::$id++;
        }





    }
?>