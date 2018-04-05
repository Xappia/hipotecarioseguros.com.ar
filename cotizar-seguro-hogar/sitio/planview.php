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

      <div class="site-wrapper-inner">

        <div class="cover-container">

          <header class="masthead clearfix">
            <div class="inner">
              <h3 class="masthead-brand"><img src="images/logo.png"></h3>
              <nav class="nav nav-masthead">
                <!--a class="nav-link grey" href="#"><i class="fa fa-facebook"></i></a-->
                <!--a class="nav-link grey" href="#"><i class="fa fa-twitter"></i></a-->
                <!-- <a class="nav-link" href="#">Contact</a> -->
              </nav>
            </div>
          </header>

          <main role="main" class="inner cover">
			  <?php
					require_once $_SERVER["DOCUMENT_ROOT"] . "/cotizar-seguro-hogar/sitio/cl_Business/conn/Connection.php";
					require_once $_SERVER["DOCUMENT_ROOT"] . "/cotizar-seguro-hogar/sitio/cl_Business/class_lib.php";
					
					session_start();

					if(isset($_GET["idplan"]))
					{
					  $idplan = $_GET["idplan"];
					}
					
					//$idplan = 1;					

					//*************************************** CONSULTA DEL PLAN ***************************************
					$mysqli = open_conection();
					
					$query = "SELECT `id`, `type`, `plan`, `planlabel`, `image`, `amountplan`, `costdaylabel`, `costday`, `coverage1label1`, `coverage1`, `coverage1label2`, `amount1`, `coverage2label1`, `coverage2`, `coverage2label2`, `amount2`, `buttonlabel`, `buttonlabel2`, `buttonlabel3`, `randombutton`, `footlabel`, `coveragepdf` FROM `mplan` WHERE `id` = ".$idplan;
					
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
					
					//Escoger etiqueta del boton
					if((int)$_SESSION['Plan']->get_randombutton() == 1)
					{
						$nEtiqueta = rand(1,3);
						
						if($nEtiqueta == 1)
						{
							$_SESSION['Plan']->set_NumButtonlabelFront($nEtiqueta);
							$_SESSION['Plan']->set_buttonlabelFront($_SESSION['Plan']->get_buttonlabel());	
						}
						else
						{
							if($nEtiqueta == 2)
							{
								$_SESSION['Plan']->set_NumButtonlabelFront($nEtiqueta);
								$_SESSION['Plan']->set_buttonlabelFront($_SESSION['Plan']->get_buttonlabel2());
							}
							else
							{
								$_SESSION['Plan']->set_NumButtonlabelFront($nEtiqueta);
								$_SESSION['Plan']->set_buttonlabelFront($_SESSION['Plan']->get_buttonlabel3());				
							}
						}
					}
					else
					{
						$_SESSION['Plan']->set_NumButtonlabelFront(1);
						$_SESSION['Plan']->set_buttonlabelFront($_SESSION['Plan']->get_buttonlabel());	
					}					
			?>		  
            <div class="row">
              <div class="col-lg-8 col-md-7 col-xs-12">
                <h1 class="cover-heading"><img src="images/<?php echo  $_SESSION['Plan']->get_ImagePlan(); ?>"></h1>
                <a class="day-price"><?php echo  $_SESSION['Plan']->get_CostdayLabel(); ?><span> $<?php echo  number_format($_SESSION['Plan']->get_amountDaily(),2,",","."); ?></span> al día</a>
                <p class="lead">
                  <?php echo  $_SESSION['Plan']->get_footlabel(); ?><br><?php echo  $_SESSION['Plan']->get_PlanLabel(); ?> $<?php echo  number_format($_SESSION['Plan']->get_amountPlan(),2,",","."); ?>
                </p>
                <p class="lead">
                  <a href="#" id="NextForm" class="btn btn-dark-brown"><?php echo  $_SESSION['Plan']->get_buttonlabelFront(); ?></a>
                </p>
              </div>
              <div class="col-lg-4 col-md-5 col-xs-12 other-plans">
                <h4 class="subtitle"><?php echo  $_SESSION['Plan']->get_coverage1label1(); ?></h4>
                <ul>
                  <li>
                    <div class="other-plan-title">
                      <span><?php echo  $_SESSION['Plan']->get_coverage1(); ?></span><br>
                      <?php echo  $_SESSION['Plan']->get_coverage1label2(); ?>
                    </div>
                    <p>Hasta $<?php echo  number_format($_SESSION['Plan']->get_amount1(),2,",","."); ?></p>
                  </li>
                  <li>
                    <div class="other-plan-title">
                      <span><?php echo  $_SESSION['Plan']->get_coverage2(); ?></span><br>
                      <?php echo  $_SESSION['Plan']->get_coverage2label2(); ?>
                    </div>
                    <p>Hasta $<?php echo  number_format($_SESSION['Plan']->get_amount2(),2,",","."); ?></p>
                  </li>
                </ul>
              </div>
            </div>
          </main>

          
        </div>

      </div>

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