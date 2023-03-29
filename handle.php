<?php
// read the request data from the POST body
$stringData = file_get_contents('php://input');

$filename = "keys.txt";
$file = fopen($filename, "r");

if ($file == false) {
  echo ("Error in opening file");
  exit();
}

$filesize = filesize($filename);
$filetext = fread($file, $filesize);
fclose($file);

if (strpos($filetext, $stringData) !== false) {
  $response = 'true';
} else {
  $response = 'false';
}

// send the response as plain text
header('Content-Type: text/plain');
echo $response;
?>
