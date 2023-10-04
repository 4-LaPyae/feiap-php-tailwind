<?php
$servername = "localhost"; // Replace with your server name
// $username = "kay96"; // Replace with your MySQL username
$username = "root"; // Replace with your MySQL username
$password = "iceea*124#"; // Replace with your MySQL password
// $password = "devkay06";
 //$password = "password";
$database = "feiap_registrants"; // Replace with your MySQL database name
#ssh root@68.183.231.72
// // Create a connection
$conn = new mysqli($servername, $username, $password, $database);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

return $conn;
