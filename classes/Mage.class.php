<?php
include('./personnage.classe.php');
class Mage extends Personnage
{
   private $sortilège;
   private $mana;

   //constructeur 

   public function __construct($nom, $force, $sante, $sortilège, $mana)
   {
      parent::__construct($nom, $force, $sante);
      $this->setSortilège($sortilège);
      $this->setMana($mana);
   }


   //getters

   /**
    * return $sortilège
    * type : string
    */
   public function getSortilège()
   {
      return $this->sortilège;
   }

   /**
    * return $mana
    * type : integer
    */
   public function getMana()
   {
      return $this->mana;
   }

   //setters

   /**
    * set value $sortilège
    * type : string
    */
   public function setSortilège(string $sortilège)
   {
      $this->sortilège = $sortilège;
   }


   /**
    * set value $mana
    * type : string
    */
   public function setMana(int $mana)
   {
      $this->mana = $mana;
   }



   //####################
   //# SPECIFIC METHODS #
   //####################

   public function lancerDesSorts(Mage $mage)
   {
      echo "Je suis " . $mage->getNom() . " et je me bats";
   }
}

$lux = new Mage("Lux", 9999, 200, "Beaucoup Trop", 10);
echo $lux->getNom();
echo $lux->getForce();
echo $lux->getSante();
echo $lux->getSortilège();
echo $lux->getMana();
$lux->lancerDesSorts($lux);
