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
               <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="about.php">About</a>
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
                                                    href="admin_area/index.php">Admin Login</a></button>
                <li>

                </ul>
            </div>
        </div>
    </nav>

     <main>
        <div class="px-4 py-5 my-5 text-center">
            
            <h1 class="display-5 fw-bold">About Us</h1>
            <div class="col-lg-6 mx-auto">
                <p class="lead mb-4">At Farm Fresh, we are dedicated to bringing you the finest quality produce straight from our farms to your table. We take pride in offering a wide selection of farm-fresh fruits, vegetables, and other agricultural products that are grown with care and harvested at the peak of their freshness. Our commitment to quality begins at the source. We work closely with a network of local farmers who share our passion for sustainable and responsible farming practices. Together, we prioritize the use of natural fertilizers, organic pest control methods, and environmentally friendly techniques to cultivate our crops. By working hand in hand with our partner farmers, we ensure that our produce is free from harmful chemicals and GMOs, allowing you to enjoy the pure goodness of nature.</p>
            </div>
        </div>
        <hr>
        <div class="container">
            <div class="row my-2">
                <div class="col-7">
                    <p class="text-start fs-1 lh-1">What we do</p>
                    <p class="text-start fs-6">Farm Fresh is focused on advancing innovation in farming by surpassing the standard for organic practices. The USDA seal on our purple tags is a promise that our fresh produce was farmed free of synthetic fertilizers and pesticides, growth hormones, antibiotics, preservatives and GMOs.</p>
                </div>
                <div class="col-5">
                    <img src="assets/img/carousel-1.jpg" class="d-block w-100" alt="..." style="height: 25rem; width: 25rem">
                </div>
            </div>
            <hr>
        </div>
        <div class="container">
            <div class="row my-2">
                <div class="col-5">
                    <img src="assets/img/carousel-2.jpg" class="d-block w-100" alt="..." style="height: 25rem; width: 25rem">
                </div>
                <div class="col-7">
                    <p class="text-start fs-1 lh-1">Sustainability and community</p>
                    <p class="text-start fs-6">As stewards of some of the most productive farmland in the country, Farm Fresh is dedicated to protecting natural resources and preserving the environment for generations to come. We are constantly improving our practices to reduce waste and minimize our use of energy, water and fertilizer while optimizing crop yields and soil health. We’re a pioneer farming company that is passionate about providing fresh organic produce. We’ve been committed to honoring sustainable practices by growing organically since 1984.</p>
                </div>
            </div>
            <hr>
    </main>
</body>

</html>