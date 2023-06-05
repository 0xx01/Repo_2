<?php
session_start();
require 'check_if_added.php';
?>
<!DOCTYPE html>
<html>

<head>
    <link rel="shortcut icon" href="img/lifestyleStore.png" />
    <title>king car Store</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- latest compiled and minified CSS -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
    <!-- jquery library -->
    <script type="text/javascript" src="bootstrap/js/jquery-3.2.1.min.js"></script>
    <!-- Latest compiled and minified javascript -->
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
    <!-- External CSS -->
    <link rel="stylesheet" href="./css/styles.css" type="text/css">
    <link rel="stylesheet" href="./css/external.css">
</head>

<body>
    <div>
        <?php
        require 'header.php';
        ?>
        <div class="container main">
            <div class="jumbotron">
                <h1>Welcome to Egy Car</h1>
                <p>KMA academy </p>
            </div>
        </div>
        <div class="container products">
            <!-- Row -->
            <div class="row">
                <!-- Card -->
                <!--div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <a href="cart.php">
                            <img src="img/pp1.jpg" alt="dmx1">
                        </a>
                        <center>
                            <div class="caption">
                                <h3>توتال مضخة كهربائية اوتوماتيكية محمولة للسيارة مع ضاغط هواء لنفخ الاطارات</h3>
                                <h>
                                    </h4>
                                    <p>Price: 1430ج</p>
                                    <?php if (!isset($_SESSION['email'])) {  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                    } else {
                                        if (check_if_added_to_cart(1)) {
                                            echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                        } else {
                                        ?>
                                            <a href="cart_add.php?id=1" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                    <?php
                                        }
                                    }
                                    ?>

                            </div>
                        </center>
                    </div>
                </div-->
                <!-- Card -->
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <a href="cart.php">
                            <img src="img/pp2.jpg" alt="dmx0219">
                        </a>
                        <center>
                            <div class="caption">

                                <h3>شريط قياس ستيل من توتال تولز 5 متر× 25 ملم</h3>
                                <p>Price:60ج</p>
                                <?php if (!isset($_SESSION['email'])) {  ?>
                                    <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                    <?php
                                } else {
                                    if (check_if_added_to_cart(2)) {
                                        echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                    } else {
                                    ?>
                                        <a href="cart_add.php?id=2" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                <?php
                                    }
                                }
                                ?>
                            </div>
                        </center>
                    </div>
                </div>
                <!-- Card -->
                <!--div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <a href="cart.php">
                            <img src="img/pp3.jpg" alt="DMXP2020">
                        </a>
                        <center>
                            <div class="caption">
                                <h3>مسدس رش مياة بلاستيك توتال تولز</h3>
                                <p>Price:130ج</p>
                                <?php if (!isset($_SESSION['email'])) {  ?>
                                    <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                    <?php
                                } else {
                                    if (check_if_added_to_cart(3)) {
                                        echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                    } else {
                                    ?>
                                        <a href="cart_add.php?id=3" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                <?php
                                    }
                                }
                                ?>
                            </div>
                        </center>
                    </div>
                </div-->
                <!-- Card -->
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <a href="cart.php">
                            <img src="img/pp4.jpg" alt="DMX UP&D">
                        </a>
                        <center>
                            <div class="caption">
                                <h3>كراون يعمل على كهرباء لاسلكي CT21055L - معدات ثقب</h3>
                                <p>Price: 3950ج</p>
                                <?php if (!isset($_SESSION['email'])) {  ?>
                                    <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                    <?php
                                } else {
                                    if (check_if_added_to_cart(4)) {
                                        echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                    } else {
                                    ?>
                                        <a href="cart_add.php?id=4" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                <?php
                                    }
                                }
                                ?>
                            </div>
                        </center>
                    </div>
                </div>
            </div>
            <!-- Row -->
            <div class="row">
                <!--Card -->
                <!--div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <a href="cart.php">
                            <img src="img/pp5.jpg" alt="DOORDMX">
                        </a>
                        <center>
                            <div class="caption">
                                <h3>منشار كهربائي من اي بي تي كراون Ct15080 – 500 وات</h3>
                                <p>Price: 1150ج</p>
                                <?php if (!isset($_SESSION['email'])) {  ?>
                                    <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                    <?php
                                } else {
                                    if (check_if_added_to_cart(5)) {
                                        echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                    } else {
                                    ?>
                                        <a href="cart_add.php?id=5" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                <?php
                                    }
                                }
                                ?>
                            </div>
                        </center>
                    </div>
                </div-->
                <!-- Card -->
                <!--div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <a href="cart.php">
                            <img src="img/pp6.jpg" alt="autoup">
                        </a>
                        <center>
                            <div class="caption">
                                <h3>جهاز الليزر الخطي من بوش GLL3X</h3>
                                <p>Price: 2169ج</p>
                                <?php if (!isset($_SESSION['email'])) {  ?>
                                    <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                    <?php
                                } else {
                                    if (check_if_added_to_cart(6)) {
                                        echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                    } else {
                                    ?>
                                        <a href="cart_add.php?id=6" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                <?php
                                    }
                                }
                                ?>
                            </div>
                        </center>
                    </div>
                </div-->
                <!-- Card -->
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <a href="cart.php">
                            <img src="img/pp7.jpg" alt="door.sh">
                        </a>
                        <center>
                            <div class="caption">
                                <h3>طقم مفكات متنوع من بوش 2 607 019 325، 33 قطعة مع ملحق اكس لاين</h3>
                                <p>Price: 700ج</p>
                                <?php if (!isset($_SESSION['email'])) {  ?>
                                    <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                    <?php
                                } else {
                                    if (check_if_added_to_cart(7)) {
                                        echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                    } else {
                                    ?>
                                        <a href="cart_add.php?id=7" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                <?php
                                    }
                                }
                                ?>
                            </div>
                        </center>
                    </div>
                </div>
                <!-- Card -->
                <!--div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <a href="cart.php">
                            <img src="img/pp8.jpg" alt="Favre Leuba">
                        </a>
                        <center>
                            <div class="caption">
                                <h3>ديوالت آلة تنعيم مدارية عشوائية 125 ملم</h3>
                                <p>Price: 4459ج</p>
                                <?php if (!isset($_SESSION['email'])) {  ?>
                                    <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                    <?php
                                } else {
                                    if (check_if_added_to_cart(8)) {
                                        echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                    } else {
                                    ?>
                                        <a href="cart_add.php?id=8" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                <?php
                                    }
                                }
                                ?>
                            </div>
                        </center>
                    </div>
                </div>
            </div-->
            <!-- Row -->
            <div class="row">
                <!-- Card -->
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <a href="cart.php">
                            <img src="img/pp9.jpg" alt="Raymond shirt">
                        </a>
                        <center>
                            <div class="caption">
                                <h3>مسطرة بتصميم مربع للقياس بمقاس 150 ملم، موديل E-46530</h3>
                                <p>Price: 186ج</p>
                                <?php if (!isset($_SESSION['email'])) {  ?>
                                    <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                    <?php
                                } else {
                                    if (check_if_added_to_cart(9)) {
                                        echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                    } else {
                                    ?>
                                        <a href="cart_add.php?id=9" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                <?php
                                    }
                                }
                                ?>
                            </div>
                        </center>
                    </div>
                </div>
                <!-- Card -->
                <!--div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <a href="cart.php">
                            <img src="img/pp10.jpg" alt="Charles shirt">
                        </a>
                        <center>
                            <div class="caption">
                                <h3>هيلتى شاكوش ايه بى تى 1500 وات 36 ملى صنف 5420</h3>
                                <p>Price: 2850ج</p>
                                <?php if (!isset($_SESSION['email'])) {  ?>
                                    <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                    <?php
                                } else {
                                    if (check_if_added_to_cart(10)) {
                                        echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                    } else {
                                    ?>
                                        <a href="cart_add.php?id=10" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                <?php
                                    }
                                }
                                ?>
                            </div>
                        </center>
                    </div>
                </div-->
                <!-- Card -->
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <a href="cart.php">
                            <img src="img/pp11.jpg" alt="HXR">
                        </a>
                        <center>
                            <div class="caption">
                                <h3>صاروخ تقطيع زاوية من اي بي تي كراون CT3109BMC، 1010 واط - 5 بوصة</h3>
                                <p>Price: 1225ج</p>
                                <?php if (!isset($_SESSION['email'])) {  ?>
                                    <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                    <?php
                                } else {
                                    if (check_if_added_to_cart(11)) {
                                        echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                    } else {
                                    ?>
                                        <a href="cart_add.php?id=11" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                <?php
                                    }
                                }
                                ?>
                            </div>
                        </center>
                    </div>
                </div>
                <!-- Card -->
                <!-- Card -->
                <!--div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <a href="cart.php">
                            <img src="img/pp12.jpg" alt="PINK">
                        </a>
                        <center>
                            <div class="caption">
                                <h3>رافعة كهربائية بسلك APT pa250 - سلك كهربائي</h3>
                                <p>Price: 3890ج</p>
                                <?php if (!isset($_SESSION['email'])) {  ?>
                                    <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                    <?php
                                } else {
                                    if (check_if_added_to_cart(12)) {
                                        echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                    } else {
                                    ?>
                                        <a href="cart_add.php?id=12" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                <?php
                                    }
                                }
                                ?>
                            </div>
                        </center>
                    </div>
                </div-->
                <!-- Card -->
                <!-- Card -->
                <!-- <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <a href="cart.php">
                            <img src="img/مساعدين استيراد.png" alt="ms">
                        </a>
                        <center>
                            <div class="caption">
                                <h3>مساعدين استيراد حاله ممتازه</h3>
                                <p>Price: 600ج</p>
                                <?php if (!isset($_SESSION['email'])) {  ?>
                                    <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                    <?php
                                } else {
                                    if (check_if_added_to_cart(6)) {
                                        echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                    } else {
                                    ?>
                                        <a href="cart_add.php?id=6" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                <?php
                                    }
                                }
                                ?>
                            </div>
                        </center>
                    </div>
                </div>  -->
                <!-- Card -->
                <!-- Card -->
                <!-- <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <a href="cart.php">
                            <img src="img/اكصدام خلفي mg5.png" alt="Titan 201">
                        </a>
                        <center>
                            <div class="caption">
                                <h3>اكصدام خلفي+مصفحهMG5</h3>
                                <p>Price: 2000ج</p>
                                <?php if (!isset($_SESSION['email'])) {  ?>
                                    <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                    <?php
                                } else {
                                    if (check_if_added_to_cart(6)) {
                                        echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                    } else {
                                    ?>
                                        <a href="cart_add.php?id=6" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                <?php
                                    }
                                }
                                ?>
                            </div>
                        </center>
                    </div>
                </div> -->
                <!-- Card -->
                <!-- Card -->
                <!-- <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <a href="cart.php">
                            <img src="img/كرتيره ياباني اصلي.png" alt="Titan 201">
                        </a>
                        <center>
                            <div class="caption">
                                <h3>كرتيره ياباني اصلى</h3>
                                <p>Price:4500ج</p>
                                <?php if (!isset($_SESSION['email'])) {  ?>
                                    <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                    <?php
                                } else {
                                    if (check_if_added_to_cart(6)) {
                                        echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                    } else {
                                    ?>
                                        <a href="cart_add.php?id=6" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                <?php
                                    }
                                }
                                ?>
                            </div>
                        </center>
                    </div>
                </div> -->
                <!-- Card -->
                <!-- Card -->
                <!-- <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <a href="cart.php">
                            <img src="img/فوانيس دايو لانوس.png" alt="Titan 201">
                        </a>
                        <center>
                            <div class="caption">
                                <h3>فوانيس دايو لانوس</h3>
                                <p>Price: 120ج</p>
                                <?php if (!isset($_SESSION['email'])) {  ?>
                                    <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                    <?php
                                } else {
                                    if (check_if_added_to_cart(6)) {
                                        echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                    } else {
                                    ?>
                                        <a href="cart_add.php?id=6" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                <?php
                                    }
                                }
                                ?>
                            </div>
                        </center>
                    </div>
                </div> -->
                <!-- Card -->
                <!-- Card -->
                <!-- <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <a href="cart.php">
                            <img src="img/فانوس تويوتا خلفي 2020.jpg" alt="Titan 201">
                        </a>
                        <center>
                            <div class="caption">
                                <h3> فانوس تويوتا كورولا2020</h3>
                                <p>Price: 4500ج</p>
                                <?php if (!isset($_SESSION['email'])) {  ?>
                                    <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                    <?php
                                } else {
                                    if (check_if_added_to_cart(6)) {
                                        echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                    } else {
                                    ?>
                                        <a href="cart_add.php?id=6" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                <?php
                                    }
                                }
                                ?>
                            </div>
                        </center>
                    </div>
                </div> -->
                <!-- Card -->
                <!-- Card -->
                <!-- <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <a href="cart.php">
                            <img src="img/كوبلن شمال استيراد لوجان الشكل القديم 2011.png" alt="Titan 201">
                        </a>
                        <center>
                            <div class="caption">
                                <h3>كوبلن شمال استيراد رينو لوجان2016</h3>
                                <p>Price: 500ج</p>
                                <?php if (!isset($_SESSION['email'])) {  ?>
                                    <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                    <?php
                                } else {
                                    if (check_if_added_to_cart(6)) {
                                        echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                    } else {
                                    ?>
                                        <a href="cart_add.php?id=6" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                <?php
                                    }
                                }
                                ?>
                            </div>
                        </center>
                    </div>
                </div> -->
                <!-- Card -->
                <!-- Card -->
                <!-- <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <a href="cart.php">
                            <img src="img/car_9.webp" alt="Titan 201">
                            <img src="img/" alt="titan">
                        </a>
                        <center>
                            <div class="caption">
                                <h3>طقم بيجو 1993-2002</h3>
                                <p>Price: 200ج</p>
                                <?php if (!isset($_SESSION['email'])) {  ?>
                                    <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                    <?php
                                } else {
                                    if (check_if_added_to_cart(6)) {
                                        echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                    } else {
                                    ?>
                                        <a href="cart_add.php?id=6" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                <?php
                                    }
                                }
                                ?>
                            </div>
                        </center>
                    </div>
                </div> -->
                <!-- Card -->
                <!-- Card -->
                <!-- <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <a href="cart.php">
                            <img src="img/فانوس تويوتا  ربع نقل خلفي يمين.jpg" alt="toyota" >
                        </a>
                        <center>
                            <div class="caption">
                                <h3>فانوس تويوتا ربع نقل يمين</h3>
                                <p>Price: 350ج</p>
                                <?php if (!isset($_SESSION['email'])) {  ?>
                                    <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                    <?php
                                } else {
                                    if (check_if_added_to_cart(6)) {
                                        echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                    } else {
                                    ?>
                                        <a href="cart_add.php?id=6" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                <?php
                                    }
                                }
                                ?>
                            </div>
                        </center>
                    </div>
                </div> -->
                <!--ELSHEHAWY-->
                <!-- <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <a href="cart.php">
                            <img src="img/حاملين فوانيس اماميه سيات اتيكا من ٢٠١٦ حتي ٢٠٢٠.png" alt="seaat">
                        </a>
                        <center>
                            <div class="caption">
                                <h3>حاملين فوانيس اماميه سيات اتيكا2016</h3>
                                <p>Price: 350ج</p>
                                <?php if (!isset($_SESSION['email'])) {  ?>
                                    <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                    <?php
                                } else {
                                    if (check_if_added_to_cart(6)) {
                                        echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                    } else {
                                    ?>
                                        <a href="cart_add.php?id=6" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                <?php
                                    }
                                }
                                ?>
                            </div>
                        </center>
                    </div>
                </div> -->
                <!--ELSHEHAWY-->
            </div>
        </div>
        <br><br><br><br><br><br><br><br>
        <footer class="footer">
            <div class="container">
                <center>
                    <p></p>
                </center>
            </div>
        </footer>
    </div>
</body>

</html>