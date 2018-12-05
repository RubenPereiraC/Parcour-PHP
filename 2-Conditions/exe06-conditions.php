<?php 

/*Traduire ce code avec des if et des else :

<?php
  echo ($monAge >= 18) ? 'Tu es majeur' : 'Tu n\'es pas majeur';
?>

*/

$age = (integer) 19;

//Façon d'écrire numéro 1 :

/* 
if ($age >= 18) {
    echo "Tu es majeur !";
}

else {
    echo 'Tu es mineur !';
}
*/

//Façon d'écrire n°2 :

$majeur = ($age >= 18) ? true : false;

if ($majeur == true){
    echo "majeur";
}
else {
   echo 'mineur';
}


 ?>