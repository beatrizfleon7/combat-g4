<?php

//sql_autoload_register :función que tiene como parámetro una función anónima, es anónima porque no se va a llamar en ningún momento.
spl_autoload_register(function($class_name){include 'classes/' . $class_name .'.php';});



$pipi = new Character('Pipi'.' '.'Langstrump');
$yoda= new Mage('Yoda');


var_dump($pipi, $yoda);

echo $yoda->batonAttack($pipi);
echo '<br>';
echo $yoda->batonAttack($pipi);
echo '<br>';
echo $yoda->batonAttack($pipi);
echo '<br>';
echo $yoda->batonAttack($pipi);
echo '<br>';
echo $yoda->batonAttack($pipi);
echo '<br>';
echo $yoda->batonAttack($pipi);
echo '<br>';
echo $yoda->batonAttack($pipi);
echo '<br>';
echo $yoda->batonAttack($pipi);
echo '<br>';
echo $yoda->batonAttack($pipi);


//variable pipi llama a la función sword, y el cible es leia

// while ($pipi->getLifePoints()> 0 && $yoda->getLifePoints()>0) {
//   echo $pipi->sword($yoda);
//   echo '<br>';
//   $status = "$pipi->name a gagnée!";
//   if ($yoda->getLifePoints()>0) {
//     echo $yoda->sword($pipi);
//     echo '<br>';
//     $status= "$yoda->name a gagnée!";
//   }
//   echo'<br>';
// }
// echo $status;



// for ($i=0; $pipi->getLifePoints() && $yoda->getLifePoints() > 0; $i++) { 
//   echo "tour nº $i";
//   echo "<br>";
//   if ($i % 2 === 0) {
//     echo $pipi->sword($yoda);
//     echo '<br>';
    
//   } else{
//     echo $yoda->sword($pipi);
//     echo '<br>';
//   }
// }

// echo '<br>';
// if ($pipi->getLifePoints() < $yoda->getLifePoints()) {
//   echo "$yoda->name a gagnée";
  
// } else {
//   echo "$pipi->name a gagnée";
// }




