<?php
ini_set("display_errors", 1);
error_reporting(E_ALL);
//phpinfo();


try
{
	// On se connecte à MySQL
	$bdd = new PDO('mysql:host=localhost;dbname=sta15;charset=utf8', 'sta15', 'YnFuJv2AA6ai58hd');
}
catch(Exception $e)
{
	// En cas d'erreur, on affiche un message et on arrête tout
    die('Erreur : '.$e->getMessage());
}

// Si tout va bien, on peut continuer

$reponse = $bdd->query('SELECT nom FROM jeux_video LIMIT 0,10');

echo '<p>Voici les 10 premières entrées de la table jeux_video :</p>';

// On affiche chaque entrée une à une
while ($donnees = $reponse->fetch())
{
?>
    <p>
    <strong>Jeu</strong> : <?php echo $donnees['nom']; ?>
   </p>
<?php
}

$reponse->closeCursor(); // Termine le traitement de la requête

?>
