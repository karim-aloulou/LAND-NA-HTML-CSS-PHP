<?php
    include_once '../../Model/event.php';
    include_once '../../Controler/eventc.php';

    $error = "";

    // create adherent
    $event = null;

    // create an instance of the controller
    $eventC = new eventc();
    if (
        isset($_POST["Id_event"]) &&
		isset($_POST["nom_event"]) &&	
        isset($_POST["categorie_E"]) &&	
        isset($_POST["ID_DEPART"]) &&		
        isset($_POST["date"]) &&	
        isset($_POST["Id_staff"]) 
    ) {
        if (
            !empty($_POST["Id_event"]) && 
			!empty($_POST['nom_event']) &&
            !empty($_POST["categorie_E"]) &&
            !empty($_POST["ID_DEPART"]) &&
            !empty($_POST["date"]) &&
            !empty($_POST["Id_staff"]) 
        ) {
            $event = new event($_POST['Id_event'],
                                $_POST['nom_event'],
                                $_POST['categorie_E'],
                                $_POST['ID_DEPART'],
                                $_POST['date'],
                                $_POST['Id_staff']
                            );
                        $eventC->Modifierevenement($event/*, $_GET["Id_event"]*/);
            
            header('Location:Displayevent.php');
        }
        else
            $error = "Missing information";
    }    
?>


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
      height: 200px;
      background-image: url("../amusementparkwebsitetemplate/events.jpg");      background-size: cover;
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
					<li>
						<a href="blocs.php">Gestion blocs</a>
					</li>
					<li class="selected">
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
        <button><a href="Displayevent.php">Retour à la liste des specialites</a></button>
        </div>
        
        
        <div id="error">
            <?php echo $error; ?>
        </div>
			
		<?php
			if (isset($_POST['Id_event'])){
				$event = $eventC->recupererEvent($_POST['Id_event']);}
				
		?>

        
        <form action="" method="POST">
            <table border="1" align="center">
                <tr>
                    <td>
                        <label for="Id_event">Id_event:
                        </label>
                    </td>
                    <td><input type="text" name="Id_event" id="Id_event" value="<?php echo $event['Id_event']; ?>" maxlength="20"></td>
                </tr>
				<tr>
                    <td>
                        <label for="nom_event">nom_event
                        </label>
                    </td>
                    <td><input type="text" name="nom_event" id="nom_event" value="<?php echo $event['nom_event']; ?>" maxlength="20"></td>
                </tr>
                <tr>
                    <td>
                        <label for="categorie_E">categorie_E:
                        </label>
                    </td>
                    <td><input type="text" name="categorie_E" id="categorie_E" value="<?php echo $event['categorie_E']; ?>" maxlength="20"></td>
                </tr>
                <tr>
                    <td>
                        <label for="ID_DEPART">ID_DEPART:
                        </label>
                    </td>
                    <td><input type="text" name="ID_DEPART" id="ID_DEPART" value="<?php echo $event['ID_DEPART']; ?>" maxlength="20"></td>
                </tr>
                <tr>
                    <td>
                        <label for="date">date:
                        </label>
                    </td>
                    <td><input type="date" name="date" id="date" value="<?php echo $event['date']; ?>" maxlength="20"></td>
                </tr>
                
                
                <tr>
                    <td>
                        <label for="Id_staff">Id_staff:
                        </label>
                    </td>
                    <td><input type="text" name="Id_staff" id="Id_staff" value="<?php echo $event['Id_staff']; ?>" maxlength="20"></td>
                </tr>
                            
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" value="Modifier"> 
                    </td>
                    <td>
                        <input type="reset" value="Annuler" >
                    </td>
                </tr>
            </table>
        </form>
    </body>
