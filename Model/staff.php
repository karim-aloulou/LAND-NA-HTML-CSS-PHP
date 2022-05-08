<?php

class staff
{
    private $id_staff;
    private $nom_staff;
    private $categorie;
    private $salaire;
    private $horraire;
	private $etat;

    // Le Constructeur
    function __construct($id_staff,$nom_staff,$categorie,$salaire,$horraire,$etat)
    {$this->id_staff= $id_staff;
      $this->nom_staff= $nom_staff;
      $this->categorie= $categorie;
      $this->salaire= $salaire;
      $this->horraire= $horraire;
	  $this->etat= $etat;
    }

    // Les Getters
    function getID(){
        return $this->id_staff;
    } 
    function getNom(){
        return $this->nom_staff;
    } 
    function getCategorie(){
        return $this->categorie;
    }
    function getsalaire(){
        return $this->salaire;
    } 
    function gethorraire(){
        return $this->horraire;
    } 
	function getetat(){
        return $this->etat;
    } 
    
     // Les Setters
    function setNom($nom){
        $this->nom_staff= $nom;
    }
    function setCategorie($cat){
        $this->categorie= $cat;
    }
    function setsalaire($salaire){
        $this->salaire= $salaire;
    }
    function sethorraire($quant){
        $this->horraire= $quant;
    }
	function setetat($img){
        $this->etat= $img;
    }
}
?>