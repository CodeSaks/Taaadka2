<?php
$servername = "localhost";
$username = "cmpe272";
$password = "cmpe272";
$dbname = "cmpe272";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if (mysqli_connect_error()) {
    die("Database connection failed: " . mysqli_connect_error());
}
// echo "Connected successfully";
