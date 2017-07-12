<body bgcolor=#1df2f2>
<?php 
ini_set("display_errors", 1);
error_reporting(E_ALL);

if (isset($_POST['tache']) && (string)$_POST['tache'] == "formulaire")
{
	if (isset($_POST['prenom']) AND isset($_POST['nom']) AND isset($_POST['age']) AND isset($_POST['sexe'])) {
		$_POST['age'] = (int) $_POST['age'];

	if (is_string($_POST['prenom']) && is_string($_POST['nom']) AND $_POST['age'] > 0 && $_POST['age'] <= 140) {
		echo 'Bonjour ' . $_POST['nom'] . ' ' . $_POST['prenom'] . ' !<br />Vous avez ' . $_POST['age'] . 'ans<br />';
	
	if (($_POST['sexe'] == "feminin") OR ($_POST['sexe'] == "masculin"));
		 {
		 	$genre = ($_POST['sexe'] == "feminin") ? "une femme" ; "un homme";

		 	echo "Vous êtes " . $genre;
	} else {
		echo "Vous n'avez pas saisi correctement votre sexe";
	}
	} else {
		echo "Un des paramètres ne contient pas la valeur attendue";
	}
	}
}
?>