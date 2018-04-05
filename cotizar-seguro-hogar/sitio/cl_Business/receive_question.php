<?php

require_once $_SERVER["DOCUMENT_ROOT"] . "/cotizar-seguro-hogar/sitio/cl_Business/class_lib.php";
require_once $_SERVER["DOCUMENT_ROOT"] . "/cotizar-seguro-hogar/sitio/cl_Business/Values.php";
require_once $_SERVER["DOCUMENT_ROOT"] . "/cotizar-seguro-hogar/sitio/cl_Business/conn/Connection.php";
require_once $_SERVER["DOCUMENT_ROOT"] . "/cotizar-seguro-hogar/sitio/cl_Business/calculate_scoring.php";
require_once $_SERVER["DOCUMENT_ROOT"] . "/cotizar-seguro-hogar/sitio/cl_Business/statistics.php";
require_once $_SERVER["DOCUMENT_ROOT"] . "/cotizar-seguro-hogar/sitio/cl_Business/plan/choose_plan.php";

$numMaxQuestions = $MaxQuestions;
try{

	if(isset($_POST["PagCall"]))
	{
	  if($_POST["PagCall"] == "pregunta-1"){
		$_SESSION['lQuestion'] = array(); //Inicializar el Areglo de Sesion			  
	  }
	}
				
	$lQuestion = $_SESSION['lQuestion']; //Obtiene la lista de reguntas respondidas
	
	$nQuestion = count($lQuestion); //Obtiene el numero de preguntas cargadas en sesion
	
	//*************************Llenar valores de la pregunta***********************************
	$ValueQuestion = new Question(); //Declaracion objeto que contendra los valores de respuesta de la pregunta
	
	if(isset($_POST["Answer"]))
	{
	  $ValueQuestion->set_Answer($_POST["Answer"]); //Respuesta del Usuario
	}
	
	if(isset($_POST["PagCall"]))
	{
	  $ValueQuestion->set_PagCall($_POST["PagCall"]); //Pagina Que Llama
	}
	
	if(isset($_POST["OptionalParameter"]))
	{
	  $ValueQuestion->set_OptionalArg($_POST["OptionalParameter"]); //Parametro opcional para Scoring
	}	
	
	switch ($nQuestion) { //Se valida si es una de las primeras 4 preguntas elementales
		case 0:
			$ValueQuestion->set_DQuestion("Live");
			break;
		case 1:
			$ValueQuestion->set_DQuestion("Age");
			break;
		case 2:
			$ValueQuestion->set_DQuestion("LivingPlace");
			break;
		case 3:
			$ValueQuestion->set_DQuestion("Worry");
			break;			
		default:
			$ValueQuestion->set_DQuestion("Additional Question");
			
	}	
	//*************************Llenar valores de la pregunta***********************************
	
	
	array_push($lQuestion, $ValueQuestion); //Agregar Pregunta al Array
	
	$_SESSION['lQuestion'] = $lQuestion; //Guardar en Sesion
	
	$nQuestion = count($lQuestion);
	
	statisticsIncrementQuestion(str_replace("pregunta-","",$ValueQuestion->get_PagCall())); //Guardar pregunta en estadisticas
	statisticsIncrementAnswer(str_replace("pregunta-","",$ValueQuestion->get_PagCall()),$ValueQuestion->get_Answer());
	
	if($nQuestion < 4)//Preguntas ibligatorias
	{		
		$NextQuestion = ++$nQuestion;
		
		if($NextQuestion == 2) //Si la pregunta es la 2, validar si es hombre o mujer
		{
			if($_SESSION['lQuestion'][0]->get_OptionalArg() == "SOLO")
				$NextQuestion = "2-1";
				else if($_SESSION['lQuestion'][0]->get_OptionalArg() == "SOLA")
						$NextQuestion = "2-2";
					else
						$NextQuestion = "2";
						
		}
	}
	else
	{
		if($nQuestion == 4)//Generar las preguntas aleatorias al usuario
		{
			//$_SESSION['RandomQuestions'] = array(11,13,8);
			get_RandomQuestions($MaxQuestions);						
		}
		
		if($nQuestion < $MaxQuestions)
		{
			$NextQuestion = $_SESSION['RandomQuestions'][(count($_SESSION['lQuestion']) - 4)];
		}
			
		
		// $NextQuestion = rand(5,$MaxQuestionsSystem ); //Siguiente Pregunta
	
		// $continuar = false;	
		// do{						
			// foreach($_SESSION['lQuestion'] as $key=>$value)
			// {
				// $parts = explode("-",$value->get_PagCall());
				// if($NextQuestion == $parts[1])//Si la pregunta ya se hizo se vuelve a calcular la siguiente pregunta
				// {
					// $continue = true;
					// $NextQuestion = rand(5,$MaxQuestionsSystem ); //Siguiente Pregunta si esta repetida
					// break;
				// }
				// else
				// {
					// if($NextQuestion == "21")//Si la pregunta es 21 valida que la pregunta 3 sea cierta
					// {
						// $AnswerQ3 = json_decode($_SESSION['lQuestion'][2]->get_Answer(), TRUE);
						// if($AnswerQ3["i1"] != 1)//Respondio Casa
						// {
							// $continue = true;
							// $NextQuestion = rand(5,$MaxQuestionsSystem ); //Siguiente Pregunta
							// break;							
						// }
					// }
				// }
			// }			
		// }while($continuar);
	}		

	if($nQuestion < $MaxQuestions)
	{
		echo "pregunta-".$NextQuestion;
	}
	else //plan
	{
		calculate_scoring();
		save_questions();
		choose_plan();
		echo "plan";
	}
		
}
catch(Exception $e) {
  echo 'Message error: ' .$e->getMessage();
}

