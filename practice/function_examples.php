<?php

function showMessage($name="Rick") {
  echo "Hello $name!";
}

showMessage("Gavin");

function getMessage($name="Wendolyn") {
  return "Hello $name!";
}
$message = getMessage("Donut");
echo $message;
?>