<!DOCTYPE html>
<html>

<head>

<?php require "head.php" ?>
    <title>Homework 5</title>
    <?php ob_start(); ?>
    
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="products/product.css">
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
                        <a class="nav-link active" href="products.php">Products</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="news.php">News</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contacts.php">Contacts</a>
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

                </ul>
            </div>
        </div>
    </nav>
  
   

                
<div id="content">
            <div id="content-inner">
                
                <main id="contentbar">
                    <div class="article">
                       <?php

                        // Get the existing cookie value (if any)
                        $cookie_value = isset($_COOKIE['last_5_pages_farmfresh']) ? $_COOKIE['last_5_pages_farmfresh'] : "";

                        // Split the cookie value into an array of product IDs
                        $product_ids = $cookie_value ? explode(",", $cookie_value) : array();

                        // If there are less than 5 products, pad the array with empty strings
                        $product_ids = array_pad($product_ids, 5, "");

                        // Print out the 5 products using the product IDs
                        echo "Last five previously visited products.";
                        foreach ($product_ids as $product_id) {
                            echo "<br><a href='$product_id'>$product_id</a> ";
                        // You can add code here to fetch and display the product details from a database or API
                        }

                        ?>

                   </div>
                </main>
                
               
                <div class="clr"></div>
            </div>
        </div>
</body>

</html>