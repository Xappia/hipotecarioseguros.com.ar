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
					echo '<div class="current">'.NumberQuestionsOnArray('pregunta-19').'</div>';
					echo '<div class="total">'.$MaxQuestions.'</div>';
				  ?>
              </nav>
            </div>
          </header>

          <main role="main" class="inner question-wide">
            <h2 class="question-title"><?php echo get_NameQuestion('19'); ?></h2>
            <div class="answer-section">
              <span class="sortable-order left"><img src="images/less.png"></span>
              <ul id="sortable" class="sortable">
                <li value="1">
                  <div><img src="images/Asset65.png"></div>
                  <span class="name">La licuadora</span>
                </li>
                <li value="2">
                  <div><img src="images/Asset66.png"></div>
                  <span class="name">El ventilador</span>
                </li>
                <li value="3">
                  <div><img src="images/Asset67.png"></div>
                  <span class="name">El hornito eléctrico</span>
                </li>
                <li value="4">
                  <div><img src="images/Asset68.png"></div>
                  <span class="name">La afeitadora “water resistance”</span>
                </li>
                <li value="5">
                  <div><img src="images/Asset69.png"></div>
                  <span class="name">La aspiradora de mano</span>
                </li>
              </ul>
              <span class="sortable-order right"><img src="images/more.png"></span>
            </div>
          </main>

          <footer class="mastfoot">
            <div class="">
            	<div class="question-navigation">
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
    <script src="js/sortable.js"></script> 
	<script language="javascript" type="text/javascript" src="js/preguntas/call_receive_question.js"></script>
    <script language="javascript" type="text/javascript" src="js/preguntas/pregunta-19.js"></script>
    <script>
      var list = document.getElementById("sortable");
      Sortable.create(list, {
        animation: 100,
      });
    </script>
  </body>
</html>