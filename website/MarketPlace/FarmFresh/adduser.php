<?php require "dbconnect.php" ?>
<?php

$sql = "INSERT INTO user (firstName,lastName,email,address,homePhone,cellPhone) VALUES ('" . $_POST["firstName"] . "', '" . $_POST["lastName"] . "', '" . $_POST["email"] . "', '" . $_POST["address"] . "', '" . $_POST["homePhone"] . "', '" . $_POST["cellPhone"] . "')";
$conn->query($sql);
$conn->close();
header("location: users.php");

?>