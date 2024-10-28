<?php
session_start();
session_unset();
session_destroy();
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

</head>

<body style="background-image:url(img/slide1.jpg); background-size: cover;">
    <div>
        <?php
        require 'header.php';
        ?>
        <br>
        <div class="container" style="opacity: 80%;">
            <div class="row">
                <div class="col-xs-12 text-center">
                    <div class="panel panel-primary" style="border-color:black;">
                        <div class="panel-heading" style="display:none;"></div>
                        <div class="panel-body" style="background-color: black; border-color:black; ">
                            <p style="color:white; font-family:'Fraunces', serif; font-size:20px">You have been logged out. <a href="login.php">Login again.</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <br><br><br><br><br><br><br><br><br><br><br>
        <br><br><br><br><br><br><br><br>

        <!-- Footer -->
        <footer class="text-center text-lg-start bg-body-tertiary text-muted fixed">
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