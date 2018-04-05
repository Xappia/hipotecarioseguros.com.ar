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
        <h4 class="color-black uppercase mb-20">te garantizamos las siguientes coberturas</h4>
        <div class="row mw-15">
          <div class="col-lg-6 col-md-6 col-xs-12">
            <table class="table">
              <tr>
                <td><?php if(1 <= count($_SESSION['CoveragePlan'])) echo $_SESSION['CoveragePlan'][0]["coverage"]; ?></td>
                <td><span><?php if(1 <= count($_SESSION['CoveragePlan'])) echo  '$'.number_format($_SESSION['CoveragePlan'][0]["amount"],0,",","."); ?></span></td>
              </tr>
              <tr>
                <td><?php if(2 <= count($_SESSION['CoveragePlan'])) echo $_SESSION['CoveragePlan'][1]["coverage"]; ?></td>
                <td><span><?php if(2 <= count($_SESSION['CoveragePlan'])) echo  '$'.number_format($_SESSION['CoveragePlan'][1]["amount"],0,",","."); ?></span></td>
              </tr>
              <tr>
                <td><?php if(3 <= count($_SESSION['CoveragePlan'])) echo $_SESSION['CoveragePlan'][2]["coverage"]; ?></td>
                <td><span><?php if(3 <= count($_SESSION['CoveragePlan'])) echo  '$'.number_format($_SESSION['CoveragePlan'][2]["amount"],0,",","."); ?></span></td>
              </tr>
              <tr>
                <td><?php if(4 <= count($_SESSION['CoveragePlan'])) echo $_SESSION['CoveragePlan'][3]["coverage"]; ?></td>
                <td><span><?php if(4 <= count($_SESSION['CoveragePlan'])) echo  '$'.number_format($_SESSION['CoveragePlan'][3]["amount"],0,",","."); ?></span></td>
              </tr>
              <tr>
                <td><?php if(5 <= count($_SESSION['CoveragePlan'])) echo $_SESSION['CoveragePlan'][4]["coverage"]; ?></td>
                <td><span><?php if(5 <= count($_SESSION['CoveragePlan'])) echo  '$'.number_format($_SESSION['CoveragePlan'][4]["amount"],0,",","."); ?></span></td>
              </tr>
            </table>
          </div>
          <div class="col-lg-6 col-md-6 col-xs-12">
            <table class="table">
              <tr>
                <td><?php if(6 <= count($_SESSION['CoveragePlan'])) echo $_SESSION['CoveragePlan'][5]["coverage"]; ?></td>
                <td><span><?php if(6 <= count($_SESSION['CoveragePlan'])) echo  '$'.number_format($_SESSION['CoveragePlan'][5]["amount"],0,",","."); ?></span></td>
              </tr>
              <tr>
                <td><?php if(7 <= count($_SESSION['CoveragePlan'])) echo $_SESSION['CoveragePlan'][6]["coverage"]; ?></td>
                <td><span><?php if(7 <= count($_SESSION['CoveragePlan'])) echo  '$'.number_format($_SESSION['CoveragePlan'][6]["amount"],0,",","."); ?></span></td>
              </tr>
              <tr>
                <td><?php if(8 <= count($_SESSION['CoveragePlan'])) echo $_SESSION['CoveragePlan'][7]["coverage"]; ?></td>
                <td><span><?php if(8 <= count($_SESSION['CoveragePlan'])) echo  '$'.number_format($_SESSION['CoveragePlan'][7]["amount"],0,",","."); ?></span></td>
              </tr>
              <tr>
                <td><?php if(9 <= count($_SESSION['CoveragePlan'])) echo $_SESSION['CoveragePlan'][8]["coverage"]; ?></td>
                <td><span><?php if(9 <= count($_SESSION['CoveragePlan'])) echo  '$'.number_format($_SESSION['CoveragePlan'][8]["amount"],0,",","."); ?></span></td>
              </tr>
              <tr>
                <td><?php if(10 <= count($_SESSION['CoveragePlan'])) echo $_SESSION['CoveragePlan'][9]["coverage"]; ?></td>
                <td><span><?php if(10 <= count($_SESSION['CoveragePlan'])) echo  '$'.number_format($_SESSION['CoveragePlan'][9]["amount"],0,",","."); ?></span></td>
              </tr>
            </table>
            
          </div>
        </div>
        <p class="lead mh-15">
          <a href="pregunta-1.php" class="btn btn-dark-brown">Volver a cotizar </a>
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
