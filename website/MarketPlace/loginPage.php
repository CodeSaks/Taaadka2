
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
            <div id="headLogo">
                <div id="logo">
                    <!-- <img class="logo" src="images/logo/logo.jpg" alt="" srcset=""> -->
                </div>
                <div id="logo">
                    <br>
                    <h1><a href="#">Market<span>Place</span></a></h1>
                </div>
            </div>
            
            <div id="header-inner">
                
                <div id="top-nav">
                    <div id="bg">
                        
                    </div>
                  
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
                    <form class="form-signin" method="post" action="login.php">
                        <h1 class="h3 mb-3 font-weight-normal">Login</h1>
                        <input type="text" name="email" class="form-control" placeholder="Email" required autofocus=""></br>
                        <input type="password" name="password" class="form-control" placeholder="Password" required autofocus=""></br>
                        <button class="btn btn-lg btn-primary btn-block my-2" type="submit" name="login" value="login">Login</button></br></br></br></br></br>
                    </form>
                
                    <form class="form-signin" method="post" action="register.php">
                        <h1 class="h3 mb-3 font-weight-normal">Register</h1>
                        <input type="text" name="firstName" class="form-control" placeholder="First Name" required autofocus=""></br>
                        <input type="text" name="lastName" class="form-control" placeholder="Last Name" required autofocus=""></br>
                        <input type="text" name="email" class="form-control" placeholder="Email" required autofocus=""></br>
                        <input type="text" name="address" class="form-control" placeholder="Address" required autofocus=""></br>
                        <input type="text" name="phone" class="form-control" placeholder="Phone" required autofocus=""></br>
                        <input type="password" name="password" class="form-control" placeholder="Password" required autofocus=""></br>
                        <button class="btn btn-lg btn-primary btn-block my-2" type="submit" name="register" value="register">Register</button>
                    </form>


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

