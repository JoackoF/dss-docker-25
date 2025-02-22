<?php
$servername = "db";  
$username = "root";
$password = "password";  
$dbname = "auth_db"; 

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>
