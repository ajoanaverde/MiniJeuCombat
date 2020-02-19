<?php
include('./personnage.classe.php');
class Mage extends Personnage
{
   private $sortilège;
   private $mana;

   //constructeur 

   public function __construct($nom, $force, $sante, $sortilège, $mana)
   {
      $this->setNom($nom);
      $this->setForce($force);
      $this->setSante($sante);
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
}
