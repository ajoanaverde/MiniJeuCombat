<?php
include("./personnage.classe.php");

class Nightblade extends Personnage
{
private $assassinat;
private $ombre;
private $siphoner;

    public function __construct($nom, $force, $sante, $mana, $endurance)
    {
        parent::__construct(["nom" => $nom, "force" => $force, "sante" => $sante, "mana" => $mana, "endurance" => $endurance]);
    }


}

//$janette = new Nightblade(["nom" => "Janette", "force" => 30, "sante" => 70, "mana" => 20, "endurance" => 90]);
$janette = new Nightblade("Janette", 10, 60, 10, 100);
$janette->parler($janette);
$janette->lireStats($janette);
