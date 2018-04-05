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

    <div class="site-wrapper background-blue-green">

      <div class="site-wrapper-inner">

        <div >

          <header class="masthead clearfix">
            <div class="inner">
              <h3 class="masthead-brand"><a href="index.php"><img src="images/logo-white.png"></a></h3>
              <nav class="nav nav-masthead question-pagination">
				  <?php
					include "cl_Business/Values.php";
					echo '<div class="current">'.NumberQuestionsOnArray('pregunta-6').'</div>';
					echo '<div class="total">'.$MaxQuestions.'</div>';
				  ?>
              </nav>
            </div>
          </header>

          <main role="main" class="inner question-wide">
            
            <div class="answer-section">
              <div class="slider-section">
                <div class="question">
                  <h2 class="question-title"><?php echo get_NameQuestion('6'); ?></h2>

                  <div class="slider"></div>
                  <div class="slider-max-min">
                    <div class="min">Son sólo un adorno excéntrico.</div>
                    <div class="max">Incalculable.<br> Son habitantes privilegiados<br>de la casa.</div>
                  </div>
                </div>
                <div class="slider-images upper">
                  <img src="images/Asset30-7.png" id="307">
                  <img src="images/Asset30-6.png" id="306">
                  <img src="images/Asset30-5.png" id="305">
                  <img src="images/Asset30-4.png" id="304">
                  <img src="images/Asset30-3.png" id="303">
                  <img src="images/Asset30-2.png" id="302">
                  <img src="images/Asset30-1.png" id="301">
                  <img src="images/Asset30-0.png" id="300">
                  <img src="images/Asset28-7.png" id="287">
                  <img src="images/Asset28-6.png" id="286">
                  <img src="images/Asset28-5.png" id="285">
                  <img src="images/Asset28-4.png" id="284">
                  <img src="images/Asset28-3.png" id="283">
                  <img src="images/Asset28-2.png" id="282">
                  <img src="images/Asset28-1.png" id="281">
                  <img src="images/Asset29-2.png" id="292">
                  <img src="images/Asset29-1.png" id="291">
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
    <script src="js/jquery-ui.js"></script>
    <script src="js/jquery.ui.touch-punch.min.js"></script> 
	<script language="javascript" type="text/javascript" src="js/preguntas/call_receive_question.js"></script>
    <script language="javascript" type="text/javascript" src="js/preguntas/pregunta-6.js"></script>
    
    <script type="text/javascript">
      $( function() {
        localStorage.setItem("Value", 50);
        $('.slider-images img').hide();
        $('#292').show();

        $( ".slider" ).slider({
          value: 50,
          slide: function( event, ui ) {
            if( ui.value >= 91){
              $('.slider-images img').hide();
              $('#287').show();
            } else if ( ui.value >= 81 && ui.value <= 90 ) {
              $('.slider-images img').hide();
              $('#286').show();
            }
            else if ( ui.value >= 75 && ui.value <= 80 ) {
              $('.slider-images img').hide();
              $('#285').show();
            } else if ( ui.value >= 66 && ui.value <= 70 ) {
              $('.slider-images img').hide();
              $('#284').show();
            }
            else if ( ui.value >= 61 && ui.value <= 65 ) {
              $('.slider-images img').hide();
              $('#283').show();
            } else if ( ui.value >= 56 && ui.value <= 60 ) {
              $('.slider-images img').hide();
              $('#282').show();
            }
            else if ( ui.value >= 51 && ui.value <= 55 ) {
              $('.slider-images img').hide();
              $('#281').show();
            }
            else if ( ui.value >= 46 && ui.value <= 50 ) {
              $('.slider-images img').hide();
              $('#292').show();
            } else if ( ui.value >= 41 && ui.value <= 45 ) {
              $('.slider-images img').hide();
              $('#291').show();
            }
            else if ( ui.value >= 36 && ui.value <= 40 ) {
              $('.slider-images img').hide();
              $('#300').show();
            }
            else if ( ui.value >= 31 && ui.value <= 35 ) {
              $('.slider-images img').hide();
              $('#301').show();
            }
            else if ( ui.value >= 26 && ui.value <= 30 ) {
              $('.slider-images img').hide();
              $('#302').show();
            }
            else if ( ui.value >= 20 && ui.value <= 25 ) {
              $('.slider-images img').hide();
              $('#303').show();
            }
            else if ( ui.value >= 16 && ui.value <= 19 ) {
              $('.slider-images img').hide();
              $('#304').show();
            }
            else if ( ui.value >= 11 && ui.value <= 15 ) {
              $('.slider-images img').hide();
              $('#305').show();
            }
            else if ( ui.value >= 6 && ui.value <= 10 ) {
              $('.slider-images img').hide();
              $('#306').show();
            }
            else if ( ui.value <= 5 ){
              $('.slider-images img').hide();
              $('#307').show();

            }
            
            localStorage.setItem("Value", ui.value);
          }
        });
      } );
    </script>
  </body>
</html>