<?php
function statisticsIncrementQuestion($Question){
	
	$mysqli = open_conection();
	
	$query = "UPDATE `mquestion` SET `ntimes`= `ntimes` + 1 WHERE `question` = 'Pregunta ".$Question."'";
	
	$result = $mysqli->query($query);
	
	$mysqli->close();
}

function statisticsIncrementAnswer($Question,$Json){
	
	$mysqli = open_conection();
	
	$query = "SELECT `id`, `type` FROM `mquestion` WHERE `question` = 'Pregunta ".$Question."'"; //Buscar Id y Tipo de Pregunta
	
	$result = $mysqli->query($query);
	
	if ($result->num_rows > 0 && $result->num_rows < 2) {
		
		while($row = $result->fetch_assoc()) {
			
			switch ((int)$row["type"]) { 
				case 1: //Seleccion Unica
					$JsonAnswer = json_decode($Json, true); //Convertir el Json en Array
					
					$indexAnswer = array_search(1,$JsonAnswer,false);//Buscar la opcion de las respuestas que marco en el Json
					
					$indexAnswer = chr((int)str_replace("i","",$indexAnswer) + 96); //Convertirlo en Letra MINUSCULA
					
					$queryUpdate = "UPDATE `tscoring` SET `ntimes`= `ntimes` + 1 WHERE `idquestion` = ".$row["id"]." AND `optionquestion` = '".$indexAnswer."'";					
					
					$resultAnswer = $mysqli->query($queryUpdate);					
										
					break;
				case 2: //Selección multiple
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
							
					$queryUpdate = "UPDATE `tscoring` SET `ntimes`= `ntimes` + 1 WHERE `idquestion` = ".$row["id"]." AND `optionquestion` = '".$indexAnswer."'";					
					
					$resultAnswer = $mysqli->query($queryUpdate);					
							
					break;
				case 3: //Ordenamiento
					$JsonAnswer = json_decode($Json, true); //Convertir el Json en Array
					
					$indexAnswer = chr(end($JsonAnswer) + 96); //Convertirlo en Letra MINUSCULA
					
					$queryUpdate = "UPDATE `tscoring` SET `ntimes`= `ntimes` + 1 WHERE `idquestion` = ".$row["id"]." AND `optionquestion` = '".$indexAnswer."'";					
					
					$resultAnswer = $mysqli->query($queryUpdate);					
					
					break;
				case 4: //Valor único
					$JsonAnswer = json_decode($Json, true); //Convertir el Json en Array
					
					if($JsonAnswer["i1"] >= 50) //Convertirlo en Letra MINUSCULA
						$indexAnswer = "b";
					else
						$indexAnswer = "a";
					
					$queryUpdate = "UPDATE `tscoring` SET `ntimes`= `ntimes` + 1 WHERE `idquestion` = ".$row["id"]." AND `optionquestion` = '".$indexAnswer."'";					
					
					$resultAnswer = $mysqli->query($queryUpdate);						
					break;							
			}			
		}
	}				
	

	
	$mysqli->close();
}


?>