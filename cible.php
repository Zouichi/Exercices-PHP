<body bgcolor=#1df2f2>
<?php echo $_GET['prenom'] . ' ' . $_GET['nom'] . ', ' . $_GET['age']; ?> ans
<br>
<?php if (isset($_GET['prenom']) AND isset($_GET['nom']) AND isset($_GET['age']))
{
	$_GET['age'] = (int) $_GET['age'];
	if ($_GET['age'] >= 1 AND $_GET['age'] <= 100) {
	for ($i=0; $i < $_GET['age'] ; $i++) { 
		echo 'Bonjour ' . $_GET['prenom'] . ' ' . $_GET['nom'] . ', vous avez ' . $_GET['age'] . ' ans ! <br />';
	}
	}
}