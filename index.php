<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display&family=Fraunces:opsz,wght@9..144,300&family=Poppins:wght@600&family=Roboto+Slab:wght@500&family=Tangerine&family=Zeyada&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display&family=Fraunces:opsz,wght@9..144,300&family=Poppins:wght@600&family=Roboto+Slab:wght@500&family=Zeyada&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fraunces:opsz,wght@9..144,300&family=Poppins:wght@600&family=Roboto+Slab:wght@500&family=Zeyada&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&family=Roboto+Slab:wght@500&family=Zeyada&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&family=Roboto+Slab:wght@500&display=swap" rel="stylesheet">

    <link rel="shortcut icon" href="img/logo.jpg" />
    <title>Hell's Kitchen</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- latest compiled and minified CSS -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
    <!-- jquery library -->
    <script type="text/javascript" src="bootstrap/js/jquery-3.2.1.min.js"></script>
    <!-- Latest compiled and minified javascript -->
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
    <!-- External CSS -->
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <!-- Awesome fonts -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" integrity="sha384-3AB7yXWz4OeoZcPbieVW64vVXEwADiYyAEhwilzWsLw+9FgqpyjjStpPnpBO8o8S" crossorigin="anonymous">

    <style>
        #bannerImage {
            height: 750px;
            z-index: 100;

        }

        .navbar {
            margin-bottom: 0px;
            z-index: 1000;
        }

        .btn btn-danger:active {
            background-color: white;
            color: black;
        }
    </style>
</head>

<body>
    <div>
        <?php
        require 'header.php';
        ?>
        <div id="bannerImage" style="background:url('img/banner.jpg'); background-size:cover; background-color:rgba(0,0,0,0.7); font-family: 'Fraunces', serif;">
            <div class="container">
                <center>
                    <div id="bannerContent" style="background-color:rgba(0,0,0,0); font-size:80px; width:1200px; ">
                        <h1 style="font-size:78px;">Welcome to Hell's Kitchen !</h1>

                        <a href="products.php" class="btn btn-danger" id="odbtn" style="background-color:#9d7a66; font-size:16px; border-radius:30px; margin-top:100px; border:none;">
                            Order</a>
                    </div>
                </center>
            </div>
        </div>

        <p class="text-center" style="font-family: 'Tangerine', cursive; font-weight:bold; line-height:0.95; font-size:40px">"Every Meal is an Experience.<br> Discover a Culinary Journey Unlike Any Other."</p>

        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="item active">
                    <img src="img/slide1.jpg" alt="slide1">
                </div>

                <div class="item">
                    <img src="img/slide2.jpg" alt="slide2">
                </div>

                <div class="item">
                    <img src="img/slide3.jpg" alt="slide3">
                </div>
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

        
        <p class="text-center" style="font-family: 'Tangerine', cursive; font-weight:none; font-size:40px">"Experience the signature creations of our talented chefs.<br>Our Chef's Specials showcase the perfect harmony of flavors, <br>offering a unique and unforgettable dining experience.<br>Treat yourself to something extraordinary."</p>
    <section style="background-image: url(img/bgbffooter.jpg); background-size:cover;">
        <div class="container" style="font-family: 'Fraunces', serif; padding:10px">
            <div class="row">
                <div class="col-sm-4">
                    <div class="thumbnail" style="padding:0; border:0">
                        <a href="products.php">
                            <img src="img/3cat.jpeg" alt="pizza">
                        </a>
                        <center>
                            <div class="caption">
                                <p id="autoResize"><b>Pizza & Pasta</b></p>
                                <p>Savor Italy's finest with our handcrafted pizzas a perfect harmony of premium ingredients. Dive into the allure of our delectable pastas.</p>
                            </div>
                        </center>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="thumbnail" style="padding:0; border:0;">
                        <a href="products.php">
                            <img src="img/2cat.jpeg" alt="soft drinks">
                        </a>
                        <center>
                            <div class="caption">
                                <p id="autoResize"><b>Soft drinks</b></p>
                                <p>Sip and savor with our cool soft drinks. From classic cola to zesty citrus, elevate your meal with a refreshing fizz. Cheers!</p>
                            </div>
                        </center>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="thumbnail" style="padding:0; border:0;">
                        <a href="products.php">
                            <img src="img/1cat.jpeg" alt="fast foods">
                        </a>
                        <center>
                            <div class="caption">
                                <p id="autoResize"><b>Fast foods</b></p>
                                <p>Quick bites, big flavors! Enjoy our fast food favorites from juicy burgers to crispy fries. Satisfy your cravings swiftly and deliciously!</p>
                            </div>
                        </center>
                    </div>
                </div>
            </div>
        </div>
        <br><br> <br><br><br><br>
    </section>
        <!-- Footer -->
        <footer class="text-center text-lg-start bg-body-tertiary text-muted">
            <!-- Section: Social media -->
            <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
                <!-- Left -->
                <div class="me-5 d-none d-lg-block">
                    <span>Get connected with us on social networks</span>
                </div>
                <!-- Left -->

                <!-- Right -->
                <div style="padding-top:20px;">
                    <a href="" class="me-4 text-reset">
                        <i class="fab fa-facebook-f" style="font-size: 3rem;"></i>
                    </a>
                    <a href="" class="me-4 text-reset">
                        <i class="fab fa-twitter" style="font-size: 3rem;"></i>
                    </a>
                    <a href="" class="me-4 text-reset">
                        <i class="fab fa-google" style="font-size: 3rem;"></i>
                    </a>
                    <a href="" class="me-4 text-reset">
                        <i class="fab fa-instagram" style="font-size: 3rem;"></i>
                    </a>
                </div>
                <!-- Right -->
            </section>
            <!-- Section: Social media -->

            <!-- Section: Links  -->
            <section class="">
                <div class="container text-center text-md-start mt-5">
                    <!-- Grid row -->
                    <div class="row mt-3">
                        <!-- Grid column -->
                        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                            <!-- Content -->
                            <h6 class="text-uppercase fw-bold mb-4">
                                <i class="fas fa-gem me-3"></i>Hell's Kitchen
                            </h6>
                            <p>
                                "Savor perfection at Hell's Kitchen. Locally-inspired dishes, crafted with care. Exceptional taste, unforgettable moments. Join us at the heart of culinary excellence."
                            </p>
                        </div>
                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">

                        </div>
                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">

                        </div>
                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                            <!-- Links -->
                            <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
                            <p><i class="fas fa-home me-3"></i> Homagama,High-level road,Sri lanka</p>
                            <p>
                                <i class="fas fa-envelope me-3"></i>
                                Hellskitchen@hotel.com
                            </p>
                            <p><i class="fas fa-phone me-3"></i> 011 234 567 8</p>
                            <p><i class="fas fa-print me-3"></i> 011 234 567 8</p>
                        </div>
                        <!-- Grid column -->
                    </div>
                    <!-- Grid row -->
                </div>
            </section>
            <!-- Section: Links  -->

            <!-- Copyright -->
            <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
                
            </div>
            <!-- Copyright -->
        </footer>
    </div>
</body>

</html>