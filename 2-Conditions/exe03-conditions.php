<?php
/*
Créer deux variables age et genre. La variable genre peut prendre comme valeur :

    Homme
    Femme

En fonction de l'âge et du genre, afficher la phrase correspondante :

    Vous êtes un homme et vous êtes majeur
    Vous êtes un homme et vous êtes mineur
    Vous êtes une femme et vous êtes majeur
    Vous êtes une femme et vous êtes mineur

Gérer tous les cas.
*/
$age = (integer) 22;
$genre = (boolean) true; // true affiche homme, false femme


if ($age <18 AND $genre == true ) {
    echo "Vous êtes un homme et vous êtes mineur";
} 

elseif  ($age >=18 AND $genre == true)
{
    echo "Vous êtes un homme et vous êtes majeur";
}

elseif  ($age <18 AND $genre == false)
{
    echo "Vous êtes une femme et vous êtes mineur";
}


elseif  ($age >=18 AND $genre == false)
{
    echo "Vous êtes une femme et vous êtes majeur";
}

    echo "</br>";
    echo "Vous avez $age ans";


?>