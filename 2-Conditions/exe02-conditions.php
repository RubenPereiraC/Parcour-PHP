<?php
/*Créer une variable IsEasy de type booléan et l'initialiser avec une valeur.

Afficher C'est facile!! si c'est vrai. Dans le cas contraire afficher C'est difficile !!!.

Bonus : L'écrire de deux manières différentes..*/

$IsEasy = (boolean) true;

if ($IsEasy) {
echo "C'est facile !!";
} else {
echo "C'est difficile !!";
}

echo"</br>";

$IsHard = (boolean) true;

if ($IsHard == true) {
    echo "c'est dur !!";
}
elseif ($IsHard == false) {
    echo "c'est facile";
}

?>