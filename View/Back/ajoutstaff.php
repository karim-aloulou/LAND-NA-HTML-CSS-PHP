<?php

include_once '../../Model/staff.php';
include_once '../../Controler/staffc.php';

$adherent=NULL;
if (isset($_POST['ID_Staff'])&&
    isset($_POST['nom_staff'])&&
    isset($_POST['salaire'])&&
    isset($_POST['categorie'])&&
    isset($_POST['horaire']) &&
    isset($_POST['etat']) )
{
    if (!empty($_POST['ID_Staff'])&&
        !empty($_POST['nom_staff'])&&
        !empty($_POST['salaire'])&&
        !empty($_POST['categorie'])&&
        !empty($_POST['horaire'])&&
        !empty($_POST['etat']))
    {
        $adherent= new staff($_POST['ID_Staff'],
                              $_POST['nom_staff'],
                              $_POST['salaire'],
                              $_POST['categorie'],
                              $_POST['horaire'],
                              $_POST['etat']);
        $adC=new staffc();
        $adC->Ajouters($adherent);
        header('Location:Displaystaff.php');
    }
    
}

?>



<head>
	<meta charset="UTF-8">
	<title>Rides and Attractions - Amusement Park Website Template</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
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
						<a href="../amusementparkwebsitetemplate/comptes.php">Gestion Comptess</a>
					</li>
					<li>
						<a href="../amusementparkwebsitetemplate/produits.php">Produits</a>
					</li>
					<li>
						<a href="../amusementparkwebsitetemplate/restauration.php">Restauration</a>
					</li>
				</ul>
			</div>
			<div id="body">

  <head>
    <title>Gestion des evenements</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
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
    <div class="testbox">
      <form action="" method="post">
        <div class="banner">
          <h1>Gestion staff</h1>
        </div>
        <div class="item">
          <p>ID staff </p>
          <input type="text" name="ID_Staff"/>

          <p>Agent's Name</p>
          <input type="text" name="nom_staff"/>

          <p>Salaire  </p>
          <input type="text" name="salaire"  />

          <p>Select Categorie</p> 
          <select name = "categorie">
            <option value=""></option>
            <option value="Agent">*Please select*</option>
            <option value="Securite">Securite</option>
            <option value="Organisateur">Organisateur</option>
            <option value="DJ">DJ</option>
            <option value="Fournisseur">Fournisseur</option>
          </select>
           
          
        <!-- <div class="item"> -->
            
          <!-- <p>Date of Event</p>
          <input type="date" name="date" />
          <i class="fas fa-calendar-alt"></i>
        </div> -->
          <p>Horraire de travail </p>
          <input type="text" name="horaire" />
          
        <select name="etat">
              <option value="">Etat</option>
              <option value="1">Working</option>
              <option value="2">Congé</option>
            </select>
        </div>
        <!-- <div class="item">
          <p>Description of Event</p>
          <textarea rows="3" ></textarea>
        </div> -->
        

        
        <!-- <div class="item">
          <p>ID departement </p>
          <input type="text" name="ID_DEPART"/>
        </div>
        <div class="item">
          <p>ID staff </p>
          <input type="text" name="id_staff"/>
        </div>

        <div class="item">
          <p>Type of Performance</p>
          <select>
            <option value=""></option>
            <option value="1">*Please select*</option>
            <option value="2">Solo Performance</option>
            <option value="3">Full Band</option>
          </select>
        </div>
        <div class="question">
          <p>Will this event be recorded?</p>
          <div class="question-answer">
            <div>
              <input type="radio" value="none" id="radio_1" name="recorded" />
              <label for="radio_1" class="radio"><span>Yes</span></label>
            </div>
            <div>
              <input type="radio" value="none" id="radio_2" name="recorded" />
              <label for="radio_2" class="radio"><span>No</span></label>
            </div>
          </div>
        </div> -->
        <div class="btn-block">
        <input type="submit" >
          <!--<button type="submit" href="../amusementparkwebsitetemplate/services.php">SEND</button> -->
        </div>
      </form>
    </div>
  </body>
</div>


    