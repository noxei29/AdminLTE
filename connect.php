<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "it68_db";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
?>