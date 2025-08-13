<?php
// Database connection settings
$host = "localhost";
$user = "root";
$pass = ""; // default XAMPP password is empty
$db   = "aibra"; // <-- change to your database name

// Connect to database
$conn = new mysqli($host, $user, $pass, $db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
