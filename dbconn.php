<?php
$servername = "localhost";
$username = "root";
$password = "Javaisheart@2023";
$dbname = "db_runforearth";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?> 