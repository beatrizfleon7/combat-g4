<?php

class Warrior extends Character 
{
  public function sword($target){
    $target->setLifePoints($this->damage);
    $status = "$this->name attaque $target->name! Il reste $target->lifePoints points de vie à $target->name!"; 
    return $status;
  }
  
}