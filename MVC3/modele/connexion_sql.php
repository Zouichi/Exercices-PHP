<?php

// Connexion � la base de donn�es
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=sta15;charset=utf8', 'sta15', 'YnFuJv2AA6ai58hd');
}
catch(Exception $e)
{
    die('Erreur : '.$e->getMessage());
}
