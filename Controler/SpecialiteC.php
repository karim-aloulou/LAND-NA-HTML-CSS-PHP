<?php
include '../config.php';
include_once '../Model/Specialite.php';
class SpecialiteC{

    public function affichageList()
    {
        $sql='SELECT * FROM specialites';
        $db=config::getConnexion();
        try{
        $list=$db->query($sql);
        return $list;
        }
        catch(EXCEPTION $e){
            die('Erreur:' .$e->getMessage());
    }
    }


public function ajouterSpecialite($Specialite)
{
    $sql='INSERT INTO specialites(ID_SPEC,NOM_SPEC,TYPE_SPEC)
    VALUES(:ID_SPEC,:NOM_SPEC,:TYPE_SPEC)';
    $db=config::getConnexion();
    try{
    $query=$db->prepare($sql);
    $query->execute(
        [
            'ID_SPEC'=>$Specialite->getID_SPEC(),
            'NOM_SPEC'=>$Specialite->getNOM_SPEC(),
            'TYPE_SPEC'=>$Specialite->getTYPE_SPEC()
            ]
    );
    }
    catch(EXCEPTION $e){
        die('Erreur:' .$e->getMessage());}}


    function supprimerSpecialite($ID_SPEC){
			$sql="DELETE FROM specialites WHERE ID_SPEC=:ID_SPEC";
			$db = config::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':ID_SPEC', $ID_SPEC);
			try{
				$req->execute();
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMeesage());
			}
		}


    function recupererSpecialite($ID_SPEC){
			$sql="SELECT * from specialites where ID_SPEC=$ID_SPEC";
			$db = config::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();

				$Specialite=$query->fetch();
				return $Specialite;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}


    function modifierSpecialite($Specialite, $ID_SPEC){
			try {
				$db = config::getConnexion();
				$query = $db->prepare(
					'UPDATE specialites SET 
						ID_SPEC= :ID_SPEC, 
						NOM_SPEC= :NOM_SPEC, 
						TYPE_SPEC= :TYPE_SPEC
					WHERE ID_SPEC= :ID_SPEC'
				);
				$query->execute([
					'TYPE_SPEC' => $Specialite->getTYPE_SPEC(),
					'NOM_SPEC' => $Specialite->getNOM_SPEC(),
					'ID_SPEC' => $ID_SPEC
				]);
				echo $query->rowCount() . " records UPDATED successfully <br>";
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}
	}


?>
