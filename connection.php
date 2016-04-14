<?php
session_start();
$cookie_name = "iplt20";
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "IPL2k16";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
?>
