<?php
// db_connection.php
$servername = "localhost"; // Change if necessary
$username = "abdigitalarts"; // Your database username
$password = "abdigitalarts"; // Your database password
$dbname = "rfosugnw_abstudio-db"; // Your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>