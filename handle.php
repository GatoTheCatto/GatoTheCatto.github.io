<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $string = $_POST['string'];
  // do something with the string, such as outputting it:
  echo "You entered: " . $string;
}
?>