<!DOCTYPE html>
<html>

<head>
    <?php require "head.php" ?>
    <title>Homework 5</title>
    <?php ob_start(); ?>
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
                        <a class="nav-link active" href="contacts.php">Contacts</a>
                    </li>
                       <li class="nav-item">
                        <a class="nav-link" href="users.php">Users</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="curl.php">Curl</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="login.php">Login <i style="margin-top: 5px;"
                            class="fas fa-sign-in-alt"></i> <span id="cart-item" class="badge badge-danger"></span></a>
                </li>
                    <button class="adminbtn"><a style="text-decoration: none; color: #ffffff;"
                                                    href="../admin_area/index.php">Admin Login</a></button>
                <li>

                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="row my-2">
            <div class="col-2"></div>
            <div class="col-10">
                <div class="card" >
                    <div class="card-body">
                        <h5 class="card-title">Contact us</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Contact data coming from contacts.txt</h6>
                         <!-- Contacts -->
<div class="contacts">
	
	<p>Get in touch with us for more information:</p>
  <?php
  $filename = "txt/contacts.txt";
  $handle = fopen($filename, "r");
  if ($handle !== FALSE) {	
          echo "<ul>";
          while (($line = fgets($handle)) !== FALSE) {
            echo "<li>" . htmlspecialchars($line) . "</li>";
          }
          echo "</ul>";
          fclose($handle);
        }
  ?>
</div>
                        
                      
                      
                    </div>
                </div>
            </div>
            <div class="col-2"></div>
        </div>
    </div>
</body>

</html>