<!doctype html>
<html lang="en">
  <head>
    <meta HTTP-EQUIV="Content-type" CONTENT="text/html; charset=UTF-8">
	
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <title>Hipotecario Seguros - Despreocupate</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet"><link rel="shortcut icon" href="http://ec2-107-20-143-171.compute-1.amazonaws.com/wp-content/uploads/2014/12/favicon.png" type="image/x-icon">

    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
    <!-- Font Awesome -->
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

  </head>

  <body class="" onload="disableBack()">

    <div class="site-wrapper background-grey">

      <div class="site-wrapper-inner">

        <div >

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

          <main role="main" class="inner cover main-form">
			<?php
				require_once $_SERVER["DOCUMENT_ROOT"] . "/cotizar-seguro-hogar/sitio/cl_Business/conn/Connection.php";
				require_once $_SERVER["DOCUMENT_ROOT"] . "/cotizar-seguro-hogar/sitio/cl_Business/Values.php";
				
				$mysqli = open_conection();
				
				$query = "UPDATE `mforms` SET `nshow`= `nshow` + 1 WHERE `id` = 1"; //Actualiza el Contador del Formulario
				
				$result = $mysqli->query($query);
				
				//Cargar el Clic de las etiquetas del plan
				
				$query = "";
				
				if($_SESSION['Plan']->get_NumButtonlabelFront() == 1)
				{
					$query = "UPDATE `tplanbuttons` SET `btn1c` = `btn1c` + 1 WHERE `idplan` = ".$_SESSION['Plan']->get_PlanID();
				}
				else
				{
					if($_SESSION['Plan']->get_NumButtonlabelFront() == 2)
					{
						$query = "UPDATE `tplanbuttons` SET `btn2c` = `btn2c` + 1 WHERE `idplan` = ".$_SESSION['Plan']->get_PlanID();
					}
					else
					{
						$query = "UPDATE `tplanbuttons` SET `btn3c` = `btn3c` + 1 WHERE `idplan` = ".$_SESSION['Plan']->get_PlanID();			
					}
				}
				
				$result = $mysqli->query($query);				
				
				$mysqli->close();
								
			?>			  
            <h4 class="color-black uppercase">ESTAS A UN PASO DE PROTEGER LO QUE MÁS TE INTERESA</h4>
            
            <div class="col-lg-8 col-lg-offset">
              
            </div>
            <form id="dProspect" method="post" class="form" action="https://na78.salesforce.com/servlet/servlet.WebToLead?encoding=UTF-8" onsubmit="return ValidateForm()">
			  <input type=hidden name="oid" value="00Do0000000Kvgv">
			  <input type=hidden name="retURL" value="http://hipotecarioseguros.com.ar/cotizar-seguro-hogar/sitio/final.php">			
              <div class="row justify-content-lg-center">
                <div class="col-lg-4 col-sm-12">
				  <input type="text" required class="form-control" onkeypress="return letterOnly(event);" size="20" maxlength="20" name="first_name" id="first_name" placeholder="NOMBRE">
                </div> 
                <div class="col-lg-4 col-sm-12">
				  <input type="text" required class="form-control" onkeypress="return letterOnly(event);" size="20" maxlength="20" name="last_name" id="last_name" placeholder="APELLIDO">
                </div>
              </div>
              <div class="w-100"></div>  
              <div class="row justify-content-lg-center">
                <div class="col-lg-2 col-sm-12">
                  <select required class="form-control" name="00N1N00000P57nB" id="00N1N00000P57nB">
                    <option value="" disabled selected>TIPO DE TELÉFONO</option>
                    <option value="Celular">CELULAR</option>
                    <option value="Particular">PARTICULAR</option>
                  </select>
                </div> 
                <div class="col-lg-2 col-sm-12">
					<input type="text" class="form-control" pattern=".{3,4}" required onKeyPress="return numberOnly(event);" required title="Código de área de 3 a 4 dígitos" maxlength="4" name="00N1N00000P57n1" id="00N1N00000P57n1" placeholder="COD. ÁREA">
                </div> 
                <div class="col-lg-4 col-sm-12">
					<input type="text" class="form-control" pattern=".{8,8}" required onKeyPress="return numberOnly(event);" title="Número de teléfono de 8 dígitos" maxlength="8" name="phone" id="phone" placeholder="TELÉFONO">
                </div>   
              </div>
              <div class="row justify-content-lg-center">
                <div class="col-lg-4 col-sm-12">
					<input type="email" required class="form-control" maxlength="80" name="email" id="email" placeholder="MAIL">
                </div> 
                <div class="col-lg-4 col-sm-12">
                  <div class="fancy-check">
					<input type="checkbox" id="terminos" name="terminos">
                    <label for="terminos">ACEPTO LOS <a href="http://www.hipotecarioseguros.com.ar/terminos-y-condiciones/#entienda" target="_blank" style="color:#333">términos y condiciones</a></label>
                  </div>
                </div>   
              </div>
			  <p class="lead">
				<!------------------------------------------------------  Campos ocultos ------------->
				<!-- Origen, no tocar este campo-->
				<input type = "hidden" id="LeadSource" name="LeadSource" value="En-tienda"/>

				<!-- Codigo de Ramo -->
				<input type="hidden" id="00N1N00000P57n0" name="00N1N00000P57n0" value="002"/>
				<!--Descripcion de Ramo -->
				<input type="hidden" id="00N1N00000P57n4" name="00N1N00000P57n4" value="Hogar"/>

				<!-- Codigo de Producto -->
				<input type="hidden" id="00N1N00000P57mz" name="00N1N00000P57mz" value="011"/>
				<!--Descripcion de Producto -->
				<input type="hidden" id="00N1N00000P57n3" name="00N1N00000P57n3" value="Ejemplo"/>

				<!-- Codigo de Plan -->
				<input type="hidden" id="00N1N00000P57my" name="00N1N00000P57my" value="<?php echo $_SESSION['Plan']->get_Type(); ?>"/>
				<!--Descripcion de Plan -->
				<input type="hidden" id="00N1N00000P57n2" name="00N1N00000P57n2" value="Ejemplo"/>

				<!--Premio -->
				<input type="hidden" id="00N1N00000P57n9" name="00N1N00000P57n9" value="123"/>		  
				<input type="submit" class="btn btn-lg btn-orange" name="submit" value="Enviar">
			  </p>
			  <input type="hidden" name="formtype" value="0">

              <input type="hidden" name="00N1N00000P66md" id="00N1N00000P66md" value="<?php echo $_REQUEST["utm_source"]; ?>">
              <input type="hidden" name="00N1N00000P66mc" id="00N1N00000P66mc" value="<?php echo $_REQUEST["utm_medium"]; ?>">
              <input type="hidden" name="00N1N00000P66mb" id="00N1N00000P66mb" value="<?php echo $_REQUEST["utm_campaign"]; ?>">

            </form>
            <p class="color-black" id="Message"></p>
          </main>

        </div>

      </div>

    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="js/jquery-1.11.2.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.mask.js"></script>
	<script>
		function letterOnly(e) {
			key = e.keyCode || e.which;
			keyMthod = String.fromCharCode(key).toString();
			letter = " áéíóúabcdefghijklmnñopqrstuvwxyzÁÉÍÓÚABCDEFGHIJKLMNÑOPQRSTUVWXYZ";
			if(letter.indexOf(keyMthod) == -1){
				return false;
			  }
		}
		
		function disableBack(){
			window.location.hash="no-back-button";
			window.location.hash="Again-No-back-button" //chrome
			window.onhashchange=function(){window.location.hash="no-back-button";}
		}			
		
		function numberOnly(evt){
		 if(window.event){
		  keynum = evt.keyCode;
		 }
		 else{
		  keynum = evt.which; 
		 } 
		 if((keynum > 47 && keynum < 58) || keynum == 8 || keynum == 13 || keynum == 6 ){
		  return true;
		 }
		 else{
		  return false;
		 }
		}
		
		function ValidateForm()
		{			
			var termsConditions = document.getElementById("terminos").checked;
			if(!termsConditions)
			{
				document.getElementById("Message").innerHTML = "Debe aceptar los terminos y condiciones antes de continuar";	
				return false;
			}
					
			return true;
		}
	</script>      
  </body>
</html>
