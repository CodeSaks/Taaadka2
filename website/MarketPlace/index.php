<!DOCTYPE html>
<!-- Template by html.am -->
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Market Place</title>
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
                        <?php 
                        
                        if(isset($_COOKIE['session']))
                        {

                        echo '<a href="logout.php">Logout</a></li>';
                        }
                            else{
                            echo '<li><a href="loginPage.php">Login/Signup</a></li>';
                            }
                        ?>



                        <!-- <li><a href="loginPage.php">Login/Signup</a></li> -->
                    </ul>
                </div>
                <div class="clr"></div>
            </div>
        </header>
        <div class="feature">
            <div class="feature-inner">
                <h1>Home</h1>
            </div>
        </div>


        <div id="content">
            <div id="content-inner">

                <main id="contentbar">
                    <div class="article">
                        <p>Please follow this <a href="PetKo">link for Petshop</a>.</p>

                        <p>Please follow this <a href="Mobilo">link for Mobilo</a>.</p>

                        <p>Please follow this <a href="Pharmacy">link for Pharmacy</a>.</p>

                        <p>Please follow this <a href="FarmFresh">link for Farm Fresh</a>.</p>



                        <p>Please follow this <a href="5prod.php">link for Last 10 visited products of
                                Marketplace</a>.</p>
                        <p>Please follow this <a href="10best.php">link for Best 10 products of
                                Marketplace</a>.</p>



                        <p>
                            <script>
                                generateText(12)
                            </script>
                        </p>
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

        <!-- <div id="footerblurb">
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
        </div> -->
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