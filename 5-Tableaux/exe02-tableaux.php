<?php
/*
Avec le tableau de l'exercice 1,

    afficher la valeur de la troisième ligne de ce tableau.
    afficher la valeur de l'index 5.
    modifier le mois de aout pour lui ajouter l'accent manquant.

*/

$mois = array (
    "1" => "Janvier",
    "2" => "Février",
    "3" => "Mars",
    "4" => "Avril",
    "5" => "Mai",
    "6" => "Juin",
    "7" => "Juillet",
    "8" => "Aout",
    "9" => "Septembre",
    "10" => "Octrobre",
    "11" => "Novembre",
    "12" => "Décembre");

$mois[8] = "Août";

echo "Nous sommes au mois de " . $mois[3];
echo "Nous sommes au mois de " . $mois[5];
echo "Nous sommes au mois de " . $mois[8];


?>