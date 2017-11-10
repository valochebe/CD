<?php

	ini_set('display_errors','1'); //permet d'afficher les erreurs 

	require_once("src/ProduitAUnite.php");


	//Instantation
	$d = new ProduitAUnite();
	echo $d;

	//Ca permet de calculer le prix
	$prix = $d->calculPrix();	
	echo "<br>le prix est ".$prix;

	echo "<br> Le nombre de produit créés est :".Produit::$compteur;

?>