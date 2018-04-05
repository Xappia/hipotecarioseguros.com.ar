<?php
	require_once $_SERVER["DOCUMENT_ROOT"] . "/cotizar-seguro-hogar/sitio/cl_Business/conn/Connection.php";
	
	$mysqli = open_conection();
	
	$query = "CALL sp_initializedb('');";
	
	$result = $mysqli->query($query);
	
	$mysqli->close();
					
?>