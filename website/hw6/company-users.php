<?php
$servername = "db5012723904.hosting-data.io";
$username = "dbu1425408";
$password = "cmpe272user";
$dbname = "dbs10688165";
$conn = new mysqli($servername, $username, $password, $dbname);

$sql = "SELECT * FROM user";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
while ($row = $result->fetch_assoc()) {
    echo $row["fname"] . " " . $row["lname"];
    echo "<br/>";
}
?>