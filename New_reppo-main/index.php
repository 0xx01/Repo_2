<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="shortcut icon" href="pp.jpg" />
    <title>king Egy Car</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- latest compiled and minified CSS -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
    <!-- jquery library -->
    <script type="text/javascript" src="bootstrap/js/jquery-3.2.1.min.js"></script>
    <!-- Latest compiled and minified javascript -->
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
    <!-- External CSS -->
    <link rel="stylesheet" href="css/styles.css" type="text/css">
</head>

<body>
    <div>
        <?php
        require 'header.php';
        ?>
        <div id="bannerImage" style="height: 60vh;">
            <div class="container">
                <center>
                    <div id="bannerContent">
                        <h1>قسم لحام وتشكيل المعادن</h1>

                        <a href="products.php" class="btn btn-danger">Shop Now</a>
                    </div>
                </center>
            </div>
        </div>

 <div id="bannerImage" style="height: 60vh;">
            <div class="container">
                <center>
                    <div id="bannerContent">
                        <h1>قسم نجارة</h1>

                        <a href="products3.php" class="btn btn-danger">Shop Now</a>
                    </div>
                </center>
            </div>
        </div>



 <div id="bannerImage" style="height: 60vh;">
            <div class="container">
                <center>
                    <div id="bannerContent">
                        <h1>قسم خراطة</h1>

                        <a href="products4.php" class="btn btn-danger">Shop Now</a>
                    </div>
                </center>
            </div>
        </div>
<div id="bannerImage" style="height: 60vh;">
            <div class="container">
                <center>
                    <div id="bannerContent">
                        <h1>قسم كهرباء</h1>

                        <a href="products5.php" class="btn btn-danger">Shop Now</a>
                    </div>
                </center>
            </div>
        </div>
        <footer class="footer">
            <div class="container" style="padding:20px 0px; ">
                <center>
                    <p>KMA Academy</p>
                </center>
            </div>
        </footer>
    </div>
</body>

</html>
