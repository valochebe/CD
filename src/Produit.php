<?php 


abstract class Produit 
{
   protected $nomProduit = 0;

   protected $poidsProduit = 12;

   protected $prixKilo = 5;

   protected $nombreProduit = 18;

   protected $prixUnite = 4;

   public static $compteur = 0 ;

	public function __construct() {
      echo "Construction d'un produit";

      self::$compteur++;
	}

   public abstract function calculPrix();   
}

?>