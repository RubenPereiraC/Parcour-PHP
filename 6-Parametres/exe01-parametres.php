<?php
/*
Exercice 1

Faire une page index.php. Tester sur cette page que tous les paramètres de cette URL
 existent et les afficher: index.php?nom=Nemare&prenom=Jean



Exercice 2



Faire une page index.php. Tester sur cette page que tous les paramètres de cette URL existent
 et les afficher: index.php?dateDebut=2/05/2016&dateFin=27/11/2016
Exercice 4

Faire une page index.php. Tester sur cette page que tous les paramètres de cette URL existent
 et les afficher: index.php?langage=PHP&serveur=LAMP
Exercice 5

Faire une page index.php. Tester sur cette page que tous les paramètres de cette URL existent
 et les afficher: index.php?semaine=12
Exercice 6

Faire une page index.php. Tester sur cette page que tous les paramètres de cette URL existent
 et les afficher: index.php?batiment=12&salle=101
*/

if (isset($_GET['prenom']) AND isset($_GET['nom']) AND isset($_GET['age']))  

{
   
		echo 'Bonjour ' . $_GET['prenom'] . ' ' . $_GET['nom'] . ' ' . $_GET['age'] .' !<br />';

}
else 
{
    echo 'Il faut renseigner un nom, un prénom ou age';
}


if (isset($_GET['dateDebut']) AND isset($_GET['dateFin']))  

{
   
		echo 'Bonjour ' . $_GET['dateDebut'] . ' ' . $_GET['dateFin'] .' !<br />';

}
else 
{
    echo 'Il faut renseigner un nom, un prénom ou age';
}


echo "<p>Page d'index.php </p>";

?>

<html>
    <head>
    <p>Bonjour <?php echo $_GET['dateDebut'] . ' ' . $_GET['dateFin']; ?> !</p>
    </head>
<body>
</body>
</html>