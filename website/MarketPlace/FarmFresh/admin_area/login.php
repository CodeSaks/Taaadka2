<?php
session_start();
include("dbconnect.php");
if (isset($_POST['login'])) {
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $pass = mysqli_real_escape_string($conn, $_POST['password']);

    $sel_user = "select * from admins where user_email='$email' AND user_pass='$pass'";
    $run_user = mysqli_query($conn, $sel_user);
    $check_user = mysqli_num_rows($run_user);

    if ($check_user == 1) {
        $_SESSION['user_email'] = $email;
        echo "<script>window.open('index.php?logged_in=You have successfully Logged into ADMIN PANEL!','_self')</script>";
    } else {
        echo "<script>alert('Email or Password did not match, try again!')</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>    
    <?php require "head.php" ?>
    <title>Homework 2</title>
    <?php ob_start(); ?>
    
    <link rel="stylesheet" href="/css/style.css" media="all">
    <meta charset="UTF-8">
    <title>Login Form</title>
    <link rel="stylesheet" type="text/css" href="/css/login_style.css" media="all">
</head>
<body>
    
     <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                Farm Fresh
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/HW4/about.php">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/HW3/products.php">Products</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/HW4/news.php">News</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/HW4/contacts.php">Contacts</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="/HW4/login.php">Login <i style="margin-top: 5px;"
                            class="fas fa-sign-in-alt"></i> <span id="cart-item" class="badge badge-danger"></span></a>
                </li>

                </ul>
            </div>
        </div>
    </nav>
    
    
    
    
<div class="login">
        
        <h2 style="color: white; text-align: center;"><?php echo @$_GET['logged_out']; ?></h2>

        <h1>Admin Login</h1>
        <form method="post" action="login.php">
            <input type="text" name="email" placeholder="Email" required="required"/>
            <input type="password" name="password" placeholder="Password" required="required"/>
            <button type="submit" name="login" class="btn btn-primary btn-block btn-large">Login</button>
        </form>
    </div>
</body>
</html>
