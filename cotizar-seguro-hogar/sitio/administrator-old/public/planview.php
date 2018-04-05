<!doctype html>
<html lang="en">
  <head>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
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

    <div class="site-wrapper background-grey">

      <div class="site-wrapper-inner">

        <div class="cover-container">

          <header class="masthead clearfix">
            <div class="inner">
              <h3 class="masthead-brand"><img src="images/logo.png"></h3>
              <nav class="nav nav-masthead">
                <a class="nav-link grey" href="#"><i class="fa fa-facebook"></i></a>
                <a class="nav-link grey" href="#"><i class="fa fa-twitter"></i></a>
                <!-- <a class="nav-link" href="#">Contact</a> -->
              </nav>
            </div>
          </header>
          <main role="main" class="inner cover">
		  <?php
				include "Connection.php";
				
				session_start();

				if(isset($_GET["idplan"]))
				{
				  $idplan = $_GET["idplan"];
				}
				
				//$idplan = 1;
				
				//*************************************** CLASE PLAN ***************************************
				class Plan{
					
					var $_PlanID;
					var $_Type;
					var $_PlanName;
					var $_PlanLabel;
					var $_ImagePlan;
					var $_amountPlan;
					var $_CostdayLabel;
					var $_amountDaily;
					var $_coverage1label1;
					var $_coverage1label2;
					var $_coverage1;
					var $_amount1;
					var $_coverage2label1;
					var $_coverage2label2;
					var $_randombutton;
					var $_buttonlabel;
					var $_buttonlabel2;
					var $_buttonlabel3;
					var $_footlabel;
					var $_coverage2;
					var $_amount2;
						
					//Plan ID
					function set_PlanID($PlanID){
						$this->_PlanID = $PlanID;
					}	
					function get_PlanID(){
						return $this->_PlanID;
					}	
					
					//Tipo de Plan
					function set_Type($Type){
						$this->_Type = $Type;
					}	
					function get_Type(){
						return $this->_Type;
					}	
					
					//Nombre del Plan
					function set_PlanName($PlanName){
						$this->_PlanName = $PlanName;
					}	
					function get_PlanName(){
						return $this->_PlanName;
					}
					
					//Etiqueta del Nombre del Plan
					function set_PlanLabel($PlanLabel){
						$this->_PlanLabel = $PlanLabel;
					}	
					function get_PlanLabel(){
						return $this->_PlanLabel;
					}	
					
					//Imagen del Plan
					function set_ImagePlan($ImagePlan){
						$this->_ImagePlan = $ImagePlan;
					}	
					function get_ImagePlan(){
						return $this->_ImagePlan;
					}	

					//Costo del Plan
					function set_amountPlan($amountPlan){
						$this->_amountPlan = $amountPlan;
					}	
					function get_amountPlan(){
						return $this->_amountPlan;
					}
					
					//Label Costo Diario
					function set_CostdayLabel($CostdayLabel){
						$this->_CostdayLabel = $CostdayLabel;
					}	
					function get_CostdayLabel(){
						return $this->_CostdayLabel;
					}	
					
					//Costo Diario
					function set_amountDaily($amountDaily){
						$this->_amountDaily = $amountDaily;
					}	
					function get_amountDaily(){
						return $this->_amountDaily;
					}
					
					//Nombre Cobertura 1
					function set_coverage1($coverage1){
						$this->_coverage1 = $coverage1;
					}	
					function get_coverage1(){
						return $this->_coverage1;
					}
					
					//Etiqueta 1 Cobertura 1
					function set_coverage1label1($coverage1label1){
						$this->_coverage1label1 = $coverage1label1;
					}	
					function get_coverage1label1(){
						return $this->_coverage1label1;
					}

					//Etiqueta 2 Cobertura 1
					function set_coverage1label2($coverage1label2){
						$this->_coverage1label2 = $coverage1label2;
					}
					
					function get_coverage1label2(){
						return $this->_coverage1label2;
					}	
					
					//Monto Cobertura 1
					function set_amount1($amount1){
						$this->_amount1 = $amount1;
					}	
					function get_amount1(){
						return $this->_amount1;
					}
					
					//Nombre Cobertura 2
					function set_coverage2($coverage2){
						$this->_coverage2 = $coverage2;
					}	
					function get_coverage2(){
						return $this->_coverage2;
					}
					
					//Etiqueta 2 Cobertura 1
					function set_coverage2label1($coverage2label1){
						$this->_coverage2label1 = $coverage2label1;
					}	
					function get_coverage2label1(){
						return $this->_coverage2label1;
					}

					//Etiqueta 2 Cobertura 2
					function set_coverage2label2($coverage2label2){
						$this->_coverage2label2 = $coverage2label2;
					}
					function get_coverage2label2(){
						return $this->_coverage2label2;
					}		
					
					//Monto Cobertura 2
					function set_amount2($amount2){
						$this->_amount2 = $amount2;
					}	
					function get_amount2(){
						return $this->_amount2;
					}

					//Etiqueta del Boton
					function set_buttonlabel($buttonlabel){
						$this->_buttonlabel = $buttonlabel;
					}
					function get_buttonlabel(){
						return $this->_buttonlabel;
					}
					
					//Etiqueta del Boton2
					function set_buttonlabel2($buttonlabel2){
						$this->_buttonlabel2 = $buttonlabel2;
					}
					function get_buttonlabel2(){
						return $this->_buttonlabel2;
					}

					//Etiqueta del Boton3
					function set_buttonlabel3($buttonlabel3){
						$this->_buttonlabel3 = $buttonlabel3;
					}
					function get_buttonlabel3(){
						return $this->_buttonlabel3;
					}
					
					//Aleatorio del Boton
					function set_randombutton($randombutton){
						$this->_randombutton = $randombutton;
					}
					function get_randombutton(){
						return $this->_randombutton;
					}		
					
					//Etiqueta del Pie de la pantalla de plan
					function set_footlabel($footlabel){
						$this->_footlabel = $footlabel;
					}
					function get_footlabel(){
						return $this->_footlabel;
					}		
				}
				

				//*************************************** CONSULTA DEL PLAN ***************************************
				$mysqli = open_conection();
				
				$lPlan = array();
				
				$query = "SELECT `id`, `type`, `plan`, `planlabel`, `image`, `amountplan`, `costdaylabel`, `costday`, `coverage1label1`, `coverage1`, `coverage1label2`, `amount1`, `coverage2label1`, `coverage2`, `coverage2label2`, `amount2`, `randombutton`, `buttonlabel`, `buttonlabel2`, `buttonlabel3`, `footlabel` FROM `mplan` WHERE `id` = '".$idplan."'";	
				
				$result = $mysqli->query($query);

				if ($result->num_rows > 0) { //Datos del Plan		
					
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
						$ValuePlan->set_randombutton($row["randombutton"]);
						array_push($lPlan, $ValuePlan);
						
					}
				} else {
					echo "0 results planID ".$idplan;
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
		?>
            <div class="row">
              <div class="col-lg-8 col-md-7 col-xs-12">
                <h1 class="cover-heading"><img src="images/<?php echo  $_SESSION['Plan']->get_ImagePlan(); ?>"></h1>
                <a class="day-price"><?php echo  $_SESSION['Plan']->get_CostdayLabel(); ?><span> $<?php echo  number_format($_SESSION['Plan']->get_amountDaily(),2,",","."); ?></span> al día</a>
                <p class="lead">
                  <?php echo  $_SESSION['Plan']->get_footlabel(); ?><br><?php echo  $_SESSION['Plan']->get_PlanLabel(); ?> $<?php echo  number_format($_SESSION['Plan']->get_amountPlan(),2,",","."); ?>
                </p>
                <p class="lead">
                  <a href="#" id="NextForm" class="btn btn-dark-brown">
				  <?php 
					if($_SESSION['Plan']->get_randombutton() == 1)
					{
						$LabelButton = rand(1,3);
						
						if($LabelButton == 1)
							echo  $_SESSION['Plan']->get_buttonlabel();
							else
								if($LabelButton == 2)
									echo  $_SESSION['Plan']->get_buttonlabel2();
									else
										if($LabelButton == 3)
											echo  $_SESSION['Plan']->get_buttonlabel3();
					}
					else
					{
						echo  $_SESSION['Plan']->get_buttonlabel();
					}					
				  ?></a>
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
	<script>
	$(function() {
		$("#NextForm").click(function(){

		  });
	});	
	</script>	
  </body>
</html>