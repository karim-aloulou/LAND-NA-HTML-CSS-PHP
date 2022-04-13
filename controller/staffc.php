

<?php 
include '../config.php';
include_once '../model/staff.php';
class staffc{
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
    }
		
	 
}
?>
