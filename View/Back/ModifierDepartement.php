<?php
    include_once '../../Model/Departement.php';
    include_once '../../Controler/DepartementC.php';
    include_once '../../Controler/SpecialiteC.php';
    include_once '../../Model/Specialite.php';


    $error = "";

    // create adherent
    $departement = null;

    // create an instance of the controller
    $depC = new DepartementC();
    if (
        isset($_POST["ID_DEPART"]) &&
		isset($_POST["NOM_DEPART"]) &&		
        isset($_POST["NB_PLACES"])&&
        isset($_POST["ID_SPEC"]) &&
        isset($_POST["pict"])
    ) {
        if (
            !empty($_POST["ID_DEPART"]) && 
			!empty($_POST['NOM_DEPART']) &&
            !empty($_POST["NB_PLACES"])&&
            !empty($_POST["ID_SPEC"])&&
            !empty($_POST["pict"]) 
        ) {
            $departement = new Departement(
                $_POST['ID_DEPART'],
				$_POST['NOM_DEPART'],
                $_POST['NB_PLACES'],
                $_POST['ID_SPEC'],
                $_POST['pict']
            );
            
            $depC->modifierDepartement($departement, $_POST["ID_DEPART"]);
            header('Location:AfficherSpecialite.php');
        }
        else
            {$error = "Missing information";
                echo "<script>alert(\"Champ(s) vide(s)!\")</script>";}
    }    
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Rides and Attractions - Amusement Park Website Template</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
    <style>
      html, body {
      min-height: 100%;
      }
      body, div, form, input, select, textarea, p { 
      padding: 0;
      margin: 0;
      outline: none;
      font-family: Roboto, Arial, sans-serif;
      font-size: 14px;
      color: #666;
      line-height: 22px;
      }
      h1 {
      position: absolute;
      margin: 0;
      font-size: 32px;
      color: #fff;
      z-index: 2;
      }
      .testbox {
      display: flex;
      justify-content: center;
      align-items: center;
      height: inherit;
      padding: 20px;
      }
      form {
      width: 100%;
      padding: 20px;
      border-radius: 6px;
      background: #fff;
      box-shadow: 0 0 20px 0 #a82877; 
      }
      .banner {
      position: relative;
      height: 500px;
      background-image: url("events.jpg");      background-size: cover;
      display: flex;
      justify-content: center;
      align-items: center;
      text-align: center;
      }
      .banner::after {
      content: "";
      background-color: rgba(0, 0, 0, 0.5); 
      position: absolute;
      width: 100%;
      height: 100%;
      }
      input, textarea, select {
      margin-bottom: 10px;
      border: 1px solid #ccc;
      border-radius: 3px;
      }
      input {
      width: calc(100% - 10px);
      padding: 5px;
      }
      select {
      width: 100%;
      padding: 7px 0;
      background: transparent;
      }
      textarea {
      width: calc(100% - 12px);
      padding: 5px;
      }
      .item:hover p, .item:hover i, .question:hover p, .question label:hover, input:hover::placeholder {
      color: #a82877;
      }
      .item input:hover, .item select:hover, .item textarea:hover {
      border: 1px solid transparent;
      box-shadow: 0 0 6px 0 #a82877;
      color: #a82877;
      }
      .item {
      position: relative;
      margin: 10px 0;
      }
      input[type="date"]::-webkit-inner-spin-button {
      display: none;
      }
      .item i, input[type="date"]::-webkit-calendar-picker-indicator {
      position: absolute;
      font-size: 20px;
      color: #a9a9a9;
      }
      .item i {
      right: 1%;
      top: 30px;
      z-index: 1;
      }
      [type="date"]::-webkit-calendar-picker-indicator {
      right: 0;
      z-index: 2;
      opacity: 0;
      cursor: pointer;
      }
      input[type="time"]::-webkit-inner-spin-button {
      margin: 2px 22px 0 0;
      }
      input[type=radio], input.other {
      display: none;
      }
      label.radio {
      position: relative;
      display: inline-block;
      margin: 5px 20px 10px 0;
      cursor: pointer;
      }
      .question span {
      margin-left: 30px;
      }
      label.radio:before {
      content: "";
      position: absolute;
      top: 2px;
      left: 0;
      width: 15px;
      height: 15px;
      border-radius: 50%;
      border: 2px solid #ccc;
      }
      #radio_5:checked ~ input.other {
      display: block;
      }
      input[type=radio]:checked + label.radio:before {
      border: 2px solid #a82877;
      background: #a82877;
      }
      label.radio:after {
      content: "";
      position: absolute;
      top: 7px;
      left: 5px;
      width: 7px;
      height: 4px;
      border: 3px solid #fff;
      border-top: none;
      border-right: none;
      transform: rotate(-45deg);
      opacity: 0;
      }
      input[type=radio]:checked + label:after {
      opacity: 1;
      }
      .btn-block {
      margin-top: 10px;
      text-align: center;
      }
      button {
      width: 150px;
      padding: 10px;
      border: none;
      border-radius: 5px; 
      background: #a82877;
      font-size: 16px;
      color: #fff;
      cursor: pointer;
      }
      button:hover {
      background: #bf1e81;
      }
      @media (min-width: 568px) {
      .name-item, .city-item {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
      }
      .name-item input, .city-item input {
      width: calc(50% - 20px);
      }
      .city-item select {
      width: calc(50% - 8px);
      }
      }
    </style>
