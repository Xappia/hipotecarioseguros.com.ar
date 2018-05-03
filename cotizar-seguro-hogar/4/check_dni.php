<?php

header('Content-Type: application/json; charset=UTF-8');
date_default_timezone_set('America/Argentina/Buenos_Aires');

$response = true;

if(isset($_REQUEST['dni'])) {

	$dni = strip_tags(trim($_REQUEST['dni']));

	$file = fopen('resultados_landing_4.csv', 'r');
	while(($line = fgetcsv($file)) !== false) {
		if($line[2] == $dni) {
			$response = false;
			break;
		}
	}
	fclose($file);

} // if

echo json_encode(array("success" => $response));

?>