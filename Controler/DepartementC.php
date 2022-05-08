<?php
include '../../config1.php';
include_once '../../Model/Departement.php';
class DepartementC{

    public function affichageList()
    {
        $sql='SELECT * FROM departements';
        $db=config1::getConnexion();
        try{
        $list=$db->query($sql);
        return $list;
        }
        catch(EXCEPTION $e){
            die('Erreur:' .$e->getMessage());
    }
    }


public function ajouterDepartement($Departement)
{
    $sql='INSERT INTO departements(ID_DEPART,NOM_DEPART,NB_PLACES,ID_SPEC,pict)
    VALUES(:ID_DEPART,:NOM_DEPART,:NB_PLACES,:ID_SPEC,:pict)';
    $db=config1::getConnexion();
    try{
    $query=$db->prepare($sql);
    $query->execute(
        [
            'ID_SPEC'=>$Departement->getID_SPEC(),
            'NOM_DEPART'=>$Departement->getNOM_DEPART(),
            'NB_PLACES'=>$Departement->getNB_PLACES(),
            'ID_DEPART'=>$Departement->getID_DEPART(),
			'pict'=>$Departement->getpict()
            ]
    );
    }
    catch(EXCEPTION $e){
        die('Erreur:' .$e->getMessage());}}


    function supprimerDepartement($ID_DEPART){
			$sql="DELETE FROM departements WHERE ID_DEPART=:ID_DEPART";
			$db = config1::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':ID_DEPART', $ID_DEPART);
			try{
				$req->execute();
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMeesage());
			}
		}


    function recupererDepartement($ID_DEPART){
			$sql="SELECT * from departements where ID_DEPART=$ID_DEPART";
			$db = config1::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();

				$Departement=$query->fetch();
				return $Departement;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
	
		function rechercherreclamation($ID_DEPART)
		{
			$requete = "SELECT * from departements where ID_DEPART=$ID_DEPART";
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

    function modifierDepartement($Departement, $ID_DEPART){
			try {
				$db = config1::getConnexion();
				$query = $db->prepare(
					'UPDATE departements SET 
						ID_DEPART= :ID_DEPART, 
						NOM_DEPART= :NOM_DEPART, 
						ID_SPEC= :ID_SPEC,
                        NB_PLACES= :NB_PLACES,
						pict= :pict
					WHERE ID_DEPART= :ID_DEPART'
				);
				$query->execute([
					'NB_PLACES' => $Departement->getNB_PLACES(),
					'NOM_DEPART' => $Departement->getNOM_DEPART(),
					'ID_DEPART' => $ID_DEPART,
                    'ID_SPEC' => $Departement->getID_SPEC(),
					'pict'=>$Departement->getpict()
				]);
				echo $query->rowCount() . " records UPDATED successfully <br>";
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}
	}


?>
