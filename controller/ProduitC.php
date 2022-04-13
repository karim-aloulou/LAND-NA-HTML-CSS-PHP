<?php
	include '../config.php';
	include_once '../Model/Produit.php';
	class ProduitC {
		function afficherProduits(){
			$sql="SELECT * FROM produits";
			$db = config::getConnexion();
			try{
				$listeProduit = $db->query($sql);
				return $listeProduit;
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMeesage());
			}
		}
		function supprimerProduit($Id_produit){
			$sql="DELETE FROM produits WHERE Id_produit=:Id_produit";
			$db = config::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':Id_produit', $Id_produit);
			try{
				$req->execute();
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMeesage());
			}
		}
		function ajouterProduit($ProduitC){
			$sql="INSERT INTO produit (Id_produit, nom,image,type, prix, quantite) 
			VALUES (:Id_produit, :nom,:image,:type, :prix, :quantite)";
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);
				$query->execute([

					'Id_produit' => $produitC->getId_produit(),
					'Nom' => $produitC->getNom(),
					'image' => $produitC->getImage(),
					'type' => $produitC->getType(),
					'prix' => $produitC->getPrix(),
					'quantite' => $produitC->getQuantite(),
				
				]);			
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}
		function recupererProduit($Id_produit){
			$sql="SELECT * from Produits where Id_produit=$Id_produit";
			$db = config::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();

				$PRoduit=$query->fetch();
				return $Produit;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		
		function modifierProduit($Produit, $Id_produit){
			try {
				$db = config::getConnexion();
				$query = $db->prepare(
					'UPDATE produit SET 
						Nom= :Nom, 
						type= :type, 
						prix= :prix, 
						quantite= :quantite, 
						
					WHERE Id_produit= :Id_produit'
				);
				$query->execute([
					'Id_produit' => $Produit->getId_produit(),
					'Nom' => $Produit->getNom(),
					'image' => $Produit->getImage(),
					'type' => $Produit->getType(),
					'prix' => $Produit->getPrix(),
					'quantite' => $Produit->getQuantite(),
				
				]);
				echo $query->rowCount() . " records UPDATED successfully <br>";
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}

	}
?>