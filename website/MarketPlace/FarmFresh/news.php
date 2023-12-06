<!DOCTYPE html>
<html>

<head>
    <?php require "head.php" ?>
    <title>Homework 5</title>
    <?php ob_start(); ?>
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
                        <a class="nav-link active" href="news.php">News</a>
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
    <main>
        <div class="px-4 py-5 my-5 text-center">
            <h1 class="display-5 fw-bold">News</h1>
            <div class="col-lg-6 mx-auto">
              <p class="lead mb-4">Latest news about the company!!! Farm Fresh Launches New Organic Produce Line, "Harvest Haven"

We are thrilled to announce the launch of our newest line of organic produce, "Harvest Haven," at Farm Fresh. Committed to providing our customers with the highest quality and freshest products, Harvest Haven brings together a curated selection of organically grown fruits and vegetables sourced from our network of local farmers.
By partnering with certified organic farms in the region, we are able to offer a wide range of fresh and flavorful produce that is grown without the use of synthetic pesticides, herbicides, or genetically modified organisms (GMOs). We believe in supporting sustainable farming practices that prioritize the health of both consumers and the environment.</p>
              
              <!-- <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
                <button type="button" class="btn btn-primary btn-lg px-4 gap-3">Primary button</button>
                <button type="button" class="btn btn-outline-secondary btn-lg px-4">Secondary</button>
              </div> -->
            </div>
        </div>
    </main>
</body>

</html>