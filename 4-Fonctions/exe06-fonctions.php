<?php
/*

Faire une fonction qui prend trois paramètres : nom, prenom et age. 
Elle doit retourner une chaine de la forme : "Bonjour" + nom + prenom + ",tu as" + age + "ans".

*/

function total($nom, $prenom, $age) {

return    "Bonjour " . $nom . $prenom . ", tu as" . $age . "ans";

}

print total('pereira ', 'ruben', 30);

?>