<?php

#Faire une page qui va récupérer les informations du cookie créé à l'exercice 3 et qui les affiche.
session_start();
echo $_COOKIE['pseudo'] . ' - (le nom a gauche est celui utilisé pour le cookie login, afffiché par un echo)';
?>

<a href="exe03-vg.php"> <br/> Lien vers page Exe3 </a>