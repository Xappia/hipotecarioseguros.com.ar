<?php

	require_once $_SERVER["DOCUMENT_ROOT"] . "/cotizar-seguro-hogar/sitio/cl_Business/class_lib.php";
	require_once $_SERVER["DOCUMENT_ROOT"] . "/cotizar-seguro-hogar/sitio/cl_Business/conn/Connection.php";

	//require_once $_SERVER["DOCUMENT_ROOT"] . "/cl_Business/class_lib.php";
	//require_once $_SERVER["DOCUMENT_ROOT"] . "/cl_Business/conn/Connection.php";
	
	session_start();
	
	$MaxQuestions = "07";
	$MaxQuestionsSystem = 47;
	
	function NumberQuestionsOnArray($Question)//Devuelve el numero de pregunta
	{
		if(isset($_SESSION['lQuestion']))//Pregunta si existen elementos en la lista
		{
			foreach($_SESSION['lQuestion'] as $key=>$value){
				if($Question == $value->get_PagCall())
				{
					return str_pad(($key + 1), 2,"0",STR_PAD_LEFT);
				}		
			}
			//Sino lo consigue devuelve el numero siguiente
			return str_pad((count($_SESSION['lQuestion']) + 1),2,"0",STR_PAD_LEFT);				
		}
		else
		{
			header('Location: index.php');
		}
	}
	
	function get_NameQuestion($Question)
	{				
		$mysqli = open_conection();
		
		$query = "SELECT `description` FROM `mquestion` WHERE `question` = 'Pregunta ".$Question."'"; //Actualiza el Contador del Formulario
		
		$result = $mysqli->query($query);
		
		if ($result->num_rows > 0)
		{
			while($row = $result->fetch_assoc()) {
				return $row["description"];
			}
		}
		
		$mysqli->close();		
	}
	
	function replaceCharAccent($StringC)
	{		
		// $StringR = str_replace("á","&aacute;",$StringC);
		// $StringR = str_replace("é","&eacute;",$StringC);
		// $StringR = str_replace("í","&iacute;",$StringC);
		$StringR = str_replace("ó","&oacute;",$StringC);
		// $StringR = str_replace("ú","&uacute;",$StringC);
		
		// $StringR = str_replace("Á","&AACUTE;",$StringC);
		// $StringR = str_replace("É","&EACUTE;",$StringC);
		// $StringR = str_replace("Í","&IACUTE;",$StringC);
		// $StringR = str_replace("Ó","&OACUTE;",$StringC);
		// $StringR = str_replace("Ú","&UACUTE;",$StringC);
		
		//$StringR = "abc";
		
		return $StringR;
	}	
?>