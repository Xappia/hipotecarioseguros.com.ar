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
					echo '<div class="current">'.NumberQuestionsOnArray('pregunta-12').'</div>';
					echo '<div class="total">'.$MaxQuestions.'</div>';
				  ?>
              </nav>
            </div>
          </header>

          <main role="main" class="inner question-wide">
            
            <div class="answer-section">
              <div class="slider-section">
                <div class="question">
                  <h2 class="question-title"><?php echo get_NameQuestion('12'); ?></h2>

                  <div class="slider"></div>
                  <div class="slider-max-min">
                    <div class="min">Juntan polvo, como los vinilos de mis viejos. </div>
                    <div class="max">“Que sea Rock”</div>
                  </div>
                </div>
                <div class="slider-images upper">
                  <img src="images/Asset44-0.png" id="img-440">
                  <img src="images/Asset44-1.png" id="img-441">
                  <img src="images/Asset45.png" id="img-45">
                  <img src="images/Asset46-1.png" id="img-461">
                  <img src="images/Asset46-2.png" id="img-462">
                  <img src="images/Asset46-3.png" id="img-463">
                  <img src="images/Asset46-4.png" id="img-464">
                  <img src="images/Asset46-5.png" id="img-465">
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
	
	<!-- Facebook Pixel Code -->
	<script>
	  !function(f,b,e,v,n,t,s)
	  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
	  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
	  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
	  n.queue=[];t=b.createElement(e);t.async=!0;
	  t.src=v;s=b.getElementsByTagName(e)[0];
	  s.parentNode.insertBefore(t,s)}(window, document,'script',
	  'https://connect.facebook.net/en_US/fbevents.js');
	  fbq('init', '133952657253150');
	  fbq('track', 'PageView');
	</script>
	<noscript><img height="1" width="1" style="display:none"
	  src="https://www.facebook.com/tr?id=133952657253150&ev=PageView&noscript=1"
	/></noscript>
	<!-- End Facebook Pixel Code -->

	<!-- Facebook Pixel Code -->
	<script>
	  !function(f,b,e,v,n,t,s)
	  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
	  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
	  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
	  n.queue=[];t=b.createElement(e);t.async=!0;
	  t.src=v;s=b.getElementsByTagName(e)[0];
	  s.parentNode.insertBefore(t,s)}(window, document,'script',
	  'https://connect.facebook.net/en_US/fbevents.js');
	  fbq('init', '133952657253150');
	  fbq('track', 'PageView');
	  fbq('track', 'CompleteRegistration');
	</script>
	<noscript><img height="1" width="1" style="display:none"
					src="https://www.facebook.com/tr?id=133952657253150&ev=PageView&noscript=1"
	/></noscript>
	<!-- End Facebook Pixel Code -->

	<!-- Google Code para etiquetas de remarketing -->
	<!--------------------------------------------------
	Es posible que las etiquetas de remarketing todavía no estén asociadas a la información personal identificable o que estén en páginas relacionadas con las categorías delicadas. Para obtener más información e instrucciones sobre cómo configurar la etiqueta, consulte http://google.com/ads/remarketingsetup.
	--------------------------------------------------->
	<script type="text/javascript">
	/* <![CDATA[ */
		var google_conversion_id = 832097181;
		var google_custom_params = window.google_tag_params;
		var google_remarketing_only = true;
		/* ]]> */
	</script>
	<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
	</script>
	<noscript>
		<div style="display:inline;">
		<img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/832097181/?guid=ON&amp;script=0"/>
	</div>
	</noscript>

	


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
    <script language="javascript" type="text/javascript" src="js/preguntas/pregunta-12.js"></script>
    
    <script type="text/javascript">
      $( function() {
         $('.slider-images img').hide();
           $('#img-45').show();
        localStorage.setItem("Value", 50);
        $( ".slider" ).slider({
          value: 50,
          slide: function( event, ui ) {
            if( ui.value >= 91){
              $('.slider-images img').hide();
              $('#img-441').show();

            } else if ( ui.value >= 76 && ui.value <= 90 ) {
              $('.slider-images img').hide();
              $('#img-440').show();
            }
            else if ( ui.value >= 50 && ui.value <= 75 ) {
              $('.slider-images img').hide();
              $('#img-45').show();
            }
            else if ( ui.value >= 45 && ui.value <= 49 ) {
              $('.slider-images img').hide();
              $('#img-461').show();
            }
            else if ( ui.value >= 36 && ui.value <= 44 ) {
              $('.slider-images img').hide();
              $('#img-462').show();
            }
            else if ( ui.value >= 25 && ui.value <= 35 ) {
              $('.slider-images img').hide();
              $('#img-463').show();
            }
            else if ( ui.value >= 13 && ui.value <= 24 ) {
              $('.slider-images img').hide();
              $('#img-464').show();
            } else if ( ui.value <= 12 ){
              $('.slider-images img').hide();
              $('#img-465').show();
            }
            localStorage.setItem("Value", ui.value);
          }
        });
      } );
    </script>
  </body>
</html>