<?php
include_once '../../Controler/SpecialiteC.php';
include_once '../../Controler/DepartementC.php';


$depC=new DepartementC();
$listDC=$depC->affichageList();


$spC=new SpecialiteC();
$listC=$spC->affichageList()
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Blocs</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" media="screen" href="css/reset.css">
    <link rel="stylesheet" type="text/css" media="screen" href="css/grid.css">
    <link rel="stylesheet" type="text/css" media="screen" href="css/style.css">
    <link rel="stylesheet" type="text/css" media="screen" href="css/cycle.css">
    <link href='http://fonts.googleapis.com/css?family=Passion+One:400' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,800' rel='stylesheet' type='text/css'>
    <script src="js/jquery-1.7.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/jquery.cycle.all.js"></script>
    <script>
		jQuery(document).ready(function() {
			$('#s2').cycle({ 
				fx:     'fade', 
				speed:  'slow', 
				pager:  '#nav',
				timeout: 8000, 
			});
		});
	</script>

</head>
<body>
<div class="main">
   <header> 
   <h1><a href="../../site/index.html"><img src="../../sources/images/logo.png"  width="50%" alt=""></a></h1> 
   </header>  
  <!--==============================content================================-->
<section id="content">
    <div class="header-block">
            <nav>  
              <ul class="menu">
                    <li><a href="../site/index.html">Home</a></li>
                    <li><a href="../site/about.html">Events</a></li>
                    <li class="current"><a href="Blocs.php">Blocs</a></li>
                    <li><a href="../site/products.html">Products</a></li>
                    <li><a href="../site/contacts.html">Contacts</a></li>
                </ul>
            </nav>
    
            <div class="cycle">
                <div id="s2">
                <div><div class="banner">Vivez L'experience avec<span>Land'Na</span></div></div>  
                <div><div class="banner">Rejouissez-vous avec<span>Land'Na</span></div></div>
                <div><div class="banner">Divertissez-vous avec<span>Land'Na</span></div></div></div>
            <div id="nav"></div>
            </div>
        </div>
        
    <div class="container_24 top-3">
        <div class="grid_24 align-c">
			<h2 class="h2-2">Nos Blocs</h2>
        </div>   

        <div class="grid_6 top-1">
			<div class="p4">
                <div>
                        <?php
                    foreach ($listC as $row)
                    {echo('<br>');?>
                        <h3>
                        <?php
                    echo($row['ID_SPEC']); ?>
                    </h3>
                    <?php
                    echo($row['NOM_SPEC']);
                    echo('<br>');
                    echo($row['TYPE_SPEC']);
                    echo('<br>');
                    } 
                    ?>
                </div>   
            </div>
        </div>
    </div>

        <div class="container_24 top-3">
        <div class="grid_24 align-c">
			<h2 class="h2-2">Nos Départements</h2>
            </div> 
            <div class="grid_6 top-1">
				<div class="p4">
                <div>
            <?php foreach ($listDC as $row)
            { echo('<br>');?>
                <h3>
                <?php
            echo("Id: ".$row['ID_DEPART']); ?>
            </h3>
            <?php
            echo("Nom: ".$row['NOM_DEPART']);
            echo('<br>');
            echo($row['NB_PLACES']." Places");
            echo('<br>');
            ?>
                        <img  src="<?php echo("../Back/images/".$row['pict'])?>" height="120" width="120">
                <?php
            }
            
            ?>
            </div>   
            </div>
                </div>
        </div>
        <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle" onclick="window.location.href = 'https://calendar.google.com/calendar/u/0/r?hl=fr&pli=1';">
            <span data-feather="calendar" ></span>
            Disponibilités de places
          </button>
         

          
    </section> 
    <iframe src="https://www.google.com/maps/embed?pb=!4v1651049728573!6m8!1m7!1sESzPSkd8izUM20rVxtRe1w!2m2!1d49.89145791095085!2d2.30341598383541!3f249.78960366092497!4f0!5f0.7820865974627469" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

        <!--==============================footer=================================-->
  <footer>
      <p><strong>LAND'NA</strong> <span>© 2022</span></p>
      Website Template designed by Aloulou Karim
  </footer>	
  </div>
  
 
</body>
</html>