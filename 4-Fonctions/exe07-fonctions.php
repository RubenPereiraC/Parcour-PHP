<?php 
/*
Faire une fonction qui prend deux paramètres : age et genre. Le paramètre genre peut prendre comme valeur :

    Homme
    Femme

La fonction doit renvoyer en fonction des paramètres :

    Vous êtes un homme et vous êtes majeur
    Vous êtes un homme et vous êtes mineur
    Vous êtes une femme et vous êtes majeur
    Vous êtes une femme et vous êtes mineur

Gérer tous les cas.
*/

function verifier($age, $genre) {


if ($age >= 18 AND $genre == true) {
    echo "Vous êtes un homme et vous êtes majeur </br>";
}
else if ($age < 18 AND $genre == true) {
    echo "Vous êtes un homme et vous êtes mineur </br>";
}
else if ($age >= 18 AND $genre == false) {
    echo "Vous êtes une femme et vous êtes majeur </br>";
}
else if ($age < 18 AND $genre == false) {
    echo "Vous êtes une femme et vous êtes mineur </br>";
}


}

// true = homme, false = femme
print verifier (30, true);
print verifier (17, false);

?>