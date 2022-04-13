<?php 
include '../config.php';
include_once '../model/event.php';
class eventc{
	/*function afficherevennements(){
		$sql="SELECT * FROM evennements ";
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
 $sql="DELETE  FROM evennements WHERE `id`= $numse ";
		$db=config::getConnexion();
		try{
			$liste=$db->query($sql);

        }catch(Exception $e){
			die("erreur:".$e->getMessage());
   }
}

function Modifierevennements($ser)
{
$sqlc= "UPDATE `evennements` SET 	description=:desce,pourcentage=:pour WHERE id=:id  ";
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

}*/ 

function Ajouter($ser){
$sql= 'INSERT INTO evenements(Id_event,nom_event,date,categorie_E,ID_DEPART,Id_staff) VALUES (:Id_event,:nom_event, :date, :categorie_E, :ID_DEPART,:Id_staff)';
$db=config::getConnexion();
try{ $recipesStatement = $db->prepare($sql);
	$recipesStatement->execute(
					[ 'Id_event'=>$ser->getID(),
		            'nom_event' =>$ser->getnom_event(),
		            'date'=>$ser->getdate(),
		            'categorie_E'=>$ser->getcategorie(),
		            'ID_DEPART'=>$ser->getid_bloc(),
		             
		                  
		                     'Id_staff'=>$ser->getid_staff(),
		                   
		       
		       



	]);
 }
 catch(Exception $e){ 
 	
			 die("erreur:".$e->getMessage());

}

}
/*
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
		function trieevennements(){
		$sql="SELECT * FROM evennements ORDER BY pourcentage";
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
        $sql="SELECT * FROM evennements where 	description like '%$search_value%' or pourcentage like '%$search_value%' or id_produit like '%$search_value%'   ";

        //global $db;
        $db =Config::getConnexion();

        try{
            $result=$db->query($sql);

            return $result;

        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }
	*/	
	 
}
?>