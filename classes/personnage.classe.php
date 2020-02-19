<?php

class Personnage
{
    private $nom;
    private $force;
    private $sante;

    // CONSTRUCTOR

    public function __construct($nom, $force, $sante)
    {
        $this->setNom($nom);
        $this->setForce($force);
        $this->setSante($sante);
    }

    // GETTERS

    //  return value Nom
    //  type string

    public function getNom()
    {
        return $this->nom;
    }

    //  return value Force
    //  type integer

    public function getForce()
    {
        return $this->force;
    }

    //  return value Sante
    //  type integer

    public function getSante()
    {
        return $this->sante;
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
    //  type integer

    public function setSante(int $sante)
    {
        $this->sante = $sante;
    }
}

$perso1 = new Personnage("Robin", 100, 200);
echo $perso1->getNom();
echo $perso1->getForce();
echo $perso1->getSante();
