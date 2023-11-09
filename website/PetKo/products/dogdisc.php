<?php
                    $cookie_name = "last_5_pages";
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
                    setcookie($cookie_name, $cookie_value, $cookie_expiration, "/hw4");
                    ?>

<!DOCTYPE html>
<!-- Template by html.am -->
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>PetKo</title>
    <link rel="stylesheet" href="/hw4/index.css">
    <link rel="stylesheet" href="/hw4/products.css">


</head>

<body>
    <div id="page">
        <header id="header">
            <div id="header-inner">
                <div id="logo">
                    <h1><a href="#">Pet<span>Ko</span></a></h1>
                </div>
                <div id="top-nav">
                    <ul>
                        <li><a href="/PetKo/index.html">Home</a></li>
                        <li><a href="/PetKo/about.html">About</a></li>
                        <li><a href="/PetKo/products.html">Products/Services</a></li>
                        <li><a href="/PetKo/news.html">News</a></li>
                        <li><a href="/PetKo/contacts.php">Contact</a></li>
                        <li><a href="/PetKo/admin.html">Admin</a></li>

                    </ul>
                </div>
                <div class="clr"></div>
            </div>
        </header>
        <div class="feature">
            <div class="feature-inner">
                <h1>Dog Disc</h1>
            </div>
        </div>


        <div id="content">
            <div id="content-inner">

                <main id="contentbar">
                    <div class="article">
                    
                        <div class="card">
                            <img src="/images/dogdisc.jpg" alt="Denim Jeans" style="max-height:450px; max-width:450px;">
                            <h1>Fetching Frisbee Dog Disc</h1>
                            <p class="price">$19.99</p>
                            <p>Fetching Frisbee Dog Disc is a durable and fun frisbee that is designed to provide your dog with hours of entertainment and exercise. It is made of high-quality materials such as rubber and nylon, and is perfect for playing fetch and other fun games with your dog. This frisbee is also great for promoting bonding and strengthening the relationship between you and your dog.</p>
                            <p><button onclick="window.location.href='/products/dogdisc.html';">Add to Cart</button></p>
                          </div>
                    </div>
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

                <div class="clr"></div>
            </div>
        </div>

        <div id="footerblurb">
            <div id="footerblurb-inner">

                <div class="column">
                    <h2><span>Heading</span></h2>
                    <p>
                        <script>
                            generateText(2)
                        </script>
                    </p>
                </div>
                <div class="column">
                    <h2><span>Heading</span></h2>
                    <p>
                        <script>
                            generateText(2)
                        </script>
                    </p>
                </div>
                <div class="column">
                    <h2><span>Heading</span></h2>
                    <p>
                        <script>
                            generateText(2)
                        </script>
                    </p>
                </div>

                <div class="clr"></div>
            </div>
        </div>
        <footer id="footer">
            <div id="footer-inner">
                <p>&copy; Copyright <a href="#">Your Site</a> &#124; <a href="#">Terms of Use</a> &#124; <a
                        href="#">Privacy Policy</a></p>
                <div class="clr"></div>
            </div>
        </footer>
    </div>
</body>

</html>