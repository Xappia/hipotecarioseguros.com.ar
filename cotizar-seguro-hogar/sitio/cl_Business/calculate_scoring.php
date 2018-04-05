<?php

	function calculate_scoring()
	{
		$_SESSION['Scoring'] = array("RCC"=>0, "RCM"=>0, "RCB"=>0, "TREC"=>0, "TREM"=>0, "TREB"=>0);
		
		$mysqli = open_conection();
		
		foreach($_SESSION['lQuestion'] as $key => $value)
		{
			if((int)(str_replace("pregunta-","",$value->get_PagCall())) > 4)
			{
				$query = "SELECT `id`, `type` FROM `mquestion` WHERE `question` = 'Pregunta ".str_replace("pregunta-","",$value->get_PagCall())."'"; //Buscar Id y Tipo de Pregunta
				
				$result = $mysqli->query($query);
				
				if ($result->num_rows > 0 && $result->num_rows < 2) {
					while($row = $result->fetch_assoc()) {					
						
						$queryScoring = "SELECT `optionquestion`, `descriptionquestion`, `rccscore`, `rcmscore`, `rcbscore`, `trecscore`, `tremscore`, `trebscore` FROM `tscoring` WHERE `idquestion` = ".$row["id"];			
						
						$resultScoring = $mysqli->query($queryScoring);

						switch ((int)$row["type"]) { 
							case 1: //Seleccion Unica
								UniqueSelection($value->get_Answer(),$resultScoring);
								break;
							case 2: //Selección multiple
								MultipleChoice($value->get_Answer(),$resultScoring);
								break;
							case 3: //Ordenamiento
								Ordering($value->get_Answer(),$resultScoring);
								break;
							case 4: //Valor único
								UniqueValue($value->get_Answer(),$resultScoring);
								break;							
						}
					}
				}
			}
		}
	}
	
	function MultipleChoice($Json,$resultScoring){
		
		$ResultQuery = array();
		
		while($row = $resultScoring->fetch_assoc()) { //Convertir los Resultados en un Array
		
			array_push($ResultQuery, $row);
		}
		
		$JsonAnswer = json_decode($Json, true); //Convertir el Json en Array
		
		$NumAnswers = 0;
		
		foreach($JsonAnswer as $key => $value){ //Contar el Numero de Respuestas seleccionadas
			if($value == 1)
				$NumAnswers++;
		}
		
		$indexAnswer = "0";
		
		if($NumAnswers  >= 6)
			$indexAnswer = "a";
		else
			if($NumAnswers >= 2 && $NumAnswers <= 5)
				$indexAnswer = "b";
			else
				if($NumAnswers == 1)
					$indexAnswer = "c";
				
				
		foreach($ResultQuery as $key => $value)
		{
			if($ResultQuery[$key]["optionquestion"] == $indexAnswer)
			{
				$_SESSION['Scoring']["RCC"] = $_SESSION['Scoring']["RCC"] + $ResultQuery[$key]["rccscore"];
				$_SESSION['Scoring']["RCM"] = $_SESSION['Scoring']["RCM"] + $ResultQuery[$key]["rcmscore"];
				$_SESSION['Scoring']["RCB"] = $_SESSION['Scoring']["RCB"] + $ResultQuery[$key]["rcbscore"];
				$_SESSION['Scoring']["TREC"] = $_SESSION['Scoring']["TREC"] + $ResultQuery[$key]["trecscore"];
				$_SESSION['Scoring']["TREM"] = $_SESSION['Scoring']["TREM"] + $ResultQuery[$key]["tremscore"];
				$_SESSION['Scoring']["TREB"] = $_SESSION['Scoring']["TREB"] + $ResultQuery[$key]["trebscore"];
			}
		}
	}
	
	function UniqueValue($Json,$resultScoring) //Funcion para Valir Unico
	{
		$ResultQuery = array();
		
		while($row = $resultScoring->fetch_assoc()) { //Convertir los Resultados en un Array
		
			array_push($ResultQuery, $row);
		}
		
		$JsonAnswer = json_decode($Json, true); //Convertir el Json en Array
		
		if($JsonAnswer["i1"] >= 50) //Convertirlo en Letra MINUSCULA
			$indexAnswer = "b";
		else
			$JsonAnswer = "a";
		
		foreach($ResultQuery as $key => $value)
		{
			if($ResultQuery[$key]["optionquestion"] == $indexAnswer)
			{
				$_SESSION['Scoring']["RCC"] = $_SESSION['Scoring']["RCC"] + $ResultQuery[$key]["rccscore"];
				$_SESSION['Scoring']["RCM"] = $_SESSION['Scoring']["RCM"] + $ResultQuery[$key]["rcmscore"];
				$_SESSION['Scoring']["RCB"] = $_SESSION['Scoring']["RCB"] + $ResultQuery[$key]["rcbscore"];
				$_SESSION['Scoring']["TREC"] = $_SESSION['Scoring']["TREC"] + $ResultQuery[$key]["trecscore"];
				$_SESSION['Scoring']["TREM"] = $_SESSION['Scoring']["TREM"] + $ResultQuery[$key]["tremscore"];
				$_SESSION['Scoring']["TREB"] = $_SESSION['Scoring']["TREB"] + $ResultQuery[$key]["trebscore"];
			}
		}		
		
	}
	
	function Ordering($Json,$resultScoring){
		
		$ResultQuery = array();
		
		while($row = $resultScoring->fetch_assoc()) { //Convertir los Resultados en un Array
		
			array_push($ResultQuery, $row);
		}
		
		$JsonAnswer = json_decode($Json, true); //Convertir el Json en Array
		
		$indexAnswer = chr(end($JsonAnswer) + 96); //Convertirlo en Letra MINUSCULA
		
		foreach($ResultQuery as $key => $value)
		{
			if($ResultQuery[$key]["optionquestion"] == $indexAnswer)
			{
				$_SESSION['Scoring']["RCC"] = $_SESSION['Scoring']["RCC"] + $ResultQuery[$key]["rccscore"];
				$_SESSION['Scoring']["RCM"] = $_SESSION['Scoring']["RCM"] + $ResultQuery[$key]["rcmscore"];
				$_SESSION['Scoring']["RCB"] = $_SESSION['Scoring']["RCB"] + $ResultQuery[$key]["rcbscore"];
				$_SESSION['Scoring']["TREC"] = $_SESSION['Scoring']["TREC"] + $ResultQuery[$key]["trecscore"];
				$_SESSION['Scoring']["TREM"] = $_SESSION['Scoring']["TREM"] + $ResultQuery[$key]["tremscore"];
				$_SESSION['Scoring']["TREB"] = $_SESSION['Scoring']["TREB"] + $ResultQuery[$key]["trebscore"];
			}
		}		
	}	
	
	function UniqueSelection($Json,$resultScoring){
		
		$ResultQuery = array();
		
		while($row = $resultScoring->fetch_assoc()) { //Convertir los Resultados en un Array
		
			array_push($ResultQuery, $row);
		}			
		
		$JsonAnswer = json_decode($Json, true); //Convertir el Json en Array
		
		$indexAnswer = array_search(1,$JsonAnswer,false);//Buscar la opcion de las respuestas que marco en el Json
		
		$indexAnswer = chr((int)str_replace("i","",$indexAnswer) + 96); //Convertirlo en Letra MINUSCULA
		
		foreach($ResultQuery as $key => $value)
		{
			if($ResultQuery[$key]["optionquestion"] == $indexAnswer)
			{
				$_SESSION['Scoring']["RCC"] = $_SESSION['Scoring']["RCC"] + $ResultQuery[$key]["rccscore"];
				$_SESSION['Scoring']["RCM"] = $_SESSION['Scoring']["RCM"] + $ResultQuery[$key]["rcmscore"];
				$_SESSION['Scoring']["RCB"] = $_SESSION['Scoring']["RCB"] + $ResultQuery[$key]["rcbscore"];
				$_SESSION['Scoring']["TREC"] = $_SESSION['Scoring']["TREC"] + $ResultQuery[$key]["trecscore"];
				$_SESSION['Scoring']["TREM"] = $_SESSION['Scoring']["TREM"] + $ResultQuery[$key]["tremscore"];
				$_SESSION['Scoring']["TREB"] = $_SESSION['Scoring']["TREB"] + $ResultQuery[$key]["trebscore"];
			}
		}
	}
?>