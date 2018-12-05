<?php
#Faire un formulaire qui permet de récupérer le login et le mot de passe de l'utilisateur. 
#A la validation du formulaire, stocker les informations dans un cookie.

session_start();


if (isset($_POST['login']))
{
    setcookie('pseudo', $_POST['login'], time() + 365*24*3600, null, null, false, true);
}

if (isset($_COOKIE['pseudo']) )
{
    echo $_COOKIE['pseudo']." - (Login bien enregistré!)";
}


?>


<!DOCTYPE html>
<head>

</head>

<body>

<form method="post" action="exe03-vg.php">
<input type="text" name="login" placeholder="login"/>
<input type="password" name="mdp" placeholder="mot de passe" />
<input type="submit" name="submit" value="envoyer" />
<a href="exe04-vg.php">Lien vers page de l'exe-04</a>
<a href="exe05-vg.php">Lien vers page de l'exe-05</a>
<p>
Page de l'exercice 03 cookie 
</p>
 
</form>
</body>


</html>