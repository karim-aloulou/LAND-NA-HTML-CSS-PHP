

<?php 
include_once '../../config.php';
include_once '../../Model/staff.php';
class staffc{

	function Ajouters($ser){
		$sql= 'INSERT INTO staff(ID_Staff,nom_staff,salaire,categorie,horaire,etat) 
		VALUES (:ID_Staff,:nom_staff, :salaire, :categorie, :horaire,:etat)';
		$db=config::getConnexion();
		try{ $recipesStatement = $db->prepare($sql);
			$recipesStatement->execute(
							[ 'ID_Staff'=>$ser->getID(),
							'nom_staff' =>$ser->getNom(),
							'salaire'=>$ser->getCategorie(),
							'categorie'=>$ser->getsalaire(),
							'horaire'=>$ser->gethorraire(),
							 
								  
									 'etat'=>$ser->getetat(),
								   
					   
					   
		
		
		
			]);
		 }
		 catch(Exception $e){ 
			 
					 die("erreur:".$e->getMessage());
		
		}
		
		}
		function afficherstaff(){
			$sql="SELECT * FROM staff";
			$db = config::getConnexion();
			try{
				$listeEvent = $db->query($sql);
				return $listeEvent;
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMeesage());
			}
		}



		function supprimerStaff($ID_Staff){
			$sql="DELETE FROM staff WHERE ID_Staff=:ID_Staff";
			$db = config::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':ID_Staff', $ID_Staff);
			try{
				$req->execute();
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMeesage());
			}
		}
		

	/*
	function afficherstaff(){
		$sql="SELECT * FROM staff ";
		$db=config::getConnexion();
		try{
			$liste=$db->query($sql);
			return $liste;
		}
		catch(Exception $e){
			die("erreur:".$e->getMessage());
		}
	} 
	   function supprimerseanc($numse){
 $sql="DELETE  FROM staff WHERE `id`= $numse ";
		$db=config::getConnexion();
		try{
			$liste=$db->query($sql);

        }catch(Exception $e){
			die("erreur:".$e->getMessage());
   }
}

function Modifierstaff($ser)
{
$sqlc= "UPDATE `staff` SET 	description=:desce,pourcentage=:pour WHERE id=:id  ";
$db=config::getConnexion();
try{ $recipesStatement = $db->prepare($sqlc);
	$recipesStatement->execute(['desce' =>$ser->getdescription(),
		              'pour' =>$ser->getpourcentage(),
		            
		              'id'=>$ser->getid(),
		         ]);
}
 catch(Exception $e){ 
 	
			 die("erreur:".$e->getMessage());
}

} 

function Ajouter($ser){
$sql= "INSERT INTO `staff` VALUES (:id,:desce, :datdeb, :datfin, :pour,:idprd)";
$db=config::getConnexion();
try{ $recipesStatement = $db->prepare($sql);
	$recipesStatement->execute([ 'id'=>$ser->getid(),
		            'desce' =>$ser->getdescription(),
		            'datdeb'=>$ser->getdatdeb(),
		            'datfin'=>$ser->getdatfin(),
		            'pour'=>$ser->getpourcentage(),
		             
		                  
		                     'idprd'=>$ser->getid_prod(),
		                   
		       
		       



	]);
 }
 catch(Exception $e){ 
 	
			 die("erreur:".$e->getMessage());

}

}
function afficherprod(){
		$sql="SELECT * FROM produit ";
		$db=config::getConnexion();
		try{
			$liste=$db->query($sql);
			return $liste;
		}
		catch(Exception $e){
			die("erreur:".$e->getMessage());
		}
	}
		function triestaff(){
		$sql="SELECT * FROM staff ORDER BY pourcentage";
		$db=config::getConnexion();
		try{
			$liste=$db->query($sql);
			return $liste;
		}
		catch(Exception $e){
			die("erreur:".$e->getMessage());
		}
	}
	 function recherche($search_value)
    {
        $sql="SELECT * FROM staff where 	description like '%$search_value%' or pourcentage like '%$search_value%' or id_produit like '%$search_value%'   ";

        //global $db;
        $db =Config::getConnexion();

        try{
            $result=$db->query($sql);

            return $result;

        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }*/
		
	 
}
?>
