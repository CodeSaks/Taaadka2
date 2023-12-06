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
    
   
        <div class="feature">
            <div class="feature-inner">
                <h1>All Users</h1>
            </div>
        </div>
    

        <div id="content">
            <div id="content-inner">

                <main id="contentbar">
                    <div class="article">
                       <h1>Users: Petshop</h1>
                       <?php
                        $curl_handle = curl_init();
                        curl_setopt($curl_handle, CURLOPT_URL, "http://rutikssangle.com/hw6/company-users.php");
                        curl_setopt($curl_handle, CURLOPT_HEADER, 0);
                        curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, true);
                        $contents = curl_exec($curl_handle);
                        curl_close($curl_handle);


                        $users = preg_split('/<br[^>]*>/i', $contents);


                        foreach ($users as $user) {
                            echo "<tr>";
                            echo "<td>";
                            echo $user;
                            echo "</td>";
                            echo "</tr>";
                            echo "</br>";
                        }
                        ?>
                      
                      <div class="article">
                         <h1>Users: Farm Fresh</h1>
                       <?php
                        $curl_handle = curl_init();
                        curl_setopt($curl_handle, CURLOPT_URL, "http://pratikshamasalkar.com/HW5/userApi.php");
                        curl_setopt($curl_handle, CURLOPT_HEADER, 0);
                        curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, true);
                        $contents = curl_exec($curl_handle);
                        curl_close($curl_handle);


                        $users = preg_split('/<br[^>]*>/i', $contents);


                        foreach ($users as $user) {
                            echo "<tr>";
                            echo "<td>";
                            echo $user;
                            echo "</td>";
                            echo "</tr>";
                            echo "</br>";
                        }
                        ?>
                      
                       </div>
                      </div>
                </main>


                <div class="clr"></div>
            </div>
        </div>
    
    </body>

</html>