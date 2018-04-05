<?php
	
	function open_conection()
	{	
		$Server = 'localhost';
		$User = 'hipo_admin';
		$Pass = 'hipo1234';
		$DB = 'db_quoting_new';
		$Port = 3306;	
		
		
		$mysqli = new mysqli($Server, $User, $Pass, $DB, $Port);

		if ($mysqli->connect_error) {
			die('Error de Conexión (' . $mysqli->connect_errno . ') '
					. $mysqli->connect_error);
		}		
		
		$mysqli->set_charset("utf8");
		
		return $mysqli;
	}

?>