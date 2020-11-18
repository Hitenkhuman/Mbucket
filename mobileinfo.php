<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/4dedb1023f.js" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="icon" href="./images/logo.png" type="image/png">
    <link rel="stylesheet" href="./css/mobileinfo.css">
</head>

<body>
    <header class="headernav">
        <div class="row p-2">
            <div class="col-1 d-sm-none">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <!-- <span class="navbar-toggler-icon"></span> -->
                    <i class="fas fa-bars"></i>
                </button>
            </div>

            <div class="col-6  col-md-2">
                <a href="index.php">
                    <img src="./images/logo.png" alt="logo" class="img-responsive pl-3">
                </a>
            </div>
            <div class="col-12 col-md-8  order-12 order-md-1 pt-3">
                <form class="form-inline">
                    <input class="form-control mr-sm-2 w-75 ml-3 mr-2" type="search" placeholder="Search" aria-label="Search">
                    <a href="">
                        <i class="fas fa-search mr-3" style="color: white;"></i>
                    </a>
                </form>
            </div>

            <div class="col-2 col-md-1 order-1 order-md-11">

                <a href="signin.php" style="color: white;" data-toggle="tooltip" data-placement="bottom" title="Sign in">
                    <span class="fas fa-user-plus"> &nbsp;</span>
                </a>

            </div>
            <div class="col-2 col-md-1 order-2 order-md-12">
                <span class="navbar-text">
                    <a data-toggle="modal" data-target="#loginModal" data-toggle="tooltip" data-placement="bottom" title="log in">
                        <span class="fa fa-sign-in"></span></a>
                </span>
            </div>

        </div>





    </header>

    <nav class="navbar navbar-expand-sm">

        <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item pl-5">
                    <a class="nav-link  " href="index.php">Home<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item pl-5">
                    <a class="nav-link" href="mobiles.php">Mobiles</a>
                </li>
                <li class="nav-item pl-5">
                    <a class="nav-link" href="compare.php">Compare</a>
                </li>
                <li class="nav-item pl-5">
                    <a class="nav-link" href="priceserch.php">Price-Search</a>
                </li>
                <li class="nav-item pl-5">
                    <a class="nav-link" href="aboutus.php">About US</a>
                </li>
                <li class="nav-item pl-5">
                    <a class="nav-link" href="contactus.php">Contact</a>
                </li>

            </ul>
        </div>



    </nav>


    <div id="loginModal" class="modal fade" role="dialog">
        <div class="modal-dialog modal-md modal-dialog-centered" role="content">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Login </h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-row">
                            <div class="form-group col-11 row">
                                <label class="sr-only" for="exampleInputEmail3">Email address</label>
                                <i class="fas fa-user p-2" aria-hidden="true"></i>
                                <input type="email" class="form-control col-10 form-control-sm mr-1" id="exampleInputEmail3" placeholder="Enter email">
                            </div>
                            <div class="form-group col-11 row">
                                <label class="sr-only" for="exampleInputPassword3">Password</label>
                                <i class="fas fa-lock p-2" aria-hidden="true"></i>
                                <input type="password" class="form-control col-10 form-control-sm mr-1" id="exampleInputPassword3" placeholder="Password">
                            </div>
                            <div class="form-group col-11 row">
                                <label class="sr-only" for="exampleInputPassword3">Capta</label>
                                <span class="bg-secondary col-10 col-sm-5">fjvbfj</span>
                                <i class="fas fa-sync p-2" aria-hidden="true"></i>
                                <input type="text" class="form-control col-10 col-sm-5 form-control-sm mr-1" id="exampleInputcapta3" placeholder="capta">
                            </div>



                            <div class="col-sm-auto">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox">
                                    <label class="form-check-label"> Remember me
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <button type="submit" class="btn btn-primary btn-sm m-2">Log in</button>
                            <button type="button" class="btn btn-secondary btn-sm m-2" data-dismiss="modal">Cancel</button>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="main">
        <div class="container">
            <?php
            try {
                require_once "pdo.php";
                if (isset($_GET['id'])) {
                    $stmt = $pdo->prepare("SELECT * FROM brands INNER JOIN models ON brands.brand_id=models.brand_id JOIN mobiles ON models.model_id=mobiles.model_id WHERE mobile_id=:id");
                    $stmt->execute(array(':id' => $_GET['id']));
                    $row = $stmt->fetch(PDO::FETCH_ASSOC);
                    echo '<div class="row">';
                    echo ' <h1>' . $row['brand_name'] . ' ' . $row['mobile_name'] . '</h1>';
                    echo '</div>';
                    echo '<div class="row">';
                    echo '<h3>Some kind of text goes here..</h3>';
                    echo ' </div>';
                    echo '<div class="row ">';
                    echo '<small>some extra text goes here...</small>';
                    echo '</div>';
                    echo '<div class="row ratting">';
                    for ($i = 0; $i < $row['recommendation']; $i++) {
                        echo '<span class="fa fa-star checked"></span>';
                    }
                    echo ' </div>';
                    echo '<div class="row">';
                    echo '<div class="col-12 col-md-6">';
                    echo '<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">';
                    echo '<div class="carousel-inner">';
                    echo ' <div class="carousel-item active">';
                    echo '<img src="./images/' . $row['mobile_image'] . '.png" class="d-block w-100" alt="mobile image">';
                    echo '</div>';
                    echo ' <div class="carousel-item">';
                    echo '<img src="./images/' . $row['mobile_image'] . 'i.png" class="d-block w-100" alt="mobile image">';
                    echo '</div>';
                    echo '<a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                    <span class="fa fa-chevron-left" aria-hidden="true" style="color: black;"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                    <span class="fa fa-chevron-right" aria-hidden="true" style="color: black;"></span>
                    <span class="sr-only">Next</span>
                </a>';
                    echo '</div>
                    </div>
                
                    </div>';
                    echo '<div class="col-12 col-md-6">';
                    echo '<div class="row pt-md-4 pt-2">';
                    echo '<h1>Key feature</h1>';
                    echo ' </div>';
                    echo '<div class="row pt-md-4 pt-2">';
                    echo '<h3>Price: ₹' . $row['price'] . '/-</h3>';
                    echo '</div>';
                    echo ' <div class="row pt-md-4 pt-2">';
                    echo '<h4>RAM:' . $row['ram'] . ' GB</h4>';
                    echo ' </div>';
                    echo '<div class="row pt-md-4 pt-2">';
                    echo '<h4>Front Camera:' . $row['front_camera'] . ' MP</h4>';
                    echo '</div>';
                    echo ' <div class="row pt-md-4 pt-2">';
                    echo ' <h4>Rear Camera:' . $row['rear_camera'] . ' MP</h4>';
                    echo ' </div>';
                    echo '<div class="row pt-md-4 pt-2">';
                    echo '<h4>Battery:' . $row['battery'] . ' MAh</h4>';
                    echo ' </div>';
                    echo '</div>';
                    echo '<div class="col-12">';
                    echo '<button class="btn btn-primary">full specification</button>';
                    echo '</div>';
                    echo '<div class="col-12 col-md-9">';
                    echo '<table class="table table-hover table-bordered">';
                    echo ' <thead>';
                    echo ' <tr>';
                    echo '<th scope="col">name</th>';
                    echo '<th scope="col">value</th>';
                    echo '</tr>';
                    echo '</thead>';
                    echo ' <tbody>';
                    echo ' <tr>';
                    echo '<td>spec</td>';
                    echo '<td>feature</td>';
                    echo '</tr>';
                    echo ' </tbody>';
                    echo '</table>';
                    echo '</div>';
                } else
                    echo "<h1>No Mobile Found</h1>";
            } catch (PDOException $error) {
                echo "ERROR" . $error->getMessage();
            }
            ?>
        </div>
    </div>


    <footer class="page-footer font-small text-black">

        <!-- Footer Links -->
        <div class="container text-center text-md-left">

            <!-- Footer links -->
            <div class="row text-center text-md-left mt-3 pb-3">

                <!-- Grid column -->
                <div class="col-md-4 col-lg-4 col-xl-4 mx-auto mt-3">
                    <h6 class="text-uppercase mb-4 font-weight-bold">About us</h6>
                    <hr>
                    <p>
                        In current situation is that finding best suitable mobile for us is vary difficult.
                        so we give all information like price, camera, processer, and many information that will help you to find best mobile for you.

                    </p>
                </div>
                <!-- Grid column -->

                <hr class="w-100 clearfix d-md-none">

                <!-- Grid column -->
                <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                    <h6 class="text-uppercase mb-4 font-weight-bold">Quick search</h6>
                    <hr>
                    <p>
                        <a href="#" class="footer-link">Your Account</a>
                    </p>
                    <p>
                        <a href="#" class="footer-link">Become an Affiliate</a>
                    </p>
                    <p>
                        <a href="#" class="footer-link">Shipping Rates</a>
                    </p>
                    <p>
                        <a href="#" class="footer-link">Help</a>
                    </p>
                </div>

                <!-- Grid column -->
                <hr class="w-100 clearfix d-md-none">

                <!-- Grid column -->
                <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                    <h6 class="text-uppercase mb-4 font-weight-bold">Contact us</h6>
                    <hr>
                    <p>
                        <i class="fas fa-home mr-3"></i> Gujarat, India</p>
                    <p>
                        <i class="fas fa-envelope mr-3"></i> info@gmail.com</p>
                    <p>
                        <i class="fas fa-phone mr-3"></i> +91 97238 21144<br>
                        <i class="fas fa-print mr-3"></i> +91 72848 82289</p>
                </div>
                <!-- Grid column -->

            </div>
            <!-- Footer links -->
            <!-- Grid column -->
            <div class="row justify-content-center">

                <!-- Social buttons -->
                <div class="text-center text-md-right">
                    <ul class="list-unstyled list-inline">
                        <li class="list-inline-item">
                            <a class="btn-floating btn-sm rgba-white-slight mx-1">
                                <i class="fab fa-facebook-f social-icon"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a class="btn-floating btn-sm rgba-white-slight mx-1">
                                <i class="fab fa-twitter social-icon"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a class="btn-floating btn-sm rgba-white-slight mx-1">
                                <i class="fab fa-google-plus-g social-icon"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a class="btn-floating btn-sm rgba-white-slight mx-1">
                                <i class="fab fa-linkedin-in social-icon"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a class="btn-floating btn-sm rgba-white-slight mx-1">
                                <i class="fab fa-instagram social-icon"></i>
                            </a>
                        </li>
                    </ul>
                </div>

            </div>
            <!-- Grid column -->

            <hr>

            <!-- Grid row -->
            <div class="row justify-content-center">

                <!-- Grid column -->


                <!--Copyright-->
                <p class="text-center text-md-left">© 2020 Copyright:
                    <a href="index.php">
                        <strong> M-bucket.com</strong>
                    </a>
                </p>
                <!-- Grid column -->



            </div>
            <!-- Grid row -->

        </div>
        <!-- Footer Links -->

    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>


</html>