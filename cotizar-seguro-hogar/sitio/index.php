<?php

session_start();

if(isset($_REQUEST["utm_source"]))   { $_SESSION["utm_source"]   = $_REQUEST["utm_source"];   } else { $_SESSION["utm_source"]   = ""; }
if(isset($_REQUEST["utm_medium"]))   { $_SESSION["utm_medium"]   = $_REQUEST["utm_medium"];   } else { $_SESSION["utm_medium"]   = ""; }
if(isset($_REQUEST["utm_campaign"])) { $_SESSION["utm_campaign"] = $_REQUEST["utm_campaign"]; } else { $_SESSION["utm_campaign"] = ""; }

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
  
  <script>
  
		var getUrlParameter = function getUrlParameter(sParam) {
			var sPageURL = decodeURIComponent(window.location.search.substring(1)), sURLVariables = sPageURL.split('&'), sParameterName, i;
			for (i = 0; i < sURLVariables.length; i++) {
				sParameterName = sURLVariables[i].split('=');
				if (sParameterName[0] === sParam) {
					return sParameterName[1] === undefined ? true : sParameterName[1];
					}
				}
		};
		var utm_source = getUrlParameter('utm_source');
		var utm_medium = getUrlParameter('utm_medium');
		var utm_campaign = getUrlParameter('utm_campaign');
  
  
		localStorage.setItem('utm_source', utm_source);
		localStorage.setItem('utm_medium', utm_medium);
		localStorage.setItem('utm_campaign', utm_campaign);
		
		
  </script>

    <div class="site-wrapper background-blue-green">

      <div class="site-wrapper-inner">

        <div >

          <header class="masthead clearfix">
            <div class="inner">
              <h3 class="masthead-brand"><img src="images/logo-white.png"></h3>
              <!-- <nav class="nav nav-masthead"> -->
                <!-- <a class="nav-link" href="https://www.facebook.com/hipotecario.seguros/" target="_blank"><i class="fa fa-facebook"></i></a> -->
                <!-- <a class="nav-link" href="https://twitter.com/hipotecariosegu" target="_blank"><i class="fa fa-twitter"></i></a> -->
                <!-- <a class="nav-link" href="#">Contact</a> -->
              </nav>
            </div>
          </header>

          <main role="main" class="inner cover">
            <h1 class="cover-heading" style="margin-top: -40px"><img src="images/en-tienda.png"></h1>
            <p class="lead-slogan"><span>Olvidate de todo. Confiá en nosotros que vas a estar protegido.</span> </p>
            <p class="lead">
              <a href="pregunta-1.php" id="next" class="btn btn-dark-blue">Quiero despreocuparme</a>
              
            </p>
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
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="js/jquery.ui.touch-punch.min.js"></script>
    <script language="javascript" type="text/javascript" src="js/preguntas/index.js"></script>

  </body>
</html>