</head>
    <body>
    <div id="background">
		<div id="page">
			<div id="header">
				<a href="index.html" class="logo">Land'na</a>
				<ul>
					<li>
						<a href="index.html">home</a>
					</li>
					<li class="selected">
						<a href="blocs.php">Gestion blocs</a>
					</li>
					<li >
						<a href="services.php">Gestion services</a>
					</li>
					<li>
						<a href="comptes.html">Gestion Comptess</a>
					</li>
					<li>
						<a href="produits.html">Produits</a>
					</li>
					<li>
						<a href="restauration.html">Restauration</a>
					</li>
				</ul>
			</div>
		<div id="body">
        <button><a href="AfficherSpecialite.php">Retour à la liste des departements</a></button>
        <div id="error">
            <?php echo $error; ?>
        </div>
			
		<?php
			if (isset($_GET['ID_DEPART'])){
				$departement = $depC->recupererDepartement($_GET['ID_DEPART']);}
				
		?>
        
        <form action="" method="POST">
            <table border="1" align="center">
                <tr>
                    <td>
                        <label for="ID_DEPART">ID_DEPART
                        </label>
                    </td>
                    <td><input  type="text" name="ID_DEPART" id="ID_DEPART" value="<?php echo $departement['ID_DEPART']; ?>" maxlength="5"></td>
                </tr>
				<tr>
                    <td>
                        <label for="NOM_DEPART">NOM_DEPART
                        </label>
                    </td>
                    <td><input type="text" name="NOM_DEPART" id="NOM_DEPART" value="<?php echo $departement['NOM_DEPART']; ?>" maxlength="20"></td>
                </tr>
                <tr>
                    <td>
                        <label for="NB_PLACES">NB_PLACES
                        </label>
                    </td>
                    <td><input type="text" name="NB_PLACES" id="NB_PLACES" value="<?php echo $departement['NB_PLACES']; ?>" maxlength="3"></td>
                </tr>

                <tr>
                    <td>
                        <label for="ID_SPEC">SPECIAITE </label>
                    </td>
                    <td>
                    <select name="ID_SPEC" id="ID_SPEC">
                    <option selected>choisir spécialite</option>

                        <?php
                        $spC=new SpecialiteC();
                        $listC=$spC->affichageList();
                        foreach ($listC as $row)
                        {
                            ?>
                            <option value="<?=$row['ID_SPEC']; ?>"><?=$row['NOM_SPEC'];?></option>
                        <?php
                        }
                        ?>
                    </select>
                    </td>
                </tr>

                <tr>
                    <td>
                    <label for="pict">Photo du département:<small>(format: jpg, jpeg, png)</small></label>
                    </td>
                    <td>     
                    <input type="file" name="pict" id="pict" value="<?php echo $departement['pict'];?>">
                    </td> 
                </tr>
            </table>
                            
                        <input type="submit" value="Modifier" > 
                        <input  type="reset" value=" Annuler " >
        </form>
    </body>
</html>