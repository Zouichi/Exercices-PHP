<!DOCTYPE html>
<html>
<body>
<?php
$age_du_visiteur = 17;
echo 'Le visiteur a $age_du_visiteur ans<br />';
$age_du_visiteur = 17;
echo 'Le visiteur a ' . $age_du_visiteur . ' ans<br /><br />';

$nombre = 2 + 4;
echo "$nombre <br /><br />";

$age = 29;
if ($age !=29)
	{
		echo "Salut pas Rémi !<br /><br />";
	}
else
	{
		echo "Salut Rémi !<br /><br />";
	}
if ($age == 29)
{
    echo '<strong>Bravo !</strong> Vous avez trouvé le nombre mystère !<br /><br />';
}

$note = 20;
if ($note == 0)
{
    echo "Tu es vraiment un gros nul !!!<br /><br />";
}

elseif ($note == 5)
{
    echo "Tu es très mauvais<br /><br />";
}

elseif ($note == 7)
{
    echo "Tu es mauvais<br /><br />";
}

elseif ($note == 10)
{
    echo "Tu as pile poil la moyenne, c'est un peu juste…<br /><br />";
}

elseif ($note == 12)
{
    echo "Tu es assez bon<br /><br />";
}

elseif ($note == 16)
{
    echo "Tu te débrouilles très bien !<br /><br />";
}

elseif ($note == 20)
{
    echo "Excellent travail, c'est parfait !<br /><br />";
}

else
{
    echo "Désolé, je n'ai pas de message à afficher pour cette note <br /><br />";
}

$age = 24;

if ($age >= 18)
{
	$majeur = true;
}else
{
	$majeur = false;
} //Même chose que :
$age = 24;

$majeur = ($age >= 18) ? true : false;
?>
<br />
<?php
for ($nombre_de_lignes = 1; $nombre_de_lignes <= 10; $nombre_de_lignes++)
{
    echo 'Ceci est la ligne n°' . $nombre_de_lignes . '<br />';
}
?>
<br />
<?php
$i = 5;
do {
		echo $i . '<br />';
		$i++;
	} while ($i<9);
?>
<br />
<?php
for ($i=0; $i<=10; $i++)
	{
	echo 'Compteur = ';

		if ($i>5)
		{
		break;
		}	
		echo $i ,'<br/>';
	}
?>
<br /><br />
<?php
for ($i=0; $i<=10; $i++)
{
	if($i<=5)
	{
		continue;
	}
echo $i .'<br />';
}
?>
<br />
<?php
$prenoms = array ('François', 'Michel', 'Nicole', 'Véronique', 'Benoît');

for ($numero = 0; $numero < 5; $numero++)
{
    echo $prenoms[$numero] . '<br />';
}
?>
<br />
<?php
$coordonnees = array (
    'prenom' => 'François',
    'nom' => 'Dupont',
    'adresse' => '3 Rue du Paradis',
    'ville' => 'Marseille');

foreach($coordonnees as $cle => $element)
{
    echo '[' . $cle . '] vaut ' . $element . '<br />';
}
?>
<br />
<?php
$coordonnees = array (
    'prenom' => 'François',
    'nom' => 'Dupont',
    'adresse' => '3 Rue du Paradis',
    'ville' => 'Marseille');

echo '<pre>';
print_r($coordonnees);
echo '</pre>';
?>
<br />
<?php
$coordonnees = array (
    'prenom' => 'François',
    'nom' => 'Dupont',
    'adresse' => '3 Rue du Paradis',
    'ville' => 'Marseille',
	'pays' => 'France');

if (array_key_exists('nom', $coordonnees))
{
    echo 'La clé "nom" se trouve dans les coordonnées !<br />';
}

if (array_key_exists('pays', $coordonnees))
{
    echo 'La clé "pays" se trouve dans les coordonnées !<br />';
}
?>
<br />
<?php
$fruits = array ('Banane', 'Pomme', 'Poire', 'Cerise', 'Fraise', 'Framboise');

