<?php
class Mage extends Character{
  public $magicPoints = 100;
  
 

  // public $fireball;

  public function __construct($nom){
    $this->name = $nom;
    $this->damage = $this->damage / 3;
   
  }

  public function batonAttack($target){
    $target->setLifePoints($this->damage);

    $status = "$this->name attaque $target->name avec un coup de baton! Il reste " . $target->getLifePoints() . " points de vie à $target->name!"; 
    
    return $status;
  }

}