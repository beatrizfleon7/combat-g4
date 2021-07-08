<?php
//
abstract class Character
{
  //Attributs
  public $name;
  private $lifePoints = 100;
  public $damage = 15;

  //Méthodes
  //construnct c'est une méthode qui va se lancer au moment de instancier un nouveau character
  public function __construct($nom){
    $this->name = $nom;
    
  }
  
  public function sword($target){
    $target->setLifePoints($this->damage);
    $status = "$this->name attaque $target->name! Il reste $target->lifePoints points de vie à $target->name!"; 
    return $status;
  }

  //Getter (Méthode pour récupérer un attribut privé)
  public function getLifePoints(){
    return $this->lifePoints;
  }
  //Setter (Méthode pour modifier un attribut privé)
  public function setLifePoints($damage){
    $this->lifePoints -= $damage;
    if ($this-> lifePoints < 0){
        $this->lifePoints = 0;
    }
    return;
  }

}