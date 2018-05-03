<?php

header('Content-Type: application/json; charset=UTF-8');
date_default_timezone_set('America/Argentina/Buenos_Aires');

$response = true;

if(isset($_REQUEST['email'])) {

	$email = strip_tags(trim($_REQUEST['email']));

	$file = fopen('resultados_landing_3.csv', 'r');
	while(($line = fgetcsv($file)) !== false) {
		if(strtolower($line[5]) == strtolower($email)) {
			$response = false;
			break;
		}
	}
	fclose($file);

} // if

echo json_encode(array("success" => $response));

?>