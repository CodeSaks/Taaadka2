<?php
$servername = "db5012971144.hosting-data.io";
$username = "dbu1583169";
$password = "Pratikshacmpe272";
$dbname = "dbs10892438";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if (mysqli_connect_error()) {
    die("Database connection failed: " . mysqli_connect_error());
}
// echo "Connected successfully";
