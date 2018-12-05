<?php

session_start();

echo $_SERVER['REMOTE_ADDR'] . '</br>' . $_SERVER['HTTP_USER_AGENT'] . '<br>' . $_SERVER['SERVER_NAME'];

$_SESSION['nom'] = 'McCain';
$_SESSION['prenom'] = 'John';
$_SESSION['age'] = 25;


?>


<html>
<head>

</head>

<body>
<br>
<a href="exe02-vg.php">Lien Vers Exercice 2</a>
</body>


</html>