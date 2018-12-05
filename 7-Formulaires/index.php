<?php
/*
Créer un formulaire sur la page index.php avec :

    Une liste déroulante pour la civilité (Mr ou Mme)
    Un champ texte pour le nom
    Un champ texte pour le prénom

Ce formulaire doit rediriger vers la page index.php. Vous avez le choix de la méthode.
*/


if (isset($_GET['genre']) AND isset($_GET['prenom']) AND isset($_GET['nom']) AND isset($_GET['file']))
{
    $genre = $_GET['genre'];
    $prenom = $_GET['prenom'];
    $nom = $_GET['nom'];
    $file = $_GET['file'];
    $infosfichier = pathinfo($_GET['file']);
    $extension_upload = $infosfichier['extension'];
    $extensions_autorisees = array('pdf');

    if (in_array($extension_upload, $extensions_autorisees))

    {
        echo $genre . ' ' . $prenom . " " . $nom . ' ' . $file;
    }
    else
    {
        echo "Votre fichier n'est pas valide, veuillez envoyer un pdf !";
    }

} 

else
{?>
    <form method="get" action="index.php" enctype="multipart/form-data">

        <select name="genre">

            <option value="masculin">J'ai des couilles</option>

            <option value="feminin">J'ai des boobs </option>

        </select>

    <input type="text" name="prenom" placeholder="prenom"/>
    <input type="text" name="nom" placeholder="nom" />
    <input type="file" name="file" /> 
    <input type="submit" name="submit" value="envoyer" />


 
</form>
<?php
}

?>
<p>
Insérer formulaire
</p>