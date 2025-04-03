<?php 

$servername = "localhost";
$username = "rfosugnw_ecommerce";
$password = "SK3rb8yh%@K3";
$db = "rfosugnw_ecommerceweb";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$db", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Failed " . $e->getMessage();
}

?>


