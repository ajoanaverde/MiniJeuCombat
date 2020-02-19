<?php
include('./personnage.classe.php');
class Mage extends Personnage
{
   private $sortilège;
   private $mana;




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
}
