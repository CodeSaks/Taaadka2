<?php
                    $cookie_name = "last_5_pages_Mobilo";
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


<!DOCTYPE html>
<!-- Template by html.am -->
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Mobilo</title>
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="products.css">


</head>

<body>
    <div id="page">
        <header id="header">
            <div id="header-inner">
                <div id="logo">
                    <h1><a href="#">Mobilo</a></h1>
                </div>
                <div id="top-nav">
                    <ul>
                    <li><a href="../index.html">Home</a></li>
                        <li><a href="../about.html">About</a></li>
                        <li><a href="../products.html">Products/Services</a></li>
                        <li><a href="../news.html">News</a></li>
                        <li><a href="../contacts.php">Contact</a></li>
                        <!-- <li><a href="/users.html">Users</a></li> -->
                        <li><a href="../admin.html">Admin</a></li>
                        <!-- <li><a href="/curl.php">CURL</a></li> -->

                    </ul>
                </div>
                <div class="clr"></div>
            </div>
        </header>
        <div class="feature">
            <div class="feature-inner">
                <h1>One Plus 2</h1>
            </div>
        </div>


        <div id="content">
            <div id="content-inner">

                <main id="contentbar">
                    <div class="article">
                   
                         <div class="card">
                            <img src="../images/images/2.png" alt="product" style="max-height:450px; max-width:450px;">
                            <h1>One Plus 2</h1>
                            <p class="price">$140</p>
                            <p>Display: The OnePlus 2 features a 5.5-inch IPS LCD display with a resolution of 1080 x 1920 pixels, providing a sharp and vibrant visual experience.</p>
                            <p><button onclick="window.location.href='products/dogshampoo.php';">Buy Now</button></p>
                          </div>
                    </div>
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
                </table>
                </main>

                <!-- <nav id="sidebar">
                    <div class="widget">
                        <h3>Left heading</h3>
                        <ul>
                            <li><a href="#">Link 1</a></li>
                            <li><a href="#">Link 2</a></li>
                            <li><a href="#">Link 3</a></li>
                            <li><a href="#">Link 4</a></li>
                            <li><a href="#">Link 5</a></li>
                        </ul>
                    </div>
                </nav> -->

               
            </div>
        </div>
        
    </div>
</body>

</html>