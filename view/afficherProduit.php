

<?php
	include '../Controller/ProduitC.php';
	$produitC=new ProduitC();
	$listeProduit=$produitC->afficherProduits(); 
?>
<html>
	<head></head>
	<body>
	    <button><a href="ajouterProduit.php">Ajouter un produit</a></button>
		<center><h1>Liste des produits</h1></center>
		<table border="1" align="center">
			<tr>
				<th>Id_produitt</th>
				<th>Nom</th>
				<th>image</th>
				<th>type</th>
				<th>prix</th>
				<th>quantite</th>
				<th>Modifier</th>
				<th>Supprimer</th>
			</tr>
			<?php
			foreach($listeProduit as $produitC){
			?>
			<tr>
		 		<td><?php echo $produitC['Id_produit']; ?></td>
				<td><?php echo $produitC['nom']; ?></td>
		 		<td><?php echo $produitC['image']; ?></td>
				<td><?php echo $produitC['type']; ?></td>
		 		<td><?php echo $produitC['prix']; ?></td>
		 		<td><?php echo $produitC['quantite']; ?></td>
				<td>
		 			<form method="POST" action="modifierProduit.php">
					<input type="submit" name="Modifier" value="Modifier">
	 				<input type="hidden" value=<?PHP echo $produitC['Id_produit']; ?> name="Id_produit">
		 			</form>
		 		</td>
		<td>
		 			<a href="supprimerProduit.php?ID_produit=<?php echo $produitC['ID_produit']; ?>">Supprimer</a>
				</td>
		 	</tr>
		 	<?php
		 		}
		 	?>
		 </table>
	</body>
</html>
