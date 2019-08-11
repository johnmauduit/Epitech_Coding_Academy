<?php

namespace chocolate
{

    class Mars
    {
        private static $count = 0;
        private $id = 0;
        public function __construct()
        {
           $this->id = self::$count++; 
        }
        
        public function getId()
        {
            return $this->id;
        }

        
    }

}

namespace planet
{

    class Mars
    {

        private  $size;
        
        public function __construct($newSize = NULL)
        {
            $this->size = $newSize;
            //     echo $this->size . " size de ouf!\n";
        }

        public function getSize()
        {
            return $this->size;
        }

        public function setSize($newSize)
        {
            $this->size = $newSize;
        }
        
    }

}
?>