<?php
// Set the allowed origins
header("Access-Control-Allow-Origin: *");

// Read the request data from the query parameters
$stringData = $_GET['key'];

// Open the file containing the keys
$filename = "keys.txt";
$file = fopen($filename, "r");

if ($file == false) {
  echo ("Error in opening file");
  exit();
}

$filesize = filesize($filename);
$filetext = fread($file, $filesize);
fclose($file);

// Check if the requested key is present in the file
if (strpos($filetext, $stringData) !== false) {
  $response = 'true';
} else {
  $response = 'false';
}

// Send the response as plain text
header('Content-Type: text/plain');
echo $response;
?>
