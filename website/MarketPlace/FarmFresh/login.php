
<!DOCTYPE html>
<html lang="en" >

<head>
    <?php require "head.php" ?>
    <title>Homework 3</title>
    <?php ob_start(); ?>  
              
   <meta charset="UTF-8">
    <title>Login</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">

    <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900|RobotoDraft:400,100,300,500,700,900'>
    <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>

 <link rel="stylesheet" href="css/login.css">

	  <style type="text/css">
	  #buttn{
		  color:#fff;
		  background-color: #f30;
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
            
                </ul>
            </div>
        </div>
    </nav>
            
<div class="pen-title">
  <h2>Login Form</h2>
</div>
<!-- Form Module-->
<div class="module form-module">
  <div class="">
  </div>
  <div class="form">
    <h2>Login to your account</h2>
	  <span style="color:red;"></span> 
   <span style="color:green;"></span>
    <form action="" method="post">
      <input type="text" placeholder="Username"  name="username"/>
      <input type="password" placeholder="Password" name="password"/>
      <input type="submit" id="buttn" name="submit" value="Login" />
    </form>
  </div>
  
  <div class="cta">Not registered?<a href="register.php" style="color:#f30;"> Create an account</a></div>
</div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    

</body>

</html>