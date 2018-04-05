<?php

header('Content-Type: application/json; charset=UTF-8');
date_default_timezone_set('America/Argentina/Buenos_Aires');

$f = fopen("resultados_landing_4.csv", "a");

flock($f, LOCK_EX);

if(fputcsv($f, $_POST, ",", "\"")) {
	echo json_encode(array("success" => true));
} else {
	echo json_encode(array("success" => false));
}

flock($f, LOCK_UN);
fclose($f);

exit();

?>