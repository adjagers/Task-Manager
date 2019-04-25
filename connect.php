<?php

$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'event_manager';

$conn = new mysqli($servername, $username, $password, $dbname);

if($conn->connect_error) {
  die('Fout bij verbinden' . $conn->connect_error);
} else {
  echo "er is verbinding";
}
