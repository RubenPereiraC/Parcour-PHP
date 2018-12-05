<?php

/*
En allant de 1 à 100 avec un pas de 15, afficher le message On tient le bon bout. 
Combien de fois le message s'affiche-il ?
*/
/*
$var1 = 1;

while ($var1 <= 100 ) {
    $var1++;
    echo "<p>n°$var1</p>"; 
    echo "On tient le bon bout".'</br>';
}
*/

// ecriture avec FOR

$i = 1;

for ($i = 1; $i <= 100; $i++) {
    echo '<p>n°'.$i.'</p>'; 
    echo "On tient le bon bout".'</br>';
}


?>