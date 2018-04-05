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
    <!-- Jquery UI CSS -->
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

  </head>

  <body class="">

    <div class="site-wrapper background-purple-pink">

      <div class="site-wrapper-inner">

        <div >

          <header class="masthead clearfix">
            <div class="inner">
              <h3 class="masthead-brand"><a href="index.php"><img src="images/logo-white.png"></a></h3>
              <nav class="nav nav-masthead question-pagination">
				  <?php
					include "cl_Business/Values.php";
					echo '<div class="current">'.NumberQuestionsOnArray('pregunta-22').'</div>';
					echo '<div class="total">'.$MaxQuestions.'</div>';
				  ?>
              </nav>
            </div>
          </header>

          <main role="main" class="inner question-wide">
            
            <div class="answer-section">
              <div class="slider-section">
                <div class="question">
                  <h2 class="question-title"><?php echo get_NameQuestion('22'); ?></h2>

                  <div class="slider"></div>
                  <div class="slider-max-min">
                    <div class="min">Ninguna.</div>
                    <div class="max">Sí, Muchas.</div>
                  </div>
                </div>
                <div class="slider-images">
                  <img src="images/Asset78.png" id="image-78">
                  <img src="images/Asset79.png" id="image-79">
                  <img src="images/Asset79-1.png" id="image-791">
                  <img src="images/Asset80.png" id="image-80">
                </div>
              </div>
            </div>
          </main>

          <footer class="mastfoot">
            <div class="row">
              <div class="col-12">    
              <div class="col-lg-6 button-left" >
            	<div class="question-navigation">
      					<a id="next"><div class="btn-black">Continuar</div></a>
            	</div>
              </div>
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
    <script language="javascript" type="text/javascript" src="js/preguntas/pregunta-22.js"></script>
    
    <script type="text/javascript">
      $( function() {
        $('.slider-images img').hide();
        $('#image-79').show();
        localStorage.setItem("Value", 50);
        $( ".slider" ).slider({
          value: 49,
          slide: function( event, ui ) {
            if( ui.value >= 75){
              $('.slider-images img').hide();
              $('#image-80').show();
            } 
            else if ( ui.value >= 50 && ui.value <= 75 ) {
              $('.slider-images img').hide();
              $('#image-791').show();
            }
            else if ( ui.value >= 26 && ui.value <= 49 ) {
              $('.slider-images img').hide();
              $('#image-79').show();
            }
            else if ( ui.value <= 25 ){
              $('.slider-images img').hide();
              $('#image-78').show();
            }
             localStorage.setItem("Value", ui.value);
          }
        });
      } );
    </script>
  </body>
</html>