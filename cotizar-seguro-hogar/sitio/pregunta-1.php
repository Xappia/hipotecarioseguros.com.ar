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
    <link href="css/animate.css" rel="stylesheet">
    <!-- Font Awesome -->
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

  </head>

  <body class="">

    <div class="site-wrapper background-orange-yellow">

      <div class="site-wrapper-inner">

        <div >

          <header class="masthead clearfix">
            <div class="inner">
              <h3 class="masthead-brand"><a href="index.php"><img src="images/logo-white.png"></a></h3>
              <nav class="nav nav-masthead question-pagination">
				  <?php
					include "cl_Business/Values.php";

					echo '<div class="current">01</div>';
					echo '<div class="total">'.$MaxQuestions.'</div>';
				  ?>  
              </nav>
            </div>
          </header>

          <main role="main" class="inner question-wide">
            <h2 class="question-title"><?php echo get_NameQuestion('1'); ?></h2>
              <div class="one-selection-special">

                <span>
                  <input type="radio" checked="true"  name="vivis" data-toggle='tooltip' data-placement='bottom' data-original-title="tooltip here" id="c1" value="solo" >
                  <label for="c1">
                    <div class="box min-190" >Solo
                      <div class="overlay">
                        <img src="images/solo.png" class="family-1">
                      </div>
                    </div>
                    <div class="subtitle-box">Solo</div>
                  </label>
                </span>

                <span>
                  <input type="radio"  name="vivis" data-toggle='tooltip' data-placement='bottom' data-original-title="tooltip here" id="c2" value="sola">
                  <label for="c2">
                    <div class="box min-190" >Sola
                        <div class="overlay">
                          <img src="images/sola.png" class="family-1">
                        </div>
                    </div>
                    <div class="subtitle-box">Sola</div>
                  </label>
                </span>

                <span>
                  <input type="radio"  name="vivis" data-toggle='tooltip' data-placement='bottom' data-original-title="tooltip here" id="c3" value="pareja">
                   <label for="c3">
                    <div class="box min-250" >En Pareja
                      <div class="overlay">
                        <img src="images/parejas.png" class="family-1">
                        <!-- <img src="images/pareja2.png" class="family-2"> -->
                      </div>
                    </div>
                    <div class="subtitle-box">En Pareja</div>
                  </label>
                </span>

                <span>
                  <input type="radio" name="vivis"  data-toggle='tooltip' data-placement='bottom' data-original-title="tooltip here" id="c4" value="familia">
                  <label for="c4"> 
                    <div class="box min-400" >En Familia
                      <div class="overlay family">
                        <img src="images/familias.png" class="family-1">
                        <!-- <img src="images/familia2.png" class="family-2"> -->
                        <!-- <img src="images/familia3.png" class="family-3"> -->
                        <!-- <img src="images/familia4.png" class="family-4"> -->
                      </div>
                    </div>
                    <div class="subtitle-box">En Familia</div>
                  </label>
                </span>
              </div> 
          </main>

          <footer class="mastfoot">
            <div class="">
            	<div class="question-navigation">
      					<a id="next" ><div class="btn-black">Continuar</div></a>
            	</div>
            </div>
          </footer>

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
	<script language="javascript" type="text/javascript" src="js/preguntas/call_receive_question.js"></script>
    <script language="javascript" type="text/javascript" src="js/preguntas/pregunta-1.js"></script>
    
  </body>
</html>