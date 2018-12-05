<?php 

/*
Créer une variable et l'initialiser à 1. Tant que cette variable n'atteint pas 10, il faut :

    l'afficher
    l'incrementer de la moitié de sa valeur


*/

$var1 = (integer) 1;


while ($var1 <= 10) {
    echo $var1 . '</br>';
    $var1 += $var1 /2;
}

?>