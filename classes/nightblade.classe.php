<?php
include("./personnage.classe.php");

class Nightblade extends Personnage
{
private $assassinat;
private $ombre;
private $siphoner;

    public function __construct($nom, $force, $sante, $mana, $endurance, $assassinat, $ombre, $siphoner)
    {
        parent::__construct(["nom" => $nom, "force" => $force, "sante" => $sante, "mana" => $mana, "endurance" => $endurance]);
        $this->assassinat = $assassinat;
        $this->ombre = $ombre;
        $this->siphoner = $siphoner;
    }


}

//$janette = new Nightblade(["nom" => "Janette", "force" => 30, "sante" => 70, "mana" => 20, "endurance" => 90]);
//$janette = new Nightblade("Janette", 10, 60    public function getValue(){
        
//}, 10, 100, 1, 1, 1);
$janette->parler($janette);
$janette->lireStats($janette);
