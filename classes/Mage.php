<?php
class Mage extends Character{
  public $magicPoints = 100;
  
 

  // public $fireball;

  public function __construct($nom){
    parent::__construct($nom);
    $this->damage = $this->damage / 3;
   
  }

  public function batonAttack($target){
    
    $target->setLifePoints($this->damage);
   
    
    $status = "$this->name attaque $target->name avec un coup de baton! Il reste " . $target->getLifePoints() . " points de vie à $target->name!"; 
    
    return $status;
  }
  public function fireball ($target){
     // Utilise aléatoirement entre 1 et 20 points de magie (coût).
      $cost = rand(1,20);
     // nombre aléatoire en 0.7 et 3.
      $randomDecimal = rand(7,30) / 10;

     //Il a assez de points de magie : boule de feu normale.
     if ($this->magicPoints >= $cost) {
       //boule de feu normale: Les dégâts de cette attaque sont égaux au coût en points de magie * nombre aléatoire en 0.7 et 3.
       $fireballDamage = $cost * $randomDecimal;
       //J'actuallise les points de magique qu'ils restent après lancer la boule
       $this->magicPoints -= $cost;
       // je fais un domage à mon adversaire en utilisant la méthode setter pour modifier les points de vie
       $target->setLifePoints($fireballDamage);

       $status = "$this->name attaque $target->name avec un fireball! Il reste"." ". $target->getLifePoints() ." ". "points de vie à $target->name!";

      } else if ($this->magicPoints > 0) {
       //il restent de points de magique mais ils sont moins que le cout aleatoire qui est sorti pour la boule de feu
        $fireballDamage = $this->magicPoints * $randomDecimal;
        //on actuallise les points de vie que il le restent 0
        $this->magicPoints = 0;
        //on attaque l'adversaire et on l'enlève des points de vie
        $target->setLifePoints($fireballDamage);
        $status = "$this->name attaque $target->name avec un fireball! Il reste" . $target->getLifePoints() .  "points de vie à $target->name!";

      }else{
        //Puisque les points de magique sont 0, on fait points de batôn
        $status = $this->batonAttack($target);

      }
      return $status;
  }

}