<?php
$servername = "localhost";
$username = "root";
$password = ""; // sesuaikan dengan password MySQL Anda
$dbname = "db_regis";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
