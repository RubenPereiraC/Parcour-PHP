<?php 
/*
Faire une fonction qui prend en paramètre deux nombres. La fonction doit retourner :

    Le premier nombre est plus grand si le premier nombre est plus grand que le deuxième
    Le premier nombre est plus petit si le premier nombre est plus petit que le deuxième
    Les deux nombres sont identiques si les deux nombres sont égaux

*/

function double ($chiffre1, $chiffre2) {



    if ($chiffre1 > $chiffre2) {
        return "Le premier nombre est plus grand \n </br>";
    }

    if ($chiffre1 < $chiffre2) {
        return "Le premier nombre est plus petit \n </br>";
    }

    if ($chiffre1 == $chiffre2) {
        return "les deux nombres sont égaux \n </br>";
    }

}

print double(2,4);
print double(8,4);
print double(4,4);

?>