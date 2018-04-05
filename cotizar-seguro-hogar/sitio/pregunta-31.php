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

					echo '<div class="current">'.NumberQuestionsOnArray('pregunta-31').'</div>';

					echo '<div class="total">'.$MaxQuestions.'</div>';

				  ?>

              </nav>

            </div>

          </header>



          <main role="main" class="inner question-wide">

            

            <div class="answer-section">

              <div class="slider-section">

                <div class="question">

                  <h2 class="question-title"><?php echo get_NameQuestion('31'); ?></h2>



                  <div class="slider"></div>

                  <div class="slider-max-min">

                    <div class="min">Soy más amigo/a de la tostadora.</div>

                    <div class="max">Es mi aliado secreto.</div>

                  </div>

                </div>

                 <div class="slider-images">
                  <img src="images/Asset105-1.png" id="image-1051">
                  <img src="images/Asset105-2.png" id="image-1052">
                  <img src="images/Asset105-3.png" id="image-1053">
                  <img src="images/Asset103.png" id="image-103">
                  <img src="images/Asset104.png" id="image-104">
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

    <script language="javascript" type="text/javascript" src="js/preguntas/pregunta-31.js"></script>

    

   <script type="text/javascript">
      $( function() {
        $('.slider-images img').hide();
        $('#image-103').show();
         localStorage.setItem("Value", 50);
        $( ".slider" ).slider({
          value: 50,
          slide: function( event, ui ) {
            if( ui.value >= 83){
              $('.slider-images img').hide();
              $('#image-1053').show();

            } else if ( ui.value >= 64 && ui.value <= 82 ) {
              $('.slider-images img').hide();
              $('#image-1052').show();
            } 
            else if ( ui.value >= 52 && ui.value <= 62 ) {
              $('.slider-images img').hide();
              $('#image-1051').show();
            } 
            else if ( ui.value >= 20 && ui.value <= 51 ) {
              $('.slider-images img').hide();
              $('#image-103').show();
            } 
            else if ( ui.value <= 19 ){
              $('.slider-images img').hide();
              $('#image-104').show();
            }
             localStorage.setItem("Value", ui.value);
          }
        });
      } );
    </script>
  </body>

</html>