if (in_array('Myrtille', $fruits))
{
    echo 'La valeur "Myrtille" se trouve dans les fruits !';
}

if (in_array('Cerise', $fruits))
{
    echo 'La valeur "Cerise" se trouve dans les fruits !';
}
?>
<br><br>
<?php
$fruits = array ('Banane', 'Pomme', 'Poire', 'Cerise', 'Fraise', 'Framboise');

$position = array_search('Fraise', $fruits);
echo '"Fraise" se trouve en position ' . $position . '<br />';

$position = array_search('Banane', $fruits);
echo '"Banane" se trouve en position ' . $position;
?>
<br><br>
<?php
$coordonnees = array (
    'prenom' => 'François',
    'nom' => 'Dupont',
    'adresse' => '3 Rue du Paradis',
    'ville' => 'Marseille');

if (in_array('Albert', $coordonnees))
{
    echo 'La valeur "Albert" se trouve dans les coordonnées !';
}

if (array_key_exists('pays', $coordonnees))
{
    echo 'La clé "pays" se trouve dans les coordonnées !';
}

?>
<br>
<?php
$coordonnees = array (
    'prenom' => 'François',
    'nom' => 'Dupont',
    'adresse' => '3 Rue du Paradis',
    'ville' => 'Marseille');

if (in_array('Albert', $coordonnees)) {
	echo 'La valeur "Albert" se trouve dans les coordonnées';
} else {
	if  (
		in_array('François', $coordonnees)) {
		echo 'La valeur "Albert" ne se trouve pas dans les coordonnées mais la valeur "François" y est<br><br>';
	}
	}
?>
<!-- Créér une boucle qui va compter le nombre d'éléments du tableau, on utilise une boucle, l'incrémentation, et on affiche à la fin un message avec le nombre d'éléments du tableau -->
<!-- Créer un tableau qui inverse les clés et les valeurs en utilisant foreach -->
<?php
$coordonnees = array (
    'prenom' => 'François',
    'nom' => 'Dupont',
    'adresse' => '3 Rue du Paradis',
    'ville' => 'Marseille');
$nombre_elements=0;
foreach($coordonnees as $valeur)
{
    if ($valeur) {
    	$nombre_elements++;
    }
}
echo "Le tableau contient : ".$nombre_elements." valeurs<br>";
?>
<br>
<?php
$coordonnees = array (
    'prenom' => 'François',
    'nom' => 'Dupont',
    'adresse' => '3 Rue du Paradis',
    'ville' => 'Marseille');
$inverse_coordonnees = array();
foreach ($coordonnees as $key => $value) {
	if ($value) {
		$inverse_coordonnees[$value] = $key;
	}
}
echo "<pre>";
print_r($inverse_coordonnees);
echo "</pre>";
?>
<?php
$str = 'abcdef';
$shuffled = str_shuffle($str);
// Cela va afficher quelque chose comme : bfdaec
echo $shuffled;
?>
<br><br>
<?php
$ma_variable = str_replace('b', 'p', 'bim bam boum');
 
echo $ma_variable;
?>
<br><br>
<?php
$chaine = 'Cette chaine va etre melangee !';
$chaine = str_shuffle($chaine);
 
echo $chaine;
?>
<br><br>
<?php
$chaine = 'COMMENT CA JE CRIE TROP FORT ???';
$chaine = strtolower($chaine);
 
echo $chaine;
?>
<br><br>
<?php
$chaine = 'Comment ca je crie trop fort ???';
$chaine = strtoupper($chaine);
 
echo $chaine;
?>
<br><br>
<?php
$phrase = 'Bonjour tout le monde ! Je suis une phrase !';
$longueur = strlen($phrase);
 
 
echo 'La phrase ci-dessous comporte ' . $longueur . ' caractères :<br />' . $phrase;
?>
<br><br>
<?php
$annee = date('Y');
echo $annee;
?>
<br><br>
<?php
// Enregistrons les informations de date dans des variables

