<?php
include "cl_Business/Values.php";
?>
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
				//Marcar Boton como visto
				
				require_once $_SERVER["DOCUMENT_ROOT"] . "/cotizar-seguro-hogar/sitio/cl_Business/conn/Connection.php";
				
				$query = "";
				
				if($_SESSION['Plan']->get_NumButtonlabelFront() == 1)
				{
					$query = "UPDATE `tplanbuttons` SET `btn1v` = `btn1v` + 1 WHERE `idplan` = ".$_SESSION['Plan']->get_PlanID();
				}
				else
				{
					if($_SESSION['Plan']->get_NumButtonlabelFront() == 2)
					{
						$query = "UPDATE `tplanbuttons` SET `btn2v` = `btn2v` + 1 WHERE `idplan` = ".$_SESSION['Plan']->get_PlanID();
					}
					else
					{
						$query = "UPDATE `tplanbuttons` SET `btn3v` = `btn3v` + 1 WHERE `idplan` = ".$_SESSION['Plan']->get_PlanID();			
					}
				}
				
				$mysqli = open_conection();
				
				$result = $mysqli->query($query);
				
				$mysqli->close();
								
			?>				  
            <div class="row">
              <div class="col-lg-8 col-md-7 col-xs-12">
                <h1 class="cover-heading"><img src="administrator/public/files/<?php echo  $_SESSION['Plan']->get_ImagePlan(); ?>"></h1>
                <a class="day-price"><?php echo  $_SESSION['Plan']->get_CostdayLabel(); ?><span> $<?php echo  number_format($_SESSION['Plan']->get_amountDaily(),0,",","."); ?></span> al día</a>
                <p class="lead">
                  <?php echo  $_SESSION['Plan']->get_footlabel(); ?><br><?php echo  $_SESSION['Plan']->get_PlanLabel(); ?> $<?php echo  number_format($_SESSION['Plan']->get_amountPlan(),0,",","."); ?>
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
                    <p>Hasta $<?php echo  number_format($_SESSION['Plan']->get_amount1(),0,",","."); ?></p>
                  </li>
                  <li>
                    <div class="other-plan-title">
                      <span><?php echo  $_SESSION['Plan']->get_coverage2(); ?></span><br>
                      <?php echo  $_SESSION['Plan']->get_coverage2label2(); ?>
                    </div>
                    <p>Hasta $<?php echo  number_format($_SESSION['Plan']->get_amount2(),0,",","."); ?></p>
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
	<script>
	$(function() {
		$("#NextForm").click(function(){
			var frm = Math.random() * (3 - 1) + 1;
			if(frm > 1 && frm < 2)
			{
				window.location.replace("formlong.php");
			}
			else
			{
				window.location.replace("formshort.php");
			}
		  });
	});	
	</script>		
  </body>
</html>
