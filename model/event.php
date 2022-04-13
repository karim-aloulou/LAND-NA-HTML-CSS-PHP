<?php

class event
{
    private $id_event;
    private $nom_event;
    private $categorie;
    private $id_bloc;
    private $date;
	private $id_staff;

    // Le Constructeur
    function __construct($id_event,$nom,$cat,$id_bloc,$quat,$img)
    {$this->id_event= $id_event;
      $this->nom_event= $nom;
      $this->categorie= $cat;
      $this->id_bloc= $id_bloc;
      $this->date= $quat;
	  $this->id_staff= $img;
    }

    // Les Getters
    function getID(){
        return $this->id_event;
    } 
    function getnom_event(){
        return $this->nom_event;
    } 
    function getcategorie(){
        return $this->categorie;
    }
    function getid_bloc(){
        return $this->id_bloc;
    } 
    function getdate(){
        return $this->date;
    } 
	function getid_staff(){
        return $this->id_staff;
    } 
    
     // Les Setters
    function setNom($nom){
        $this->nom_event= $nom;
    }
    function setCategorie($cat){
        $this->categorie= $cat;
    }
    function setid_bloc($id_bloc){
        $this->id_bloc= $id_bloc;
    }
    function setdate($quant){
        $this->date= $quant;
    }
	function setid_staff($img){
        $this->id_staff= $img;
    }
}
?>