<?php

/*Traduire ce code avec des if et des else :
<?php
  echo ($maVariable != 'Homme') ? 'C\'est une développeuse !!!' : 'C\'est un développeur !!!';
?>
*/
$homme = (string)'Homme';

if($homme != 'Homme') {
    echo "C'est une développeuse";
}

else {
    echo "c'est un développeur";
}


?>