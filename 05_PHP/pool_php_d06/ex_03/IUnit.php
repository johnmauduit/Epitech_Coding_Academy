<?php

interface IUnit
{

    public function equip($equipement);

    public function attack($assault);

    public function receiveDamage($recDamage);

    public function moveCloseTo($move);

    public function recoverAP();

}

?>