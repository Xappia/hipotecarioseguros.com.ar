<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">
    <link rel="shortcut icon" href="http://ec2-107-20-143-171.compute-1.amazonaws.com/wp-content/uploads/2014/12/favicon.png" type="image/x-icon">
  
    <title>HIPOTECARIO SEGUROS - EN TIENDA - HOGAR</title>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../../css/style.css" rel="stylesheet">
    <!-- Font Awesome -->
	  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

  </head>

  <body class="">

    <div class="site-wrapper">

      <header class="">
        <div class="inner">
          <h3 class="masthead-brand"><img src="images/logo.png"></h3>
          <nav class="nav nav-masthead">
            <a class="nav-link grey" href="https://www.facebook.com/hipotecario.seguros/"><i class="fa fa-facebook"></i></a>
            <a class="nav-link grey" href="https://twitter.com/hipotecariosegu"><i class="fa fa-twitter"></i></a>
            <!-- <a class="nav-link" href="#">Contact</a> -->
          </nav>
        </div>
      </header>

      <main role="main" class="mh-60">
		  <?php
				include "Connection.php";
				
				session_start();

				if(isset($_GET["idplan"]))
				{
				  $idplan = $_GET["idplan"];
				}
				
				//$idplan = 1;
				
				//*************************************** COBERTURA DEL PLAN ***************************************
				
				$mysqli = open_conection();
				
				$CoveragePlan = array();
				
				$query = "SELECT `id`, `idplan`, `coverage`, `amount` FROM `mincludeplan` WHERE `idplan` = ".$idplan;

				$resultCoverage = $mysqli->query($query);

				if ($resultCoverage->num_rows > 0) { //Datos del Plan				
					
					while($row = $resultCoverage->fetch_assoc()) {
						
						array_push($CoveragePlan, $row);
						
					}
				} else {
					echo "0 results plan";
				}	
				
				$mysqli->close();
				
				$_SESSION['CoveragePlan'] = $CoveragePlan;				
			?>
        <h4 class="color-black uppercase mb-20">te garantizamos las siguientes coberturas</h4>
        <div class="row mw-15">
          <div class="col-lg-6 col-md-6 col-xs-12">
            <table class="table">
              <tr>
                <td><?php echo $_SESSION['CoveragePlan'][0]["coverage"]; ?></td>
                <td><span>$<?php echo  number_format($_SESSION['CoveragePlan'][0]["amount"],2,",","."); ?></span></td>
              </tr>
              <tr>
                <td><?php echo $_SESSION['CoveragePlan'][1]["coverage"]; ?></td>
                <td><span>$<?php echo  number_format($_SESSION['CoveragePlan'][1]["amount"],2,",","."); ?></span></td>
              </tr>
              <tr>
                <td><?php echo $_SESSION['CoveragePlan'][2]["coverage"]; ?></td>
                <td><span>$<?php echo  number_format($_SESSION['CoveragePlan'][2]["amount"],2,",","."); ?></span></td>
              </tr>
              <tr>
                <td><?php echo $_SESSION['CoveragePlan'][3]["coverage"]; ?></td>
                <td><span>$<?php echo  number_format($_SESSION['CoveragePlan'][3]["amount"],2,",","."); ?></span></td>
              </tr>
              <tr>
                <td><?php echo $_SESSION['CoveragePlan'][4]["coverage"]; ?></td>
                <td><span>$<?php echo  number_format($_SESSION['CoveragePlan'][4]["amount"],2,",","."); ?></span></td>
              </tr>
            </table>
          </div>
          <div class="col-lg-6 col-md-6 col-xs-12">
            <table class="table">
              <tr>
                <td><?php echo $_SESSION['CoveragePlan'][5]["coverage"]; ?></td>
                <td><span>$<?php echo  number_format($_SESSION['CoveragePlan'][5]["amount"],2,",","."); ?></span></td>
              </tr>
              <tr>
                <td><?php echo $_SESSION['CoveragePlan'][6]["coverage"]; ?></td>
                <td><span>$<?php echo  number_format($_SESSION['CoveragePlan'][6]["amount"],2,",","."); ?></span></td>
              </tr>
              <tr>
                <td><?php echo $_SESSION['CoveragePlan'][7]["coverage"]; ?></td>
                <td><span>$<?php echo  number_format($_SESSION['CoveragePlan'][7]["amount"],2,",","."); ?></span></td>
              </tr>
              <tr>
                <td><?php echo $_SESSION['CoveragePlan'][8]["coverage"]; ?></td>
                <td><span>$<?php echo  number_format($_SESSION['CoveragePlan'][8]["amount"],2,",","."); ?></span></td>
              </tr>
              <tr>
                <td><?php echo $_SESSION['CoveragePlan'][9]["coverage"]; ?></td>
                <td><span>$<?php echo  number_format($_SESSION['CoveragePlan'][9]["amount"],2,",","."); ?></span></td>
              </tr>
            </table>
            
          </div>
        </div>
        <p class="lead mh-15">
          <a href="#" class="btn btn-dark-brown">Volver a cotizar </a>
               <a href="#" class="btn btn-dark-brown">Descargar PDF</a>
        </p>
      </main>


    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>