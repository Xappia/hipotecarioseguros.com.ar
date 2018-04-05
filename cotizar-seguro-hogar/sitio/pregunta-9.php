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

    <div class="site-wrapper background-light-green">

      <div class="site-wrapper-inner">

        <div >

          <header class="masthead clearfix">
            <div class="inner">
              <h3 class="masthead-brand"><a href="index.php"><img src="images/logo-white.png"></a></h3>
              <nav class="nav nav-masthead question-pagination">
				  <?php
					include "cl_Business/Values.php";
					echo '<div class="current">'.NumberQuestionsOnArray('pregunta-9').'</div>';
					echo '<div class="total">'.$MaxQuestions.'</div>';
				  ?>
              </nav>
            </div>
          </header>

          <main role="main" class="inner question-wide">
            <div class="answer-section">
              <div class="multiple-selection-vertical">
                <div class="questions">
                  <h2 class="question-title"><?php echo get_NameQuestion('9'); ?></h2>
                  <form>
                    <ul>
                      <li>
                        <input type="checkbox" id="option-1" name="checkboxvertical" data-image="Asset130.png" 
                              value="reposera" checked>
                        <label for="option-1">Su juguete “ruidoso” preferido.</label>
                        
                        <div class="check"></div>
                      </li>
                      
                      <li>
                        <input type="checkbox" id="option-2" name="checkboxvertical" data-image="Asset131.png"
                              value="chicos">
                        <label for="option-2">La mantita.</label>
                        
                        <div class="check"><div class="inside"></div></div>
                      </li>
                      
                      <li>
                        <input type="checkbox" id="option-3" name="checkboxvertical" data-image="Asset132.png"
                              value="Thor">
                        <label for="option-3">La cucha de "Thor".</label>
                        
                        <div class="check"><div class="inside"></div></div>
                      </li>

                      <li>
                        <input type="checkbox" id="option-4" name="checkboxvertical" data-image="Asset133.png"
                              value="Nada">
                        <label for="option-4">Ninguno de los anteriores.</label>
                        
                        <div class="check"><div class="inside"></div></div>
                      </li>
                      
                      <li>
                        <input type="checkbox" id="option-5" name="checkboxvertical" data-image="Asset134.png"
                              value="Todas">
                        <label for="option-5">Todo.</label>
                        
                        <div class="check"><div class="inside"></div></div>
                      </li>
                    </ul>
                  </form>
                </div>
                <div class="images">
                  <img src="images/Asset130.png" id="image-holder">
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
	<script language="javascript" type="text/javascript" src="js/preguntas/call_receive_question.js"></script>
    <script language="javascript" type="text/javascript" src="js/preguntas/pregunta-9.js"></script>
    <script>

      $(document).ready(function () {
        var imagefile, image, animation, imagefile_prev;
        imagefile_prev = $('input:checkbox:first:checked').data('image');

        $('input:checkbox').click(function() {
          imagefile_prev = $(this).data('image');
          $('input:checkbox').prop("checked", false);
            $(this).prop("checked", true);

            imagefile = $(this).data('image');
            image = $("#image-holder");
            image.fadeOut('fast', function () {
                image.attr('src', 'images/' + imagefile);
                image.fadeIn();
            });
      });
        
    });
    </script>
  </body>
</html>