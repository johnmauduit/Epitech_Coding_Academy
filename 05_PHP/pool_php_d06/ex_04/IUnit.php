<?php

interface IUnit
{

    public function equip($equip);

    public function attack($atk);

    public function receiveDamage($recDamage);

    public function moveCloseTo($target);

    public function recoverAP();

}

?>