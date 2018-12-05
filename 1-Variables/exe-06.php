<?php
$prix = (integer) 785;
$ristourne = (integer) 785 / 100 * 30;
$prixFinal = (integer) 785 - $ristourne;
echo $prixFinal;
/*C'est le black friday. Un t-shirt qui te plaît coûte 785€ à la base mais ce mois-ci, 
ton magasin préféré lui applique une ristourne de 30%. 
Grâce à tes nouvelles connaissances en PHP, affiche le prix de départ,
 le montant de la ristourne et le prix que tu vas payer sur ton navigateur.*/
 ?>