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
  
   <nav id="topbar">
                    <div class="widget">
                        <h3>Previously Viewed Products</h3>
                        <ul>
                            <li><a href="fiveprod.php">Last five Products</a></li>
                            <li><a href="bestprod.php">Best five Products</a></li>

                            <!-- <li><a href="#">Link 2</a></li>
                            <li><a href="#">Link 3</a></li>
                            <li><a href="#">Link 4</a></li>
                            <li><a href="#">Link 5</a></li> -->
                        </ul>
                    </div>
                </nav>

                
<div id="content">
    <div id="content-inner">
        <main id="contentbar">
            <div class="article">
              <div class="card">
                    <img src="assets/img/tomato.jpg" alt="Vegetable" style="max-height:600px; max-width:800px;">
                    <h1>Tomatoes</h1>
                    <p class="price">$9.99</p>
                     <p>Tomatoes are a versatile fruit commonly used in various culinary dishes. They have a distinctive bright red color, a juicy texture, and a slightly sweet and tangy flavor. </p>
                    <p><button onclick="window.location.href='products/tomato.php';">Details</button></p>
                </div>  
              <div class="card">
                    <img src="assets/img/carrot.jpg" alt="Root Vegetable" style="max-height:600px; max-width:800px;">
                    <h1>Carrots</h1>
                    <p class="price">$6.99</p>
                    <p>Carrots are vibrant and nutritious root vegetables that are widely recognized for their crisp texture, sweet flavor, and numerous health benefits.</p>
                    <p><button onclick="window.location.href='products/carrot.php';">Details</button></p>
                </div>
                <div class="card">
                    <img src="assets/img/spinach.jpg" alt="Leafy Vegetable" style="max-height:600px; max-width:800px;">
                    <h1>Spinach</h1>
                    <p class="price">$4.99</p>
                    <p>Spinach is a versatile and nutrient-dense leafy green that is packed with vitamins, minerals and antioxidants.</p>
                    <p><button onclick="window.location.href='products/spinach.php';">Details</button></p>
                </div>
                <div class="card">
                    <img src="assets/img/beet1.jpg" alt="Root Vegetable" style="max-height:900px; max-width:800px;">
                    <h1>Beetroot</h1>
                     <p class="price">$7.99</p>
                    <p>Beetroot, also known as beets or red beets, is a vibrant and nutrient-packed root vegetable that has gained popularity for its earthy flavor, vibrant color, and numerous health benefits. With its deep reddish-purple hue and sweet taste, beetroot is a versatile ingredient that ad</p>
                    <p><button onclick="window.location.href='products/beet.php';">Details</button></p>
                </div>
                <div class="card">
                    <img src="assets/img/bellpep.jpg" alt="Peppers Family " style="max-height:600px; max-width:800px;">
                    <h1> Jalapeno Peppers </h1>
                    <p class="price">$10.99</p>
                    <p>Jalapeno peppers are widely used in various cuisines to add a spicy kick and a unique taste to dishes.</p>
                    <p><button onclick="window.location.href='products/jalapeno.php';">Details</button></p>
                </div>
                <div class="card">
                     <img src="assets/img/peppers.jpg" alt="Peppers Family " style="max-height:600px; max-width:800px;">
                    <h1>Assorted Peppers</h1>
                    <p class="price">$12.99</p>
                    <p>Assorted peppers refer to a mix of different types of peppers, usually including a variety of colors, shapes, sizes, and heat levels.</p>
                    <p><button onclick="window.location.href='products/peppers.php';">Details</button></p>
                </div>
                <div class="card">
                     <img src="assets/img/orange.jpg" alt="Citrus Fruit " style="max-height:600px; max-width:800px;">
                    <h1>Oranges</h1>
                    <p class="price">$18.99</p>
                    <p>Farm-fresh oranges are a vibrant and juicy citrus fruit that delight both the senses and the taste buds. </p>
                    <p><button onclick="window.location.href='products/orange.php';">Details</button></p>
                </div>
              <div class="card">
                     <img src="assets/img/cherry.jpg" alt="Fruit" style="max-height:600px; max-width:800px;">
                    <h1>Cherries</h1>
                    <p class="price">$9.99</p>
                    <p>Cherries are not only a delightful and flavorful fruit but also a nutritional powerhouse.</p>
                    <p><button onclick="window.location.href='products/cherry.php';">Details</button></p>
                </div>
               <div class="card">
                     <img src="assets/img/apricot.jpg" alt="Fruit" style="max-height:600px; max-width:800px;">
                    <h1>Apricots</h1>
                    <p class="price">$13.99</p>
                    <p>Apricots are a small and velvety fruit that boasts a delightful balance of sweetness and tanginess. </p>
                    <p><button onclick="window.location.href='products/apricot.php';">Details</button></p>
                </div>
               <div class="card">
                     <img src="assets/img/apple.jpg" alt="Fruit" style="max-height:600px; max-width:800px;">
                    <h1>Apples</h1>
                    <p class="price">$13.99</p>
                    <p>Apples are crisp and juicy fruits that are widely enjoyed for their refreshing taste and numerous health benefits. </p>
                    <p><button onclick="window.location.href='products/apple.php';">Details</button></p>
                </div>
              </div>
         </main>   
                
                
               
                <div class="clr"></div>
            </div>
        </div>
</body>

</html>