<?php
session_start();
if (!isset($_SESSION['user_email'])) {
    echo "<script>window.open('login.php?not_admin=You are not an Admin!','_self')</script>";
} else {
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Admin Panel</title>
        <link rel="stylesheet" type="text/css" href="../css/style.css" media="all">
    </head>
    <body>
        <div class="main_wrapper">
            <div id="header">

            </div>
            <div id="right">
                <h2 style="text-align: center; margin-top: 10px; font-family: Cambria;">Manage Content</h2>
                <ul>
                    <li><a href="index.php">Admin Panel : Home</a></li>
                    <li><a href="logout.php">Logout</a></li>
                </ul>
            </div>
            <div id="left">
                <h2 style="color: red; text-align: center; font-family: Cambria; margin-top: 15px;"><?php echo @$_GET['logged_in']; ?></h2>
                <?php
                if (isset($_GET['insert_package'])) {
                    include("insert_package.php");
                }
                if (isset($_GET['view_packages'])) {
                    include("view_packages.php");
                }
                if (isset($_GET['edit_pack'])) {
                    include("edit_pack.php");
                }
                ?>
            </div>
        </div>
    </body>
    </html>
    <?php
}
?>
