<?php

class Personnage
{
    private $nom;
    private $force;
    private $sante;
    private $mana;
    private $endurance;

    // CONSTRUCTOR

    public function __construct(array $att)
    {
        $this->hydrate($att);
    }

    // HYDRATE
    public function hydrate(array $attributes){
        foreach ($attributes as $key => $value) {
            $method = "set".ucfirst($key);
            if (method_exists($this, $method)){
                $this->{$method}($value);
            }
        }
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

    public function parler(Personnage $personnage)
    {
        echo "Je suis " . $personnage->getNom() . " et je parle. <br>";
    }

    public function lireStats(Personnage $personnage)
    {
        echo $personnage->getNom() . " stats : <br> - Santé: " . $personnage->getSante() . "<br>- Mana: " . $personnage->getMana() . "<br>- Endurance: " . $personnage->getEndurance();
    }
}

//$perso1 = new Personnage(["nom" => "Jane", "force" => 30, "sante" => 70, "mana" => 20, "endurance" => 90]);

//$perso1 = new Personnage();
//echo $perso1->getNom();
//echo $perso1->getForce();
//echo $perso1->getSante();
//$perso1->seDeplacer($perso1);
//$perso1->parler($perso1);
//$perso1->lireStats($perso1);
// $nom, $force, $sante, $mana, $endurance