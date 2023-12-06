<!DOCTYPE html>
<html>

<head>
    <?php require "head.php" ?>
    <title>Homework 5</title>
    <?php ob_start(); ?>
   <link rel="stylesheet" href="/css/style.css" media="all">
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
               Farm Fresh            </a>
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
                                                    href="/admin_area/index.php">Admin Login</a></button>
                <li>
               </ul>
            </div>
        </div>
    </nav>
    <main role="main">
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>  
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="assets/img/farm1.png" class="d-block w-100" alt="..." style="height: 35rem;">
                    <div class="carousel-caption d-none d-md-block">
                        <h3 class="text-dark">Best in Organic Foods</h3>
                    </div>
                </div>

                <div class="carousel-item">
                    <img src="assets/img/farm2.png" class="d-block w-100" alt="..." style="height: 35rem;">
                    <div class="carousel-caption d-none d-md-block">
                        <h3 class="text-dark">USE CODE: Fresh50 </h5>
                            <p>Delivered within 2 hours. Out of state delivery may take up to 5 days</p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <hr>
        <div class="container">
            <div class="row my-2">
                <div class="col-7">
                    <p class="text-start fs-1 lh-1">Organic Vegetables</p>
                    <p class="text-start fs-6">One of the key benefits of organic vegetables is their reduced exposure to harmful chemicals. By avoiding the use of synthetic pesticides and fertilizers, organic farming methods help to minimize the presence of pesticide residues on the produce. This makes organic vegetables a healthier choice for those looking to limit their exposure to potentially harmful substances. Organic vegetables are also appreciated for their taste and nutritional value. Many people find that organic produce has a more pronounced and authentic flavor compared to conventionally grown vegetables. Additionally, organic farming practices that prioritize soil health often result in produce that is rich in nutrients, antioxidants, and beneficial compounds. When you opt for organic vegetables, you not only make a positive impact on your own health but also contribute to the larger goal of promoting a more sustainable and eco-friendly food system. So, savor the flavors and nutritional benefits of organic vegetables, knowing that you are making a choice that benefits both your well-being and the planet.</p>
                </div>
                <div class="col-5">
                    <img src="assets/img/bg-product-1.png" class="d-block w-100" alt="..."
                        style="height: 25rem; width: 25rem">
                </div>
            </div>
            <hr>
        </div>
        <div class="container">
            <div class="row my-2">
                <div class="col-5">
                    <img src="assets/img/bg-product-2.png" class="d-block w-100" alt="..."
                        style="height: 25rem; width: 25rem">
                </div>
                <div class="col-7">
                    <p class="text-start fs-1 lh-1">Organic Fruits</p>
                    <p class="text-start fs-6">One of the primary advantages of organic fruits is their reduced exposure to harmful chemicals. By avoiding the use of synthetic pesticides and fertilizers, organic farming methods help to minimize the presence of pesticide residues on the fruit. This makes organic fruits a healthier choice for those looking to limit their exposure to potentially harmful substances. Organic fruits are also appreciated for their exceptional taste and quality. Many people find that organic produce has a richer and more intense flavor compared to conventionally grown fruits. </p>
                </div>
            </div>
            <hr>
            <div class="container">
                <div class="row my-2">
                    <div class="col-7">
                        <p class="text-start fs-1 lh-1">Organic Farming</p>
                        <p class="text-start fs-6">Organic farming is an agricultural approach that prioritizes the use of natural and sustainable practices to cultivate crops and raise livestock. It focuses on maintaining soil health, promoting biodiversity, and minimizing the use of synthetic inputs such as pesticides, fertilizers, and genetically modified organisms (GMOs). Organic farming aims to produce high-quality, nutrient-dense food while minimizing the impact on the environment and supporting the well-being of animals.</p>
                    </div>
                    <div class="col-5">
                        <img src="assets/img/blog-1.jpg" class="d-block w-100" alt="..."
                            style="height: 25rem; width: 25rem">
                    </div>
                </div>
            </div>

    </main>

</body>

</html>