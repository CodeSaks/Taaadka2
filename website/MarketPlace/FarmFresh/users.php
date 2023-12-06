<?php
session_start();
if (!isset($_SESSION["user"])) {
    $showLogin = true;
} else {
    $showLogin = false;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php require "head.php" ?>
    <?php require "dbconnect.php" ?>
    <title>Homework 5</title>
    
    <meta charset="UTF-8">
        
    <link rel="stylesheet" href="styles/style.css" media="all">
    <style>
         body {
            font-family: 'Open Sans', sans-serif;
            background-color: #f7f7f7; /* Light Gray */
            color: #555; /* Dark Gray */
            line-height: 1.5;
        }
        .adminbtn {
            background-color: #00b894; /* Green */
            border: none;
            color: white;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
            transition: all 0.3s ease-in-out;
            float: right;
            margin-top: 12px;
            margin-left: 2px;
            border-radius: 5px;
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
        }

        .adminbtn:hover {
            background-color: #00a38c; /* Darker Green */
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }
    </style>
</head>
 
<body>
    
    <body class="text-center">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                Farm Fresh
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="products.php">Products</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="news.php">News</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contacts.php">Contacts</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="users.php">Users</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="login.php">Login <i style="margin-top: 5px;"
                            class="fas fa-sign-in-alt"></i> <span id="cart-item" class="badge badge-danger"></span></a>
                     </li>

                </ul>
            </div>
        </div>
    </nav>
   
    
    <main role="main">
        <div class="container">
            <div class="row my-5">
                <div class="col-6">
                    <form class="form-signin" method="post" action="adduser.php">
                        <h1 class="h3 mb-3 font-weight-normal">Add User</h1>
                        <input type="text" name="firstName" class="form-control" placeholder="First Name" required autofocus="">
                        <input type="text" name="lastName" class="form-control" placeholder="Last Name" required autofocus="">
                        <input type="text" name="email" class="form-control" placeholder="Email" required autofocus="">
                        <input type="text" name="address" class="form-control" placeholder="Address" required autofocus="">
                        <input type="text" name="homePhone" class="form-control" placeholder="Home Phone" required autofocus="">
                        <input type="text" name="cellPhone" class="form-control" placeholder="Cell Phone" required autofocus="">
                        <button class="btn btn-lg btn-primary btn-block my-2" type="submit" name="add" value="addUser">Add User</button>
                    </form>
                </div>
                <div class="col-6">
                    <form class="form-signin" method="post" action="users.php">
                        <h1 class="h3 mb-3 font-weight-normal">Search User</h1>
                        <input type="text" name="name" class="form-control" placeholder="Search by Name" autofocus="">
                        <input type="text" name="email" class="form-control" placeholder="Search by Email" autofocus="">
                        <input type="text" name="phone" class="form-control" placeholder="Search by Phone" autofocus="">
                        <button class="btn btn-lg btn-primary btn-block my-2" type="submit" name="searchUser" value="searchUser">Search User</button>
                    </form>
                    <br>
                    <table class="table">
                        <tr>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Email</th>
                            <th>Address</th>
                            <th>Home Phone</th>
                            <th>Cell Phone</th>
                       </tr>
                        <?php
                        if (isset($_POST["searchUser"])) {
                            $sql = "SELECT * FROM user WHERE";
                            if (isset($_POST["name"]) and $_POST["name"] != "") {
                                $sql = $sql . " firstName LIKE '%" . $_POST["name"] . "%' OR lastName LIKE '%" . $_POST["name"] . "%'";
                            }
                            if (isset($_POST["email"]) and $_POST["email"] != "") {
                                $sql = $sql . "OR email LIKE '%" . $_POST["email"] . "%'";
                            }
                            if (isset($_POST["phone"]) and $_POST["phone"] != "") {
                                $sql = $sql . "OR homePhone LIKE'%" . $_POST["phone"] . "%' OR cellPhone LIKE '%" . $_POST["phone"] . "%';";
                            }
                            $result = $conn->query($sql);
                        } else {
                            $sql = "SELECT * FROM user";
                            $result = $conn->query($sql);
                        }
                        if (!$result) {
                            echo "No users Found";
                        } else {
                            while ($row = $result->fetch_assoc()) {
                                echo "<tr>";
                                echo "<td>";
                                echo $row["firstName"];
                                echo "</td>";
                                echo "<td>";
                                echo $row["lastName"];
                                echo "</td>";
                                echo "<td>";
                                echo $row["email"];
                                echo "</td>";
                                echo "<td>";
                                echo $row["address"];
                                echo "</td>";
                                echo "<td>";
                                echo $row["homePhone"];
                                echo "</td>";
                                echo "<td>";
                                echo $row["cellPhone"];
                                echo "</td>";
                                echo "</tr>";
                            }
                        }

                        ?>
                    </table>

                </div>
            </div>
        </div>

    </main>
          
</body>
</html>