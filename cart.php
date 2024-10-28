<?php
session_start();
require 'connection.php';
if (!isset($_SESSION['email'])) {
    header('location: login.php');
}
$user_id = $_SESSION['id'];
$user_products_query = "select it.id,it.name,it.price from users_items ut inner join items it on it.id=ut.item_id where ut.user_id='$user_id'";
$user_products_result = mysqli_query($con, $user_products_query) or die(mysqli_error($con));
$no_of_user_products = mysqli_num_rows($user_products_result);
$sum = 0;
if ($no_of_user_products == 0) {
    
?>
    <script>
        window.alert("No items in the cart!!");
    </script>
<?php
} else {
    while ($row = mysqli_fetch_array($user_products_result)) {
        $sum = $sum + $row['price'];
    }
}
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

<body style="background-image:url(img/fries.jpeg); background-size:cover">
    <div>
        <?php
        require 'header.php';
        ?>
        <br>
        <div class="container" style="font-family: 'Fraunces', serif; color:black; font-size:20px">
            <table class="table table-border table-dark">
                <tbody style="background-color: white; opacity:65%">
                    <tr>
                        <th>Item Number</th>
                        <th>Item Name</th>
                        <th>Price</th>
                        <th></th>
                    </tr>
                    <?php
                    $user_products_result = mysqli_query($con, $user_products_query) or die(mysqli_error($con));
                    $no_of_user_products = mysqli_num_rows($user_products_result);
                    $counter = 1;
                    while ($row = mysqli_fetch_array($user_products_result)) {

                    ?>
                        <tr>
                            <th><?php echo $counter ?></th>
                            <th><?php echo $row['name'] ?></th>
                            <th><?php echo $row['price'] ?></th>
                            <th><a href='cart_remove.php?id=<?php echo $row['id'] ?>'>Remove</a></th>
                        </tr>
                    <?php $counter = $counter + 1;
                    } ?>
                    <tr>
                        <th></th>
                        <th>Total</th>
                        <th>Rs <?php echo $sum; ?>/-</th>
                        <th><a href="success.php?id=<?php echo $user_id ?>" class="btn btn-primary" style="background-color: black;">Confirm Order</a></th>
                    </tr>
                </tbody>
            </table>
        </div>
        <br><br><br><br><br><br><br><br><br><br>
        <br><br><br><br><br><br><br><br><br><br>

        <!-- Footer -->
        <footer class="text-center text-lg-start bg-body-tertiary text-muted navbar-fixed-bottom ">
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