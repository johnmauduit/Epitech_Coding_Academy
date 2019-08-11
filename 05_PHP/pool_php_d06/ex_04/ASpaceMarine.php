<?php

include_once("IUnit.php");

abstract class ASpaceMarine implements IUnit
{
    protected $name; // name of unit
    protected $hp = 0; // health points
    protected $ap = 0; // action points
    
    public function __construct($AsmName)
    {
        $this->name = $AsmName;
        
        //parent::__construct("Plasma Rifle", 5, 21);

    }

    public function getName()
    {
        return $this->name;
    }

    public function getHp()
    {
        return $this->hp;
    }
    
    public function getAp()
    {
        return $this->ap;
    }

    public function getDamage()
    {
        return $this->damage;
    }
    
    public function equip($equip = false)
    {

    }

    public function moveCloseTo($target)
    {

    }

    public function attack($atk)
    {
        
    }

    public function receiveDamage($recDamage)
    {

    }

    public function recoverAP()
    {
    
    }

}

?> 