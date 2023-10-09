<?php
  $servername = "localhost";
  $username = "getstartedwithdrones";
  $password = "qwerty";

  try {
    $conn = new PDO("mysql:host=$servername;dbname=getstartedwithdrones", $username, $password);
  } catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
    die();
  }
?>
