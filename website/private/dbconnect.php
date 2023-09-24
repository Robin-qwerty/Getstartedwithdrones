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




  // $dbhost = 'localhost';
  // $dbport = '3306';
  // $dbname = 'beeway2023_Beeway';
  // $dbuser = 'beeway2023';
  // $dbpass = 'Duiven/2023!';
  //
  // $dsn = "mysql:host=$dbhost;port=$dbport;dbname=$dbname;charset=utf8mb4";
  //
  // try {
  //     $conn = new PDO($dsn, $dbuser, $dbpass);
  //     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  //
  //     // Verbinding is succesvol. Je kunt nu queries uitvoeren.
  //     // Bijvoorbeeld: $result = $conn->query('SELECT * FROM table_name');
  // } catch (PDOException $e) {
  //     echo "Failed to connect to MySQL: " . $e->getMessage();
  // }
?>

GRANT SELECT, INSERT, UPDATE, DELETE, CREATE, INDEX, ALTER ON  *.* TO 'getstartedwithdrones'@'localhost' REQUIRE NONE WITH MAX_QUERIES_PER_HOUR 0 MAX_CONNECTIONS_PER_HOUR 0 MAX_UPDATES_PER_HOUR 0 MAX_USER_CONNECTIONS 0;