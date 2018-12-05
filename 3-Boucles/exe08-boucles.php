<?php
/*
En allant de 200 à 0 avec un pas de 12, afficher le message . Combien de fois le message s'affiche-il ?
*/

$b = 200;

while ( $b >= 0)

{
    echo 'ligne n°' . $b . '<br />';
    echo 'Enfin !!!! <br/>';
    $b = $b - 12;
}

// le message d'affice 17x

?>