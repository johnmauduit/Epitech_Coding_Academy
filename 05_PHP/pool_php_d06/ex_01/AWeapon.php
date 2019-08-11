<?php

abstract class AWeapon
{
    protected $name; //string //name of the weapon
    protected $apcost; // int //the action point cost to use the weapon
    protected $damage; // int //the number of damage dealt by the weapon
    protected $melee = false; // boolean //representing if the weapon is use for close combat or not

    public function __construct($newName, $newApcost, $newDamage)
    {
        
        if (!is_string($newName) || !is_int($newApcost) || !is_int($newDamage))

            throw new Exception('Error in AWeapon constructor. Bad parameters.');
        else
        {
            $this->name = $newName;
            $this->apcost = $newApcost;
            $this->damage = $newDamage;
        }
        
    }

    public function getName()
    {
        return $this->name;
    }

    public function getApcost()
    {
        return $this->apcost;
    }
    
    public function getDamage()
    {
        return $this->damage;
    }
    
    public function isMelee()
    {   
        return $this->melee;
    }
    
    abstract public function attack();

}

?>