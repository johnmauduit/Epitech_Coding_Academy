<?php

    class Mars
    {
        private static $id = 0;

        public function __construct()
        {
           
        }

        public function getId()
        {
            return self::$id++;
        }




    }
?>