<?php
/*include '../Controler/AdherentC.php';
include_once '../Model/Adherent.php';
$adherent=NULL;
if (isset($_POST['a'])&&isset($_POST['b'])&&isset($_POST['c'])&&isset($_POST['d'])&&isset($_POST['e']))
{
    if (!empty($_POST['a'])&&!empty($_POST['b'])&&!empty($_POST['c'])&&!empty($_POST['d'])&&!empty($_POST['e']))
    {
        $adherent= new Adherent($_POST['a'],$_POST['b'],$_POST['c'],$_POST['d'],$_POST['e'],'NULLE');
        $adC=new AdherentC();
        $adC->ajouterAdherent($adherent);
        header('Location:AfficherAdherent.php');
    }
    
}
*/
include_once '../model/event.php';
include_once '../controller/eventc.php';

$adherent=NULL;
if (isset($_POST['id_event'])&&isset($_POST['nom_event'])&&isset($_POST['date'])&&isset($_POST['categorie_E'])&&isset($_POST['ID_DEPART']) &&isset($_POST['id_staff']) )
{
    if (!empty($_POST['id_event'])&&!empty($_POST['nom_event'])&&!empty($_POST['date'])&&!empty($_POST['categorie_E'])&&!empty($_POST['ID_DEPART'])&&!empty($_POST['id_staff']))
    {
        $adherent= new event($_POST['id_event'],$_POST['nom_event'],$_POST['categorie_E'],$_POST['ID_DEPART'],$_POST['date'],$_POST['id_staff']);
        $adC=new eventc();
        $adC->Ajouter($adherent);
        //header('Location:AfficherAdherent.php');
    }
    
}


?>

<form action="" method="post">
<div>
        <label for="NumAdherent"> id_event :</label>
        <input type="text" name='id_event'>
    </div>    
<div>
        <label for="Nom">nom_event :</label>
        <input type="text" name='nom_event'>
    </div>
    <div>
        <label for="Prenom">categorie_E:</label>
        <input type="text" name='categorie_E'>
    </div>
    <div>
        <label for="email">ID_DEPART:</label>
        <input type="text" name='ID_DEPART'>
    </div>
    <div>
    <p>Date of Event</p>
          <input type="date" name="date" />
          <i class="fas fa-calendar-alt"></i>
    </div>
    <div>
        <label for="id_staff">id_staff:</label>
        <input type="text" name='id_staff'>
    </div>
    <div>
<input type="submit">
<input type="Reset">        
</div>
    
</form>