<?php
	include '../Controller/ProduitC.php';
	$ProduitC=new PRoduitC();
	$ProduitC->supprimerProduit($_GET["Id_produit"]);
	header('Location:afficherListeProduits.php');
?>