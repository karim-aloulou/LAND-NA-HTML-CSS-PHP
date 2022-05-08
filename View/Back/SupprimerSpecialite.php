<?php
include_once '../../Controler/SpecialiteC.php';
	$spC=new SpecialiteC();
	$spC->supprimerSpecialite($_GET["ID_SPEC"]);
	header('Location:AfficherSpecialite.php');
?>