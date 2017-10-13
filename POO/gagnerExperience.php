<?php
class Personnage
{
  private $_experience = 50;

  public function afficherExperience()
  {
    echo $this->_experience;
  }

  public function gagnerExperience()
  {
    $this->_experience = $this->_experience + 1;
  }
}
$perso = new Personnage;
$perso->gagnerExperience ();

$perso = new Personnage;
$perso->gagnerExperience();
$perso->afficherExperience();
?>