<?php

if (isset($_GET['billet']))
	$billet = (int)$_GET['billet'];

if (empty($billet)) {

	// On demande les 5 derniers billets (mod�le)
	include_once('modele/blog/get_billets.php');
	$billets = get_billets(0, 5);

	// On effectue du traitement sur les donn�es (contr�leur)
	// Ici, on doit surtout s�curiser l'affichage
	foreach($billets as $cle => $billet)
	{
	    $billets[$cle]['titre'] = htmlspecialchars($billet['titre']);
	    $billets[$cle]['contenu'] = nl2br(htmlspecialchars($billet['contenu']));
	}

	// On affiche la page (vue)
	$view = "vue/blog/index.php";

	$title = "Liste des posts";

} else {
	//on affiche les commentaires d'un billet
	include_once('modele/blog/get_billet.php');
	$datas_billet = get_billet($billet);

	// On affiche la page (vue)
	$view = "vue/blog/commentaires.php";

	$title = "Commentaires du post donr l'id est : " . $billet;

}

// On affiche la page (vue)
include_once('vue/view.php');

