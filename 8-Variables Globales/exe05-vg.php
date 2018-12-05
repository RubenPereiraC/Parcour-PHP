<?php

#Faire une page qui va pouvoir modifier le contenu du cookie de l'exercice 3.
session_start();

setcookie('pseudo','Martin');

if (isset($_COOKIE['pseudo']) )
{
    echo $_COOKIE['pseudo'];
}



/*new name is Martin*/

?>

<form method="post" action="exe05-vg.php">
<input type="text" name="login" placeholder="login"/>
<input type="password" name="mdp" placeholder="mot de passe" />
<input type="submit" name="submit" value="envoyer" />
</form>

<a href="exe03-vg.php"> <br/> Lien vers page Exe3 </a>