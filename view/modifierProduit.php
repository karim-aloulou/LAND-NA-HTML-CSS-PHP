<?php
    include_once '../Model/Produit.php';
    include_once '../Controller/ProduitC.php';

    $error = "";

    // create adherent
    $Produit = null;

    // create an instance of the controller
    $ProduitC = new ProduitC();
    if (
        isset($_POST["Id_produit"]) &&
		isset($_POST["nom"]) &&		
        isset($_POST["image"]) &&
		isset($_POST["type"]) && 
        isset($_POST["prix"]) && 
        isset($_POST["quantite"])
    ) {
        if (
            
            !empty($_POST["Id_produit"]) &&
            !empty($_POST["nom"]) &&		
            !empty($_POST["image"]) &&
            !empty($_POST["type"]) && 
            !empty($_POST["prix"]) && 
            !empty($_POST["quantite"])
        ) {
            $Produit = new Produit(
                $_POST['Id_produit'],
				$_POST['nom'],
                $_POST['image'], 
				$_POST['type'],
                $_POST['prix'],
                $_POST['quantite']
            );
            $adherentC->ajouterproduit($Produit);
            header('Location:afficherListeProduit.php');
        }
        else
            $error = "Missing information";
    }

    
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Display</title>
</head>
    <body>
        <button><a href="afficherListeProduits.php">Retour à la liste des adherents</a></button>
        <hr>
        
        <div id="error">
            <?php echo $error; ?>
        </div>
        
        <form action="" method="POST">
            <table border="1" align="center">
                <tr>
                    <td>
                        <label for="Id_produit">Identifiant du produit:
                        </label>
                    </td>
                    <td><input type="text" name="Id_produit" id="numadherent" maxlength="20"></td>
                </tr>
				<tr>
                    <td>
                        <label for="nom">Nom:
                        </label>
                    </td>
                    <td><input type="text" name="nom" id="nom" maxlength="20"></td>
                </tr>
                <tr>
                    <td>
                        <label for="type">type:
                        </label>
                    </td>
                    <td><input type="text" name="type" id="type" maxlength="20"></td>
                </tr>
                <tr>
                    <td>
                        <label for="prix">prix:
                        </label>
                    </td>
                    <td>
                        <input type="text" name="prix" id="prix">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="quanite">Quantite:
                        </label>
                    </td>
                    <td>
                        <input type="text" name="quantie" id="quantite">
                    </td>
                </tr>
                            
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" value="modifier"> 
                    </td>
                    <td>
                        <input type="reset" value="Annuler" >
                    </td>
                </tr>
            </table>
        </form>
    </body>
</html>