<?php
// Configuration
$db_host = 'localhost'; // hostname
$db_username = 'root'; // database username
$db_password = ''; // database password
$db_name = 'perusahaan'; // database name

// Create connection
$conn = new mysqli($db_host, $db_username, $db_password, $db_name);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Close connection
$conn->close();
?>