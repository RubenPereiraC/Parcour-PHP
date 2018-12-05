<?php 

/*
Créer deux variables. Initialiser la première à 0 et la deuxième avec un nombre compris en 1 et 100. 
Tant que la première variable n'est pas supérieur à 20 :
    multiplier la première variable avec la deuxième
    afficher le résultat
    incrementer la première variable
*/

$test = 1;
$var = 50;

while ($test <= 20) {
$resultat = ($test * $var);
echo $resultat . '</br>';
$test++;
}

?>