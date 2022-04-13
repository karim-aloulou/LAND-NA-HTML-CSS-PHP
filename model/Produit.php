<?php
	class Produit{
		private $Id_produit=null;
		private $nom=null;
		 private $image=null;
	
		private $type=null;
		private $prix=null;
        private $quantite=null;
		
		function __construct($Id_produit, $nom,$image, $type, $prix, $quantite){
			$this->Id_produit=$Id_produit;
			$this->nom=$nom;
             $this->image=$image;
			$this->type=$type;
			$this->prix=$prix;
			$this->quantite=$quantite;
		}
		function getId_produit(){
			return $this->Id_produit;
		}
		function getNom(){
			return $this->nom;
		}
	 function getImage(){
		 	return $this->image;
		 }
		function getType(){
			return $this->type;
		}
		function getPrix(){
			return $this->prix;
		}
		function getQuantite(){
			return $this->quantite;
		}
        function setId_produit(int $Id_produit){
			$this->adresse=$adresse;
		}
		function setNom(string $nom){
			$this->nom=$nom;
		}
		 function setImage( $image){
		 	$this->image=$image;
		 }
		
		function setType(string $type){
			$this->type=$type;
		}
        function setPrix(string $Prix){
			$this->Prix=$Prix;
		}
		function setQuantite(int $quantite){
			$this->quantite=$quantite;
		}
		
	}


?>