<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test_epitech";

// Create connection
try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
  catch(Exception $e)
  {
  
          die('Erreur : '.$e->getMessage());
  }
?>