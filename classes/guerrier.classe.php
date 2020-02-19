<?php
include("personnage.classe.php");
class Guerrier extends Personnage
{
    private $muscle;

    public function __construct($nom, $force, $sante, $muscle)
    {
        parent::__construct($nom, $force, $sante);
        $this->setMuscle($muscle);
    }

    //##########
    //# GETTER #
    //##########

    /**
     * return : $muscle
     * type : string
     */
    public function getMuscle()
    {
        return $this->muscle;
    }

    //##########
    //# SETTER #
    //########## 

    /**
     * set value : $muscle
     * type : string
     */
    public function setMuscle(string $muscle)
    {
        $this->muscle = $muscle;
    }


    //####################
    //# SPECIFIC METHODS #
    //####################

    public function seBattre(Guerrier $guerrier)
    {
        echo "Je suis " . $guerrier->getNom() . " et je me bats";
    }
}

$hulk = new Guerrier("Hulk", 9999, 200, "Beaucoup Trop");
echo $hulk->getNom();
echo $hulk->getForce();
echo $hulk->getSante();
echo $hulk->getMuscle();
$hulk->seBattre($hulk);
