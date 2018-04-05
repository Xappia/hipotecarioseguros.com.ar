<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <title>Hipotecario Seguros</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet"><link rel="shortcut icon" href="http://ec2-107-20-143-171.compute-1.amazonaws.com/wp-content/uploads/2014/12/favicon.png" type="image/x-icon">

    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
    <!-- Font Awesome -->
	  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

  </head>

  <body class="">

    <div class="site-wrapper background-grey">

      <header class="">
        <div class="inner">
          <h3 class="masthead-brand"><img src="images/logo.png"></h3>
          <nav class="nav nav-masthead">
            <!-- <a class="nav-link grey" href="https://www.facebook.com/hipotecario.seguros/"><i class="fa fa-facebook"></i></a> -->
            <!-- <a class="nav-link grey" href="https://twitter.com/hipotecariosegu"><i class="fa fa-twitter"></i></a> -->
            <!-- <a class="nav-link" href="#">Contact</a> -->
          </nav>
        </div>
      </header>

      <main role="main" class="mh-60">
		  <?php
				require_once $_SERVER["DOCUMENT_ROOT"] . "/cotizar-seguro-hogar/sitio/cl_Business/conn/Connection.php";
				require_once $_SERVER["DOCUMENT_ROOT"] . "/cotizar-seguro-hogar/sitio/cl_Business/class_lib.php";
				
				session_start();

				if(isset($_GET["idplan"]))
				{
				  $idplan = $_GET["idplan"];
				}
				
				//$idplan = 1;
				
				//*************************************** COBERTURA DEL PLAN ***************************************
				
				$mysqli = open_conection();
				
				$CoveragePlan = array();
				
				$query = "SELECT `id`, `idplan`, `coverage`, `amount` FROM `mincludeplan` WHERE `deleted_at` is null and `idplan` = ".$idplan;

				$resultCoverage = $mysqli->query($query);

				if ($resultCoverage->num_rows > 0) { //Datos del Plan				
					
					while($row = $resultCoverage->fetch_assoc()) {
						
						array_push($CoveragePlan, $row);
						
					}
				} else {
					echo "0 results plan";
				}	
								
				//Datos del Plan para Extraccion del PDF
				$_SESSION['CoveragePlan'] = $CoveragePlan;
				
					$query = "SELECT `id`, `type`, `plan`, `planlabel`, `image`, `amountplan`, `costdaylabel`, `costday`, `coverage1label1`, `coverage1`, `coverage1label2`, `amount1`, `coverage2label1`, `coverage2`, `coverage2label2`, `amount2`, `buttonlabel`, `buttonlabel2`, `buttonlabel3`, `randombutton`, `footlabel`, `coveragepdf` FROM `mplan` WHERE `deleted_at` is null and `id` = ".$idplan;
					
					$result = $mysqli->query($query);

					if ($result->num_rows > 0) { //Datos del Plan
						
						$lPlan = array();
						
						while($row = $result->fetch_assoc()) {
							
							$ValuePlan = new Plan(); //Objeto Nuevo Plan
							
							$ValuePlan->set_PlanID($row["id"]);
							$ValuePlan->set_Type($row["type"]);
							$ValuePlan->set_PlanName($row["plan"]);
							$ValuePlan->set_PlanLabel($row["planlabel"]);
							$ValuePlan->set_ImagePlan($row["image"]);
							$ValuePlan->set_amountPlan($row["amountplan"]);
							$ValuePlan->set_CostdayLabel($row["costdaylabel"]);
							$ValuePlan->set_amountDaily($row["costday"]);
							$ValuePlan->set_coverage1label1($row["coverage1label1"]);			
							$ValuePlan->set_coverage1($row["coverage1"]);
							$ValuePlan->set_coverage1label2	($row["coverage1label2"]);	
							$ValuePlan->set_amount1($row["amount1"]);
							$ValuePlan->set_coverage2label1($row["coverage2label1"]);
							$ValuePlan->set_coverage2($row["coverage2"]);
							$ValuePlan->set_coverage2label2($row["coverage2label2"]);
							$ValuePlan->set_amount2($row["amount2"]);
							$ValuePlan->set_buttonlabel($row["buttonlabel"]);
							$ValuePlan->set_buttonlabel2($row["buttonlabel2"]);
							$ValuePlan->set_buttonlabel3($row["buttonlabel3"]);
							$ValuePlan->set_footlabel($row["footlabel"]);
							$ValuePlan->set_coveragepdf($row["coveragepdf"]);
							$ValuePlan->set_randombutton($row["randombutton"]);
							array_push($lPlan, $ValuePlan);
							
						}
					} else {
						echo "0 results plan ".$TypePlan;
					}
					
					//Validar si existen planes para la seleccion del usuario
					if(count($lPlan) == 0)
					{
						echo "0 results plan";
					}
					else
					{
						if(count($lPlan) > 1)//SI hay mas de un plan escoger uno al azar
						{
							$_SESSION['Plan'] = $lPlan[rand(0,(count($lPlan)) - 1)];
						}
						else
						{
							$_SESSION['Plan'] = $lPlan[0];
						}
					}										
					
					$mysqli->close();
			?>	  
        <h4 class="color-black uppercase mb-20">te garantizamos las siguientes coberturas</h4>
        <div class="row mw-15">
          <div class="col-lg-6 col-md-6 col-xs-12">
            <table class="table">
              <tr>
                <td><?php if(1 <= count($_SESSION['CoveragePlan'])) echo $_SESSION['CoveragePlan'][0]["coverage"]; ?></td>
                <td><span><?php if(1 <= count($_SESSION['CoveragePlan'])) echo  '$'.number_format($_SESSION['CoveragePlan'][0]["amount"],2,",","."); ?></span></td>
              </tr>
              <tr>
                <td><?php if(2 <= count($_SESSION['CoveragePlan'])) echo $_SESSION['CoveragePlan'][1]["coverage"]; ?></td>
                <td><span><?php if(2 <= count($_SESSION['CoveragePlan'])) echo  '$'.number_format($_SESSION['CoveragePlan'][1]["amount"],2,",","."); ?></span></td>
              </tr>
              <tr>
                <td><?php if(3 <= count($_SESSION['CoveragePlan'])) echo $_SESSION['CoveragePlan'][2]["coverage"]; ?></td>
                <td><span><?php if(3 <= count($_SESSION['CoveragePlan'])) echo  '$'.number_format($_SESSION['CoveragePlan'][2]["amount"],2,",","."); ?></span></td>
              </tr>
              <tr>
                <td><?php if(4 <= count($_SESSION['CoveragePlan'])) echo $_SESSION['CoveragePlan'][3]["coverage"]; ?></td>
                <td><span><?php if(4 <= count($_SESSION['CoveragePlan'])) echo  '$'.number_format($_SESSION['CoveragePlan'][3]["amount"],2,",","."); ?></span></td>
              </tr>
              <tr>
                <td><?php if(5 <= count($_SESSION['CoveragePlan'])) echo $_SESSION['CoveragePlan'][4]["coverage"]; ?></td>
                <td><span><?php if(5 <= count($_SESSION['CoveragePlan'])) echo  '$'.number_format($_SESSION['CoveragePlan'][4]["amount"],2,",","."); ?></span></td>
              </tr>
            </table>
          </div>
          <div class="col-lg-6 col-md-6 col-xs-12">
            <table class="table">
              <tr>
                <td><?php if(6 <= count($_SESSION['CoveragePlan'])) echo $_SESSION['CoveragePlan'][5]["coverage"]; ?></td>
                <td><span><?php if(6 <= count($_SESSION['CoveragePlan'])) echo  '$'.number_format($_SESSION['CoveragePlan'][5]["amount"],2,",","."); ?></span></td>
              </tr>
              <tr>
                <td><?php if(7 <= count($_SESSION['CoveragePlan'])) echo $_SESSION['CoveragePlan'][6]["coverage"]; ?></td>
                <td><span><?php if(7 <= count($_SESSION['CoveragePlan'])) echo  '$'.number_format($_SESSION['CoveragePlan'][6]["amount"],2,",","."); ?></span></td>
              </tr>
              <tr>
                <td><?php if(8 <= count($_SESSION['CoveragePlan'])) echo $_SESSION['CoveragePlan'][7]["coverage"]; ?></td>
                <td><span><?php if(8 <= count($_SESSION['CoveragePlan'])) echo  '$'.number_format($_SESSION['CoveragePlan'][7]["amount"],2,",","."); ?></span></td>
              </tr>
              <tr>
                <td><?php if(9 <= count($_SESSION['CoveragePlan'])) echo $_SESSION['CoveragePlan'][8]["coverage"]; ?></td>
                <td><span><?php if(9 <= count($_SESSION['CoveragePlan'])) echo  '$'.number_format($_SESSION['CoveragePlan'][8]["amount"],2,",","."); ?></span></td>
              </tr>
              <tr>
                <td><?php if(10 <= count($_SESSION['CoveragePlan'])) echo $_SESSION['CoveragePlan'][9]["coverage"]; ?></td>
                <td><span><?php if(10 <= count($_SESSION['CoveragePlan'])) echo  '$'.number_format($_SESSION['CoveragePlan'][9]["amount"],2,",","."); ?></span></td>
              </tr>
            </table>
            
          </div>
        </div>
        <p class="lead mh-15">
          <a href="#" class="btn btn-dark-brown">Volver a cotizar </a>
               <a href="administrator/public/files/<?php echo  $_SESSION['Plan']->get_coveragepdf(); ?>" class="btn btn-orange" download>Descargar PDF</a>
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