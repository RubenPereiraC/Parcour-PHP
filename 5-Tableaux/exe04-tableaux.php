<?php
/*
Camille se marie et doit envoyer des mails à ses amis.

En utilisant ce tableau, faites en sorte que chaque personne de cette liste reçoit le même 
mail en faisant en sorte qu'il soit personnalisé.

array("Alex", "Max", "Dominique", "Claude", "Leslie", "Charlie", "Lou");

Mail : "Salut prénom, devine quoi ! Je me marie dans samedi dans deux semaines !
 J'espère te compter parmi les invités ! Gros bisous :)"
*/

$liste = array (
    "1" => "Alex",
    "2" => "Max",
    "3" => "Dominique",
    "4" => "Claude",
    "5" => "Leslie",
    "6" => "Charlie",
    "7" => "Lou");

    foreach ($liste as $num => $prenom) {

        echo ' Salut '. $prenom . " devine quoi ! Je me marie samedi dans deux semaines !
         J'espère te compter parmi les invités ! Gros bisous :)" .'<br />'."\n";
    }


?>

