<?php
  //  Declare database credentials
  $servername = "localhost";
  $username = "peel_appeal_user";
  $password = "password";
  $dbname = "peel_appeal";

  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);

  // Check connection
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }

  return $conn;

?>

