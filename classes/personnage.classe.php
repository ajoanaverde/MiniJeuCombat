<?php

class Personnage
{
    private $nom;
    private $force;
    private $sante;
    private $mana;
    private $endurance;

    // CONSTRUCTOR

    public function __construct($nom, $force, $sante, $mana, $endurance)
    {
        $this->setNom($nom);
        $this->setForce($force);
        $this->setSante($sante);
        $this->setMana($mana);
        $this->setEndurance($endurance);
    }

    // GETTERS

    //  return value Nom
    //  type string

    public function getNom()
    {
        return $this->nom;
    }

    //  return value Force
    //  type integer (0-50)

    public function getForce()
    {
        return $this->force;
    }

    //  return value Sante
    //  type integer (0-100)

    public function getSante()
    {
        return $this->sante;
    }

    //  return value Mana
    //  type integer (0-100)

    public function getMana()
    {
        return $this->mana;
    }

    //  return value Endurance
    //  type integer (0-100)

    public function getEndurance()
    {
        return $this->endurance;
    }
    //   SETTERS

    //  set value Nom
    //  type string

    public function setNom(string $nom)
    {
        $this->nom = $nom;
    }

    //  set value Force
    //  type integer

    public function setForce(int $force)
    {
        $this->force = $force;
    }

    //  set value Sante
    //  type integer (0-100)

    public function setSante(int $sante)
    {
        $this->sante = $sante;
    }

    //  set value Mana
    //  type integer  (0-100)

    public function setMana(int $mana)
    {
        $this->mana = $mana;
    }

    //  set value Endurance
    //  type integer (0-100)

    public function setEndurance(int $endurance)
    {
        $this->endurance = $endurance;
    }

    //   SPECIFIC METHODS

//    function seDeplacer(Personnage $personnage)
//    {
//        echo "Je suis " . $personnage->getNom() . " et je me deplace";
//    }

    public function parler(Personnage $personnage)
    {
        echo "Je suis " . $personnage->getNom() . " et je parle. <br>";
    }

    public function lireStats(Personnage $personnage)
    {
        echo $personnage->getNom() . " stats : <br> - Santé: " . $personnage->getSante() . "<br>- Mana: " . $personnage->getMana() . "<br>- Endurance: " . $personnage->getEndurance();
    }

}

$janette = new Personnage("Janette", 10, 60, 10, 100);
$janette->parler($janette);
$janette->lireStats($janette);


//$perso1 = new Personnage();
//echo $perso1->getNom();
//echo $perso1->getForce();
//echo $perso1->getSante();
//$perso1->seDeplacer($perso1);
//$perso1->parler($perso1);