$jour = date('d');
$mois = date('m');
$annee = date('Y');

$heure = date('H');
$minute = date('i');

// Maintenant on peut afficher ce qu'on a recueilli
echo 'Bonjour ! Nous sommes le ' . $jour . '/' . $mois . '/' . $annee . 'et il est ' . $heure. ' h ' . $minute;
?>
<br><br>
<?php
$nom = 'Sandra';
echo 'Bonjour, ' . $nom . ' !<br />';

$nom = 'Patrick';
echo 'Bonjour, ' . $nom . ' !<br />';

$nom = 'Claude';
echo 'Bonjour, ' . $nom . ' !<br />';
?>
<!-- Pareil que : -->
<br>
<?php
function DireBonjour($nom)
{
    echo 'Bonjour ' . $nom . ' !<br />';
}

DireBonjour('Marie');
DireBonjour('Patrice');
DireBonjour('Edouard');
DireBonjour('Pascale');
DireBonjour('François');
DireBonjour('Benoît');
DireBonjour('Père Noël');
?>
<br>
<?php
function VolumeCone($rayon, $hauteur)
{
	$volume = $rayon * $rayon * 3.14 * $hauteur * (1/3);
return $volume;
}
$volume = VolumeCone($rayon=9000,$hauteur=9000);
echo 'Le volume du cône de rayon '. $rayon .' et de hauteur '. $hauteur .' est : ' . $volume . ' cm<sup>3</sup><br />';
?>
<br>
<?php
function VolumeCone2($rayon, $hauteur)
{
	$volume = $rayon * $rayon * 3.14 * $hauteur * (1/3);
return $volume;
}
$volume = VolumeCone2($rayon=10,$hauteur=9);
if (is_numeric($rayon) AND is_numeric($hauteur) AND is_int($rayon) AND is_int($hauteur) AND !is_float($rayon) AND !is_float($hauteur) AND $rayon!=0 AND $hauteur!=0) {
	echo 'Le volume du cône de rayon '. $rayon .' et de hauteur '. $hauteur .' est : ' . $volume . ' cm<sup>3</sup><br />';
}
else {
	echo "Le rayon et la hauteur doivent être des nombres entiers et supérieurs à 0 !<br>";
}
?>
<br>
<?php
$chaine = 'Bonjour tout le monde';
$chaine = strrev ($chaine);
 
echo $chaine;
?>
<br><br>
<?php
$nombre2 = 1;
if ($nombre2 % 3 != 0 AND $nombre % 5 !=0) {
echo ''. $nombre2 .' n\'est un multiple ni de 3 ni de 5 <br>';
 }  
 else
 	echo '' .$nombre2. ' est un multiple de 3 et de 5<br>';
?>
<br>
<?php
$age2=31;
$sexe2='Féminin';
if ($sexe2=='Féminin' AND $age2>=21 AND $age2<=40) {
	echo 'Bienvenue, femme de '. $age2 .' ans !<br>';
}
else
	echo "Vous ne correspondez pas au sexe et/ou à l'âge requis !<br>";
?>
<br>
<?php
$age3=21;
$sexe3='Féminin';
switch ($sexe3 AND $age3)
{
  case $sexe3=='Féminin'AND $age3>=21 AND $age3<=40 :
    echo 'Bienvenue, femme de '. $age3 .' ans !<br>';
    break;
  case $sexe3=='Féminin'AND $age3<21 :
    echo ''. $age3 .' ans ? Vous êtes trop jeune !<br>';
  	break;
  	case $sexe3=='Féminin'AND $age3>40 :
    echo ''. $age3 .' ans ? Vous êtes trop vieille !<br>';
  	break;
  	case $sexe3!='Féminin' :
    echo 'C\'est pas la fête du slip !<br>';
  	break;
  default:
    echo "Vous ne correspondez pas au sexe et/ou à l'âge requis !<br>";
}
?>
<br>
</body>
</html>