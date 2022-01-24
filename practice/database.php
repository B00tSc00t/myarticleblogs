<?php

/**
* Get the database connection.
*
* @return object Connection to a MySQL server
*/
function getDB() {

  include 'C:\Users\sabor\Documents\www\sql.php'; 

// Must be in this order to connect
  $conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

  if (mysqli_connect_error()) {
    echo mysqli_connect_error();
    exit;
  }

  return $conn;
}