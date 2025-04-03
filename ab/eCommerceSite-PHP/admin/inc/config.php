<?php
// Error Reporting Turn On
ini_set('error_reporting', E_ALL);

// Setting up the time zone
date_default_timezone_set('America/Los_Angeles');

// Host Name
$dbhost = 'localhost';

// Database Name
$dbname = 'rfosugnw_ecommerceweb';

// Database Username
$dbuser = 'rfosugnw_ecommerce';

// Database Password
$dbpass = 'SK3rb8yh%@K3';

// Defining base url
define("BASE_URL", "");

// Getting Admin url
define("ADMIN_URL", BASE_URL . "admin" . "/");

try {
	$pdo = new PDO("mysql:host={$dbhost};dbname={$dbname}", $dbuser, $dbpass);
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch( PDOException $exception ) {
    // Log the error to a file instead of echoing it
    error_log("Connection error: " . $exception->getMessage(), 3, "errors.log");
}
?>


