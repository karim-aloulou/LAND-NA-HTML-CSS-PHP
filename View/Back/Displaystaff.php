<?php
	include '../../Controler/staffc.php';
	$staffC=new staffc();
	$listeEvent=$staffC->afficherstaff(); 
?>



<head>
	<meta charset="UTF-8">
	<title>Rides and Attractions - Amusement Park Website Template</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body>
	<div id="background">
		<div id="page">
			<div id="header">
				<a href="index.html" class="logo">Land'na</a>
				<ul>
					<li>
						<a href="index.html">home</a>
					</li>
					<li>
						<a href="blocs.php">Gestion blocs</a>
					</li>
					<li class="selected">
						<a href="services.php">Gestion services</a>
					</li>
					<li>
						<a href="../amusementparkwebsitetemplate/comptes.php">Gestion Comptess</a>
					</li>
					<li>
						<a href="../amusementparkwebsitetemplate/produits.php">Produits</a>
					</li>
					<li>
						<a href="../amusementparkwebsitetemplate/restauration.php">Restauration</a>
					</li>
				</ul>
			</div>
<link rel="stylesheet" href="css/table.css">
<script src="../amusementparkwebsitetemplate/tablesort.js"></script>
</head>


<script src="../amusementparkwebsitetemplate/tablesort.js"></script>

  <!--for demo wrap-->
  <h1>Fixed Table header</h1>
  <div class="tbl-header">
    <table cellpadding="0" cellspacing="0" border="0">
      <thead>
        <tr>
          <th>ID staff</th>
          <th>Nom staff</th>
          <th>Salaire</th>
          <th>Categorie</th>
          <th>Horraire</th>
          <th>Etat</th>
          <th>Modifier</th>
          <th>Supprimer</th>
        </tr>
      </thead>
    </table>
  </div>
  <div class="tbl-content">
    <table cellpadding="0" cellspacing="0" border="0">
      <tbody>
    <?php
			foreach($listeEvent as $staffC){
			?>
      <tr>
        <tr>
                <td class="lalign"><?php echo $staffC['ID_Staff']; ?></td>
				<td><?php echo $staffC['nom_staff']; ?></td>
		 		<td><?php echo $staffC['salaire']; ?></td>
				<td><?php echo $staffC['categorie']; ?></td>
		 		<td><?php echo $staffC['horaire']; ?></td>
		 		<td><?php echo $staffC['etat']; ?></td>
				<td>
		 			<form method="POST" action="modifierstaff.php">
					 <!-- <img src="../amusementparkwebsitetemplate/images/iconmodifier.png" alt="" width="50" height="50" > -->

					<input type="image" name="Modifier" id="Modifier"  src="images/iconmodifier.png" alt="" width="50" height="50"> 

	 				<input type="hidden" value=<?PHP echo $staffC['ID_Staff']; ?> name="ID_Staff">
		 			</form>
		 		</td>
		<td>
		 			<a href="supprimerEvent.php?ID_Staff=<?php echo $staffC['ID_Staff']; ?>"><img src="images/supprimer (1).png" alt="" width="40" height="40" ></a>
				</td>
		 	</tr>
		 	<?php
		 		}
		 	?>
    </tbody>
  </table>
  
 </div> 
</body>