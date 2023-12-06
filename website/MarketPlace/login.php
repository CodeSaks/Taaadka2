
<?php require "dbconnect.php" ?>
<?php
if (isset($_POST["login"]) && !empty($_POST["email"]) && !empty($_POST["password"]) ) {
    $sql = "SELECT * FROM signup WHERE email = '" . $_POST["email"] . "' and password = '" . $_POST["password"] . "'";
    // echo $sql;
    $result = $conn->query($sql);
    $value = $result->fetch_object();

    if ($_POST['email'] == $value->email && $_POST['password'] == $value->password) {
        // echo "Correct Password";
        $cookie_expiration = time() + (86400 * 30); // 30 days

        setcookie("session", $_POST['email'], $cookie_expiration, "/");

        header("location: index.php");
    } else {
        // echo "Incorrect Password";
        header("location: loginPage.php");
    }
}
// header("location: loginPage.php");

