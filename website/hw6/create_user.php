<!DOCTYPE html>
<!-- Template by html.am -->
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>PetKo</title>
    <link rel="stylesheet" href="index.css">


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
                        <li><a href="index.html">Home</a></li>
                        <li><a href="about.html">About</a></li>
                        <li><a href="products.html">Products/Services</a></li>
                        <li><a href="news.html">News</a></li>
                        <li><a href="contacts.php">Contact</a></li>
                        <li><a href="users.html">Users</a></li>
                        <li><a href="curl.php">CURL</a></li>
                        <li><a href="admin.html">Admin</a></li>
                    </ul>
                </div>
                <div class="clr"></div>
            </div>
        </header>
        <div class="feature">
            <div class="feature-inner">
                <h1>Users
                </h1>
            </div>
        </div>


        <div id="content">
            <div id="content-inner">

                <main id="contentbar">
                    <div class="article">
                        <?php
                            $servername = "db5012723904.hosting-data.io";
                            $username = "dbu1425408";
                            $password = "CMPE@272SJSU";
                            $dbname = "dbs10688165";
                            extract($_POST);

                            // Create connection
                            $conn = new mysqli($servername, $username, $password, $dbname, 3306);

                            // Check connection
                            
                            if ($conn->connect_error) {
                                die("Connection failed: " . $conn->connect_error);
                            }

                            $sql = "INSERT INTO user VALUES ('$fname', '$lname','$email', '$haddress', '$hphone', '$cphone')";
                            

                            
if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }

                            $conn->close();
                            ?>
                        <!--end log form -->
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