<?php
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "manuelo";

$conn = new mysqli($host, $user, $pass, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>