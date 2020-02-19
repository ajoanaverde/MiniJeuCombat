<?php
include("./personnage.classe.php");

class Nightblade extends Personnage
{


    public function __construct($nom, $force, $sante, $mana, $endurance)
    {
        parent::__construct($nom, $force, $sante, $mana, $endurance);
    }


}


$janette = new Personnage("Janette", 10, 60, 10, 100);
$janette->parler($janette);
$janette->lireStats($janette);
