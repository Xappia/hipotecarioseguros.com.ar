<?php

	require_once $_SERVER["DOCUMENT_ROOT"] . "/cotizar-seguro-hogar/sitio/cl_Business/class_lib.php";
	require_once $_SERVER["DOCUMENT_ROOT"] . "/cotizar-seguro-hogar/sitio/cl_Business/conn/Connection.php";

	/*
	require_once $_SERVER["DOCUMENT_ROOT"] . "/cl_Business/class_lib.php";
	require_once $_SERVER["DOCUMENT_ROOT"] . "/cl_Business/conn/Connection.php";	
	*/
	
	session_start();
	
	try
	{	
		$Name = "";
		$LastName = "";
		$Gender = "";
		$DNI = "";
		$phoneType = "";
		$CArea = "";
		$Phone = "";
		$Mail = "";
		$FRAN = "";
		$TD = "";
		$Mensaje = "";
		
		if(isset($_POST["formtype"]))
		{
		  $formtype = $_POST["formtype"];
		}
		
		if(isset($_POST["first_name"]))
		{
		  $Name = strtoupper($_POST["first_name"]);
		}
		
		if(isset($_POST["last_name"]))
		{
		  $LastName = strtoupper($_POST["last_name"]);
		}
		
		if(isset($_POST["00NW0000001ZLFk"]))
		{
		  $Gender = $_POST["00NW0000001ZLFk"];
		}		
		
		if(isset($_POST["00No000000Cm63X"]))
		{
		  $DNI = $_POST["00No000000Cm63X"];
		}

		if(isset($_POST["00NW0000001YdwL"]))
		{
		  $phoneType = $_POST["00NW0000001YdwL"]; 
		}
		
		if(isset($_POST["00NW0000001YdwE"]))
		{
		  $CArea = $_POST["00NW0000001YdwE"]; 
		}
		
		if(isset($_POST["phone"]))
		{
		  $Phone = $_POST["phone"];
		}
		
		if(isset($_POST["email"]))
		{
		  $Mail = strtolower($_POST["email"]); 
		}
		
		if(isset($_POST["00NW0000001YdwJ"]))
		{
		  $FRAN = $_POST["00NW0000001YdwJ"];
		}

		
		if(isset($_POST["00NW0000001YdwK"]))
		{
		  $TD = $_POST["00NW0000001YdwK"];
		}
		

		$mysqli = open_conection();
		
		$query = "INSERT INTO `mprospect` (`id`, `name`, `lastname`, `dni`, `gender`, `timezone`, `idcard`, `phonetype`, `phonecode`, `phonenumber`, `email`, `formtype`, `fillingdate`) VALUES (NULL, '".$Name."', '".$LastName."', '".$DNI."', '".$Gender."', '".$FRAN."', '".$TD."', '".$phoneType."', '".$CArea."', '".$Phone."', '".$Mail."',".$formtype.",CURDATE())";
		
		$mysqli->query($query);
		
		$query = "SELECT `id` FROM `mprospect` ORDER BY `id` DESC LIMIT 1";
		
		$result = $mysqli->query($query);
		
		while($row = $result->fetch_assoc()) { 
			$id = $row['id'];
		}						
		
		
		
		//**********Guardar la informacion del plan del prospecto*******************
		$query = "INSERT INTO `tprospectplan`(`idplan`, `idprospect`, `answerdate`, `created_at`, `updated_at`, `deleted_at`) VALUES (".$_SESSION['Plan']->get_PlanID().",".$id.",NULL,NULL,NULL,NULL)";
		
		$mysqli->query($query);
		
		//**********Guardar la informacion del plan del prospecto*******************
		
		
		//**********Identificar el Tipo de Formulario*******************
		
		if($formtype == 0)
			$Idformtype = 1;
		else
			$Idformtype = 2;
		
		$query = "UPDATE `mforms` SET `nfilled`= `nfilled` + 1 WHERE `id` = ".$Idformtype; //Actualiza el Contador del Formulario
		
		$mysqli->query($query);
		
		$mysqli->close();//Cerrar la Conexion
		
		//**********Guardar las estadisticas de las respuestas del prospecto*******************		
		$JsonArray = json_decode($_SESSION['jsonCompleteQuestions'], true);
		
		$jsonAux = '';
		
		foreach($JsonArray as $Question => $Answer){
			
			$NumberQuestions = str_replace("p","",$Question);
			
			$jsonAux = $JsonArray[$Question];
			
			$JsonQuestion = json_encode($jsonAux);
			
			statisticsIncrementAnswerProspect($NumberQuestions,$JsonQuestion,$id);
			
		}		
		
		//**********Guardar las estadisticas de las respuestas del prospecto*******************		
		
		//echo $id;
		
		header('Location: ../final.php');	
	}
	catch(Exception $e) {
	  echo 'Message error: ' .$e->getMessage();
	}	
	
	function statisticsIncrementAnswerProspect($Question,$Json,$IdProspect){
		
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
						
						$queryUpdate = "INSERT INTO `tpropectsquiestions`(`idprospect`, `idquestion`, `optionquestion`, `created_at`, `updated_at`, `deleted_at`) VALUES (".$IdProspect.",".$row["id"].",'".$indexAnswer."',NULL,NULL,NULL)";
						
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
								
						$queryUpdate = "INSERT INTO `tpropectsquiestions`(`idprospect`, `idquestion`, `optionquestion`, `created_at`, `updated_at`, `deleted_at`) VALUES (".$IdProspect.",".$row["id"].",'".$indexAnswer."',NULL,NULL,NULL)";
						
						$resultAnswer = $mysqli->query($queryUpdate);					
								
						break;
					case 3: //Ordenamiento
						$JsonAnswer = json_decode($Json, true); //Convertir el Json en Array
						
						$indexAnswer = chr(end($JsonAnswer) + 96); //Convertirlo en Letra MINUSCULA
						
						$queryUpdate = "INSERT INTO `tpropectsquiestions`(`idprospect`, `idquestion`, `optionquestion`, `created_at`, `updated_at`, `deleted_at`) VALUES (".$IdProspect.",".$row["id"].",'".$indexAnswer."',NULL,NULL,NULL)";
						
						$resultAnswer = $mysqli->query($queryUpdate);					
						
						break;
					case 4: //Valor único
						$JsonAnswer = json_decode($Json, true); //Convertir el Json en Array
						
						if($JsonAnswer["i1"] >= 50) //Convertirlo en Letra MINUSCULA
							$indexAnswer = "b";
						else
							$indexAnswer = "a";
						
						$queryUpdate = "INSERT INTO `tpropectsquiestions`(`idprospect`, `idquestion`, `optionquestion`, `created_at`, `updated_at`, `deleted_at`) VALUES (".$IdProspect.",".$row["id"].",'".$indexAnswer."',NULL,NULL,NULL)";
						
						$resultAnswer = $mysqli->query($queryUpdate);						
						break;							
				}			
			}
		}				
			
		$mysqli->close();
	}	
		

	
	
?>