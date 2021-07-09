<?php
//On mets abstract pour éviter qu'elle soit encore instantié
abstract class Character
{
  //Attributs
  public $name;
  protected $lifePoints = 100;
  protected $damage = 15;

  //Méthodes
  //construnct c'est une méthode qui va se lancer au moment de instancier un nouveau character
  public function __construct($nom){
    $this->name = $nom;
    
  }
  

  //Ce function reemplace la function getter getLifePoints

  public function isAlive(){
    if ($this->lifePoints > 0) {
      return true;
    } else{
      return false;
    }
  }

  //Getter (Méthode pour récupérer un attribut privé)
  public function getLifePoints(){
    return $this->lifePoints;
  }
  //Setter (Méthode pour modifier un attribut privé)
  public function setLifePoints($damage){
    $this->lifePoints -= round($damage);
    if ($this-> lifePoints < 0){
        $this->lifePoints = 0;
    }
    return;
  }

}