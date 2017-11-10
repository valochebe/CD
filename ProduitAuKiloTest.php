<?php

	ini_set('display_errors','1'); //Permet d'afficher les erreurs 

	require_once("src/ProduitAuKilo.php");


	//Instantation
	$c = new ProduitAuKilo();
	echo $c;

	//Ca permet de calculer le prix
	$prix = $c->calculPrix();	
	echo "<br>le prix est ".$prix;

	echo "<br> Le nombre de produit créés est :".Produit::$compteur;

?>