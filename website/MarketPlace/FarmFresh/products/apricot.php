
<?php
                    $cookie_name = "last_5_pages_farmfresh";
                    $cookie_expiration = time() + (86400 * 30); // 30 days
                    
                    // Get the current page URL
                    $current_page_url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
                    
                    // Get the existing cookie value (if any)
                    $cookie_value = isset($_COOKIE[$cookie_name]) ? $_COOKIE[$cookie_name] : "";
                    
                    // Split the cookie value into an array of page URLs
                    $page_urls = $cookie_value ? explode(",", $cookie_value) : array();
                    
                    // Add the current page URL to the beginning of the array
                    array_unshift($page_urls, $current_page_url);
                    // Trim the array to only include the last 5 pages
                    $page_urls = array_slice($page_urls, 0, 5);
                    
                    // Join the array back into a comma-separated string
                    $cookie_value = implode(",", $page_urls);
                    
                    // Set the new cookie value
                    setcookie($cookie_name, $cookie_value, $cookie_expiration, "/");
                    $cookie_name = "last_5_pages_all";
                    $cookie_expiration = time() + (86400 * 30); // 30 days
                    // Get the current page URL
                    $current_page_url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
                    
                    // Get the existing cookie value (if any)
                    $cookie_value = isset($_COOKIE[$cookie_name]) ? $_COOKIE[$cookie_name] : "";
                    
                    // Split the cookie value into an array of page URLs
                    $page_urls = $cookie_value ? explode(",", $cookie_value) : array();
                    
                    // Add the current page URL to the beginning of the array
                    array_unshift($page_urls, $current_page_url);
                    // Trim the array to only include the last 5 pages
                    $page_urls = array_slice($page_urls, 0, 10);
                    
                    // Join the array back into a comma-separated string
                    $cookie_value = implode(",", $page_urls);
                    
                    // Set the new cookie value
                    setcookie($cookie_name, $cookie_value, $cookie_expiration, "/");
                    ?>
<?php require "dbconnect.php"; ?><!DOCTYPE html>
<html>

<head>
    
<?php require "head.php" ?>
    <title>Homework 5</title>
    <?php ob_start(); ?>
    
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Products</title>
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="product.css">

</head>
    
    <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="../index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../about.php">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="../products.php">Products</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../news.php">News</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../contacts.php">Contacts</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../users.php">Users</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../curl.php">Curl</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="../login.php">Login <i style="margin-top: 5px;"
                            class="fas fa-sign-in-alt"></i> <span id="cart-item" class="badge badge-danger"></span></a>
                </li>

                </ul>
            </div>
        </div>
    </nav>
    
 
        <div class="feature">
            <div class="feature-inner">
                <h1>Apricots
                </h1>
            </div>
        </div>

<div id="content">
            <div id="content-inner">

                <main id="contentbar">
                    <div class="article"><?php
$productId = basename($_SERVER['PHP_SELF'], '.php');

//Fetch Reviews
$sql = "SELECT * FROM reviews WHERE productId = '$productId'";
$reviews = $conn->query($sql);
?>
                        <div class="card">
                            <img src="../assets/img/apricot.jpg" alt="Denim Jeans" style="max-height:1000px; max-width:1000px;">
                            <h1>Apricots</h1>
                            <p class="price">$13.99</p>
                            <p>Apricots are a small and velvety fruit that boasts a delightful balance of sweetness and tanginess. These juicy fruits are not only delicious but also offer a host of nutritional benefits. Apricots are a rich source of vitamins, minerals, and dietary fiber, making them a valuable addition to a healthy diet. One notable nutrient found in apricots is vitamin A, which is important for maintaining healthy vision, supporting immune function, and promoting skin health. Apricots also provide a good amount of vitamin C, an antioxidant that aids in collagen production and helps protect the body against free radicals. Furthermore, apricots are packed with dietary fiber, which contributes to digestive health and can help regulate blood sugar levels. The fiber content of apricots also promotes feelings of fullness, making them a satisfying snack option.
                          <p><button onclick="window.location.href='/products/apricot.php';">Add to Cart</button>
                    </form>


                    <form class="form-signin" method="post" action="/marketplace/petshop/addReview.php">
                        <h1 class="h3 mb-3 font-weight-normal">Add Review</h1>
                        <label for="rating">Select a Rating (1-5)</label>
                        <select name="rating" class="form-control" id="rating">
                            <option value=1>1</option>
                            <option value=2>2</option>
                            <option value=3>3</option>
                            <option value=4>4</option>
                            <option value=5>5</option>
                        </select>
                        <input type="text" name="review" class="form-control" placeholder="Write a review" required>
                        <?php echo '<input type="text" name="id" class="form-control" value="' . basename($_SERVER['PHP_SELF'], '.php') . '" hidden>' ?>

                        <button class="btn btn-lg btn-primary btn-block my-2" type="submit" name="addReview" value="addReview">Add Review</button>
                    </form>


                    <table class="table">
                    <tr>
                        <th>Ratings</th>
                        <th>Reviews</th>
                    </tr>
                    <?php

                    if (!$reviews) {
                        echo "No Reviews Found";
                    } else {
                        while ($row = $reviews->fetch_assoc()) {
                            echo "<tr>";
                            echo "<td>";
                            echo $row["rating"];
                            echo "</td>";
                            echo "<td>";
                            echo $row["review"];
                            echo "</td>";
                            echo "</tr>";
                        }
                    }

                    ?>
                </table> </main>
                
                  
                </body>

</html>