//Guardar las respuestas a las preguntas del usuario tstadistic
function save_questions(){
	
	$mysqli = open_conection();
	
	$json = get_jsonCompleteQuestions();
	
	$query = "INSERT INTO `tstatistic` (`jsonscore`, `answerdate`) VALUES ('".$json."', CURDATE())";
	$mysqli->query($query);
	
	$mysqli->close();
	
	$_SESSION['jsonCompleteQuestions'] = $json;
}

//Devuelve el Json de todas las preguntas y respuestas
function get_jsonCompleteQuestions(){
	$json = "{";
	
	foreach($_SESSION['lQuestion'] as $key=>$value){
		$json .= '"p'.str_replace("pregunta-","",$value->get_PagCall()).'":'.$value->get_Answer().',';
		}
		
		$json = str_replace(",}","}", $json .= "}");
				
	return $json;
}

//Genera las Preguntas Aleatorias del Usuario
function get_RandomQuestions($MaxQuestions)
{

	switch ($_SESSION['lQuestion'][3]->get_OptionalArg()) { 
		case 'ROBO':
			$Category = 2;
			break;
		case 'ELECTRODOMESTICOS':
			$Category = 3;
			break;			
	}
	
	$_SESSION['RandomQuestions'] = array(); //Declarar Arreglo de Preguntas Aleatorias
	
	$ResultQuery = array(); //Guardara el resultado de la busqueda
	
	$QuestionsDiscarded = array(); //Lista de preguntas descartadas
	
	$mysqli = open_conection();
	
	$query = "SELECT REPLACE(`question`,'Pregunta ','') AS `question`, `dependentquestion`, `dependentanswer`, `category` FROM `mquestion` WHERE `category` in (1,".$Category.")";
	
	$result = $mysqli->query($query);
	
	if ($result->num_rows > 0) {
		
		while($row = $result->fetch_assoc()) { //Guardar resultados en un Array
			array_push($ResultQuery, $row);
		}
		
		//Iniciar proceso de seleccion de preguntas
		do{
			$NextQuestion = rand(0,(count($ResultQuery) - 1));	
									
			$index = array_search($NextQuestion,$QuestionsDiscarded,false); //Buscar elemento en la Lista
			
			if(!($index !== false))//Sino existe el elemento en la lista continuar
			{				
				$Question = $ResultQuery[$NextQuestion];//Obtiene la pregunta del resultado
									
				if((int)$Question["dependentquestion"] == 0) //Pregunta NO dependiente
				{
					array_push($QuestionsDiscarded, $NextQuestion); //Añadir al arreglo de preguntas analizadas
					array_push($_SESSION['RandomQuestions'], $Question["question"]); //Añadir al arreglo de preguntas aleatorias del usuario
				}
				else //Pregunta Dependiente
				{
					if($_SESSION['lQuestion'][$Question["dependentquestion"]]->get_OptionalArg() == $Question["dependentanswer"]) //Validar si la respuesta a la pregunta dependiente coincide
					{
						array_push($QuestionsDiscarded, $NextQuestion); //Añadir al arreglo de preguntas analizadas
						array_push($_SESSION['RandomQuestions'], $Question["question"]); //Añadir al arreglo de preguntas aleatorias del usuario						
					}
				}							
			}
		}while((count($_SESSION['RandomQuestions']) + 4) < (int)$MaxQuestions);		
	}
	
	$mysqli->close();
}

?>