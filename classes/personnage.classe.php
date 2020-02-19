<?php

class Personnage
{
    private $nom;
    private $force;
    private $sante;

    // CONSTRUCTOR

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

    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    //  set value Force
    //  type integer

    public function setForce($force)
    {
        $this->force = $force;
    }

    //  set value Sante
    //  type integer

    public function setSante($sante)
    {
        $this->sante = $sante;
    }
}
