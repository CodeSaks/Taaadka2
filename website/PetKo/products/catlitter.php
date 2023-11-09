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
                    setcookie($cookie_name, $cookie_value, $cookie_expiration, "/");
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
                        <li><a href="/Petko/index.html">Home</a></li>
                        <li><a href="/Petko/about.html">About</a></li>
                        <li><a href="/Petko/products.html">Products/Services</a></li>
                        <li><a href="/Petko/news.html">News</a></li>
                        <li><a href="/Petko/contacts.php">Contact</a></li>
                        <li><a href="/Petko/admin.html">Admin</a></li>

                    </ul>
                </div>
                <div class="clr"></div>
            </div>
        </header>
        <div class="feature">
            <div class="feature-inner">
                <h1>Cat Litter</h1>
            </div>
        </div>


        <div id="content">
            <div id="content-inner">

                <main id="contentbar">
                    <div class="article">
                    
                        <div class="card">
                            <img src="/images/catlitter.jpg" alt="Denim Jeans" style="max-height:450px; max-width:450px;">
                            <h1>Purrfect Paws Cat Litter</h1>
                            <p class="price">$19.99</p>
                            <p>Purrfect Paws Cat Litter is a premium cat litter that is made of natural ingredients such as wood, paper, and corn. It is designed to provide superior odor control, clump quickly for easy scooping, and is 99% dust-free. This cat litter is perfect for pet owners who want a cat litter that is safe, natural, and easy to clean.</p>
                            <p><button onclick="window.location.href='/products/catlitter.html';">Add to Cart</button></p>
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