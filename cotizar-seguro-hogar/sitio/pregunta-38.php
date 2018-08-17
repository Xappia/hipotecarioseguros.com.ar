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
      <div class="site-wrapper background-orange-yellow">
         <div class="site-wrapper-inner">
            <div >
               <header class="masthead clearfix">
                  <div class="inner">
                     <h3 class="masthead-brand"><a href="index.php"><img src="images/logo-white.png"></a></h3>
                     <nav class="nav nav-masthead question-pagination">
				  <?php
					include "cl_Business/Values.php";
					echo '<div class="current">'.NumberQuestionsOnArray('pregunta-38').'</div>';
					echo '<div class="total">'.$MaxQuestions.'</div>';
				  ?>
                     </nav>
                  </div>
               </header>
               <main role="main" class="inner question-wide">
                  <h2 class="question-title" style="margin-bottom: 5px"><?php echo get_NameQuestion('38'); ?></h2>
                  <div class="answer-section">
                     <div class="buttons" style="height: 30px">
                        <a href="#" class="btn" id="mark-all"><i class="fa fa-plus-circle"></i> Todos</a>
                        <a href="#" class="btn" id="mark-none"><i class="fa fa-times-circle"></i> Ninguno</a>
                     </div>
                     <form class="form">
                        <div class="row justify-content-lg-center mh-30 mh-30-30">
                          <div class="multiple-selection wide">
                              <div>
                                 <input type="checkbox" id="c1">
                                 <label for="c1">
                                    <div>Lavarropas</div>
                                 </label>
                              </div>
                              <div>
                                 <input type="checkbox" id="c2">
                                 <label for="c2">
                                    <div>Heladera</div>
                                 </label>
                              </div>
                              <div>
                                 <input type="checkbox" id="c3">
                                 <label for="c3">
                                    <div>Termotanque</div>
                                 </label>
                              </div>
                          </div>
                          <div class="multiple-selection wide">
                              
                              <div>
                                 <input type="checkbox" id="c4">
                                 <label for="c4">
                                    <div>Calefón</div>
                                 </label>
                              </div>
                              <div>
                                 <input type="checkbox" id="c5">
                                 <label for="c5">
                                    <div>Frigobar</div>
                                 </label>
                              </div>
                             <div>
                                 <input type="checkbox" id="c6">
                                 <label for="c6">
                                    <div>Secarropa </div>
                                 </label>
                              </div>
                              <div>
                                 <input type="checkbox" id="c7">
                                 <label for="c7">
                                    <div>Lava vajillas</div>
                                 </label>
                              </div>
                          </div>
                          <div class="multiple-selection wide">    
                              <div>
                                 <input type="checkbox" id="c8">
                                 <label for="c8">
                                    <div>Aire Acondicionado </div>
                                 </label>
                              </div>
                              <div>
                                 <input type="checkbox" id="c9">
                                 <label for="c9">
                                    <div>Ventilador de pie </div>
                                 </label>
                              </div>
                              <div>
                                 <input type="checkbox" id="c10">
                                 <label for="c10">
                                    <div>Estufa </div>
                                 </label>
                              </div>
                          </div>
                          <div class="multiple-selection wide">   
                              <div>
                                 <input type="checkbox" id="c11">
                                 <label for="c11">
                                    <div>Caloventor </div>
                                 </label>
                              </div>
                              <div>
                                 <input type="checkbox" id="c12">
                                 <label for="c12">
                                    <div>Purificador </div>
                                 </label>
                              </div>
                              <div>
                                 <input type="checkbox" id="c13">
                                 <label for="c13">
                                    <div>Cocina</div>
                                 </label>
                              </div>
                              <div>
                                 <input type="checkbox" id="c14">
                                 <label for="c14">
                                    <div>Horno eléctrico</div>
                                 </label>
                              </div>
                           </div>
                           <div class="multiple-selection wide"> 
                               <div>
                                 <input type="checkbox" id="c15">
                                 <label for="c15">
                                    <div>Anafe eléctrico</div>
                                 </label>
                              </div>
                           </div>
                        </div>
                     </form>
                  </div>
               </main>
               <footer class="mastfoot">
                  <div class="">
                     <div class="question-navigation">
                        <a href="pregunta-37.php">
                           <!--div class="btn-black"><img src="images/arrow-left.png"></div-->
                        </a>
                        <a href="index.php">
                           <!--div class="btn-black"><img src="images/times.png"></div-->
                        </a>
                        <a id="next">
                           <div class="btn-black">Continuar</div>
                        </a>
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
      <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script> 
	  <script language="javascript" type="text/javascript" src="js/preguntas/call_receive_question.js"></script>
      <script language="javascript" type="text/javascript" src="js/preguntas/pregunta-38.js"></script>
      <script type="text/javascript">
         $(document).ready(function(){
             $('#mark-all').click(function(){
                 $('input:checkbox').prop("checked", true);
                 $(this).val('uncheck all');
             });
             $('#mark-none').click(function(){
                 $('input:checkbox').removeAttr('checked');
                 $('input:checkbox').prop("checked", false);
         
                 $(this).val('uncheck all');
             });
            
         });
      </script>
   </body>
</html>