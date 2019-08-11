<?php

include_once("IUnit.php");

abstract class AMonster implements IUnit
{
    protected $name; // name of unit
    protected $hp = 0; // health points
    protected $ap = 0; // action points ( ou nombre de mana ou d' energie)
    protected $damage = 0;
    protected $apcost = 0;
    protected $melee = true;

    protected $inRange = false; 
    protected $isDead = false;
    
    public function __construct($AmName)
    {
        $this->name = $AmName;

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
        if ($isDead == true)
        return false;


        if($equip == true)
        echo "Monsters are proud and fight with their own bodies.\n";
    }

    public function moveCloseTo($target)
    {
        if ($isDead == true)
        return false;


        if (!($target instanceof IUnit))
        {
            throw new Exception ('Error in AMonster. Parameter is not an IUnit.');
        }
        else 
        {
            $this->inRange = $target;
            echo $this->name . " is moving closer to " . $target->getName() . ".\n";
        }
    }

    public function attack($atk)
    {
        if ($isDead == true)
        return false;

        if (!($atk instanceof IUnit))
        throw new Exception ('Error in AMonster. Parameter is not an IUnit.');
        
        else
        echo $this->name . ": I'm too far away from " . $target->getName() . ".\n";

        if ($atk == $this->inRange && $ap > $apCost)
        {
            $this->ap = $ap - $apCost;
                echo $this->name . " attacks " . $target->getName() . ".\n";
            $this->target = $target - receiveDamage($recDamage);
        }
    }

    public function receiveDamage($recDamage)
    {
        if ($isDead == true)
            return false;


        $this->damage = $recDamage;

        $this->$hp = $hp - $recDamage;

        if ($hp <= 0)
         $this->isDead = true;


    }

    public function recoverAP()
    {
        if ($isDead == true)
            return false;


        if ($ap <= 50)
        {
            $this->ap += 7;
            if ($ap > 50)
             $this->ap = 50;
        }
    
    }

}

?>