<?php
// On démarre la session AVANT d'écrire du code HTML
session_start();

// On s'amuse à créer quelques variables de session dans $_SESSION
$_SESSION['prenom'] = 'Jean';
$_SESSION['nom'] = 'Dupont';
$_SESSION['age'] = 24;
?>
<!DOCTYPE html>
<head>
	<meta charset="UTF-8">
	<title>Exercices</title>
</head>
<body>
	<p>
        Salut <?php echo ''. $_SESSION['prenom'] .' '. $_SESSION['nom'] .', tu as toujours '. $_SESSION['age'] .' ans ?'; ?><br />
        Tu es à l'accueil de mon site (index.php). Tu veux aller sur une autre page ?
    </p>
</body>
</html>