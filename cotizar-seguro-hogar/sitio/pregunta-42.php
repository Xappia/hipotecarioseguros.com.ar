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

    <div class="site-wrapper background-purple-pink">

      <div class="site-wrapper-inner">

        <div >

          <header class="masthead clearfix">
            <div class="inner">
              <h3 class="masthead-brand"><a href="index.php"><img src="images/logo-white.png"></a></h3>
              <nav class="nav nav-masthead question-pagination">
				  <?php
					include "cl_Business/Values.php";
					echo '<div class="current">'.NumberQuestionsOnArray('pregunta-42').'</div>';
					echo '<div class="total">'.$MaxQuestions.'</div>';
				  ?>
              </nav>
            </div>
          </header>

          <main role="main" class="inner question-wide">
            <h2 class="question-title"><?php echo get_NameQuestion('42'); ?>  </h2>
            <div class="answer-section">
              <div class="one-selection-horizontal">
                <form>
                  <ul>
                    <li>
                      <input type="radio" id="option-1" name="radiohorizontal" value="roturas" checked>
                        <label for="option-1">
                          <img src="images/Asset163.png">
                          <div class="check"><div class="inside"></div></div>
                          <span>Roturas de cristales.</span>
                        </label>
                    </li>
                    
                    <li>          
                      <input type="radio" id="option-2" name="radiohorizontal" value="corte">
                        <label for="option-2">
                            <img src="images/Asset164.png">
                            <div class="check"><div class="inside"></div></div>
                            <span>Corte y avería en instalaciones.</span>
                        </label>
                    </li>
                    <li>          
                      <input type="radio" id="option-3" name="radiohorizontal" value="tuberias">
                        <label for="option-3">
                            <img src="images/Asset165.png">
                            <div class="check"><div class="inside"></div></div>
                            <span>Daño en caños y tuberías.</span>
                        </label>
                    </li>
                  </ul>
                </form>

              </div>
            </div>
          </main>

          <footer class="mastfoot">
            <div class="">
            	<div class="question-navigation">
            		<a href="pregunta-41.php"><!--div class="btn-black"><img src="images/arrow-left.png"></div--></a>
      					<a href="index.php"><!--div class="btn-black"><img src="images/times.png"></div--></a>
      					<a id="next"><div class="btn-black">Continuar</div></a>
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
    <script language="javascript" type="text/javascript" src="js/preguntas/pregunta-42.js"></script>
    <script>

      $(document).ready(function () {
        var imagefile, image, animation, imagefile_prev;
        imagefile_prev = $('input:checkbox:first:checked').data('image');

        $('input:checkbox').click(function() {
          imagefile_prev = $(this).data('image');

          if($(this).val() === 'Nada'){
            $('input:checkbox').prop("checked", false);
            $(this).prop("checked", true);
            imagefile = $(this).data('image');
          } else {
            $('input:checkbox:last').prop("checked", false);
          }

          if($(this).is(':checked')){
            imagefile_prev = imagefile;
            imagefile = $(this).data('image');
          }else {
            imagefile = imagefile_prev;
          }
          
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