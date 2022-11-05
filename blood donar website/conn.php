<?php
$servername = "sql310.epizy.com";
$username = "epiz_32933672";
$password = "gDvfTERmhyZYf";
$database = "epiz_32933672_blood_donar_website";
// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>