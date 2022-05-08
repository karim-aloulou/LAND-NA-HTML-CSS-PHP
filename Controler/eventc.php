<?php 
include '../../config.php';
include_once '../../Model/event.php';
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
$sqlc= "UPDATE `evenements` SET 	description=:desce,pourcentage=:pour WHERE id=:id  ";
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
function afficherevents(){
	$sql="SELECT * FROM evenements";
	$db = config::getConnexion();
	try{
		$listeEvent = $db->query($sql);
		return $listeEvent;
	}
	catch(Exception $e){
		die('Erreur:'. $e->getMeesage());
	}
}

function affichereventsbydate(){
	$sql="SELECT * FROM evenements ORDER BY date";
	$db = config::getConnexion();
	try{
		$listeEvent = $db->query($sql);
		return $listeEvent;
	}
	catch(Exception $e){
		die('Erreur:'. $e->getMeesage());
	}
}

function supprimerEvent($Id_event){
	$sql="DELETE FROM evenements WHERE Id_event=:Id_event";
	$db = config::getConnexion();
	$req=$db->prepare($sql);
	$req->bindValue(':Id_event', $Id_event);
	try{
		$req->execute();
	}
	catch(Exception $e){
		die('Erreur:'. $e->getMeesage());
	}
}





function recupererEvent($Id_event){
	$sql="SELECT * from evenements where Id_event=$Id_event";
	$db = config::getConnexion();
	try{
		$query=$db->prepare($sql);
		$query->execute();

		$event=$query->fetch();
		return $event;
	}
	catch (Exception $e){
		die('Erreur: '.$e->getMessage());
	}
}






function Modifierevenement($event){
	try {
		$db = config::getConnexion();
		$query = $db->prepare(
			// "UPDATE evenements SET 
			// 	nom_event= :nom_event, 
			// 	date=:date ,
			// 	categorie_E =: categorie_E ,
			// 	ID_DEPART =:ID_DEPART,
			// 	Id_staff =: Id_staff 
			// WHERE Id_event='.$Id_event.' "
			"UPDATE `evenements` SET `nom_event` = 'new', `date` = '2022-03-12',
			 `categorie_E` = 'ccvv', `ID_DEPART` = '5555', `Id_staff` = '1235'
			  WHERE `Id_event` = :Id_event
			"
		);
		$query->execute([
			
			'nom_event' => $event->getnom_event(),
			'date' => $event->getdate(),
			'categorie_E'=>$event->getcategorie(),
		    'ID_DEPART'=>$event->getid_bloc(),
		    'Id_staff'=>$event->getid_staff() ,
			'Id_event' => $event->getID()
			
		]);
		echo $query->rowCount() . " records UPDATED successfully <br>";
	} catch (PDOException $e) {
		$e->getMessage();
	}
}



function rechercherreclamation($id)
    {
        $requete = "select * from evenements where Id_event like '%$id%'";
        $config = config::getConnexion();
        try {
            $querry = $config->prepare($requete);
            $querry->execute();
            $result = $querry->fetchAll();
            return $result ;
        } catch (PDOException $th) {
             $th->getMessage();
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