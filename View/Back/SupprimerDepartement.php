<?php
include_once '../../Controler/DepartementC.php';
	$depC=new DepartementC();
	$depC->supprimerDepartement($_GET["ID_DEPART"]);
	header('Location:AfficherSpecialite.php');
?>