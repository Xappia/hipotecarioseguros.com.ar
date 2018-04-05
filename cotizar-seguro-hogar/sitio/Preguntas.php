<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/cotizar-seguro-hogar/sitio/cl_Business/class_lib.php";
require_once $_SERVER["DOCUMENT_ROOT"] . "/cotizar-seguro-hogar/sitio/cl_Business/plan/choose_plan.php";
require_once $_SERVER["DOCUMENT_ROOT"] . "/cotizar-seguro-hogar/sitio/cl_Business/conn/Connection.php";
session_start();
foreach($_SESSION['lQuestion'] as $key=>$value){
    echo 'The value of $_SESSION['."'".$key."'".'] is '."'".$value->get_DQuestion()."'".' <br />';
	echo 'The value of $_SESSION['."'".$key."'".'] is '."'".$value->get_Answer()."'".' <br />';
	echo 'The value of $_SESSION['."'".$key."'".'] is '."'".$value->get_PagCall()."'".' <br />';
	echo 'The value of $_SESSION['."'".$key."'".'] is '."'".$value->get_OptionalArg()."'".' <br />';
	echo '*************************************************************************<br /><br />';
	}
	
	echo "Scoring: </br>";
	print_r($_SESSION['Scoring']);
	//choose_plan();
	//print_r($_SESSION['RandomQuestions']);
	
?>