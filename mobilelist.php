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
    <title>Mobile list</title>
    <link rel="icon" href="./images/M.png" type="image/png">
    <link rel="stylesheet" href="./css/mobilelist.css">
</head>

<body>
    <header class="headernav">
        <div class="row p-2">
            <div class="col-1 d-sm-none m-1">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <!-- <span class="navbar-toggler-icon"></span> -->
                    <i class="fas fa-bars" style="color: white;"></i>
                </button>
            </div>

            <div class="col-6  col-md-2">
                <a href="index.php">
                    <img src="./images/logo.png" alt="logo" class="img-responsive pl-3 pt-2" id="logoimage">
                </a>
            </div>
            <div class="col-12 col-md-8  order-12 order-md-1 pt-1 pb-1">
                <form class="form-inline" method="POST" action="livesearch.php">
                    <input class="form-control mr-sm-2 w-75 ml-3 searchbox" type="search" placeholder="Search" aria-label="Search" name="searchtext">
                    <button type="submit" class="btn srbtn">
                        <i class="fas fa-search mr-3" id="searchbtn"></i>
                    </button>

                </form>
            </div>

            <div class="col-2 col-md-1 order-1 order-md-11 pt-2">

                <a href="signin.php" style="color: white;" data-toggle="tooltip" data-placement="bottom" title="Sign in">
                    <span class="fas fa-user-plus"> &nbsp;</span>
                </a>

            </div>
            <div class="col-2 col-md-1 order-2 order-md-12" style="margin-top: 1px;">
                <span class="navbar-text">
                    <a data-toggle="modal" data-target="#loginModal" data-toggle="tooltip" data-placement="bottom" title="log in">
                        <span class="fa fa-sign-in"></span></a>
                </span>
            </div>

        </div>





    </header>

    <nav class="navbar navbar-expand-sm">

        <div class="collapse navbar-collapse justify-content-center " id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item pl-5">
                    <a class="nav-link" href="index.php">Home<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item pl-5">
                    <a class="nav-link current" href="mobiles.php">Mobiles</a>
                </li>
                <li class="nav-item pl-5">
                    <a class="nav-link" href="compare.php">Compare</a>
                </li>
                <li class="nav-item pl-5">
                    <a class="nav-link" href="pricesearch.php">Price-Search</a>
                </li>
                <li class="nav-item pl-5">
                    <a class="nav-link" href="aboutus.php">About US</a>
                </li>
                <li class="nav-item pl-5">
                    <a class="nav-link" href="contactus.php">Contact Us</a>
                </li>

            </ul>
        </div>



    </nav>
    <div aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="mobiles.php">Mobiles</a></li>
            <li class="breadcrumb-item active" aria-current="page">Mobile list</li>
        </ol>
    </div>

    <div id="loginModal" class="modal fade" role="dialog">
        <div class="modal-dialog modal-md modal-dialog-centered" role="content">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <div class="container">
                        <div class="row col-1 offset-3 offset-md-4">
                            <img src="./images/logo.png" alt="logo image">
                        </div>
                        <div class="row col-12">
                            <h4 class="modal-title">Login </h4>
                        </div>
                    </div>


                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-row">
                            <div class="form-group col-11 row">
                                <label class="sr-only" for="loginemail">Email address</label>
                                <i class="fas fa-user p-2" aria-hidden="true"></i>
                                <input type="email" class="form-control col-10 form-control-sm mr-1" id="loginemail" placeholder="Enter email id" required aria-describedby="loginemailHelp">
                                <small id="loginemailHelp" class="form-text  col-12 ml-2"></small>
                            </div>
                            <div class="form-group col-11 row">
                                <label class="sr-only" for="loginpass">Password</label>
                                <i class="fas fa-lock p-2" aria-hidden="true"></i>
                                <input type="password" class="form-control col-10 form-control-sm mr-1" id="loginpass" placeholder="Password" required aria-describedby="passHelp">
                                <small id="passHelp" class="form-text  col-12 ml-2"></small>
                            </div>
                            <div class="form-group col-11 row">
                                <label class="sr-only" for="exampleInputPassword3">Captcha</label>
                                <span class=" col-5 col-sm-3 ml-sm-4" id="captcha"></span>
                                <i class="fas fa-sync p-2" aria-hidden="true" id="refresh"></i>
                            </div>
                            <div class="form-group col-11 row">
                                <input type="text" class="form-control col-10 col-sm-5 form-control-sm ml-4" id="usercap" placeholder="Captcha" aria-describedby="capHelp">
                                <small id="capHelp" class="form-text  col-12 ml-1"></small>

                            </div>

                        </div>
                        <div class="form-row">
                            <button type="submit" class="btn btn-sm m-2" id="login" style="background: #2F2FA2;color:white;font-weight:bold;">Log in</button>
                            <button type="button" class="btn btn-danger btn-sm m-2" data-dismiss="modal">Cancel</button>
                        </div>
                        <div class="form-row ml-2">
                            <a href="forgetpass.php" style="text-decoration: none;color:#2F2FA2;">forget password? </a>
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
                    $stmt = $pdo->prepare("SELECT *from models WHERE brand_id=:id");
                    $stmt->execute(array(':id' => $_GET['id']));
                    $row = $stmt->fetchAll(PDO::FETCH_ASSOC);
                    foreach ($row as $key => $value) {
                        $mobimg = $value['mobile_image'];
                        $modelid = $value['model_id'];
                        $stmt = $pdo->prepare("SELECT * FROM brands INNER JOIN models ON brands.brand_id=models.brand_id JOIN mobiles ON models.model_id=mobiles.model_id WHERE mobile_id=:id");
                        $stmt->execute(array(':id' => $modelid));
                        $row1 = $stmt->fetch(PDO::FETCH_ASSOC);
                        echo ' <div class="row mbox rbx m-5">';
                        echo '<div class="col-12 col-md-5">';
                        echo ' <img src="./images/' . $mobimg . '.png" alt="mobile image" class="img-fluid">';
                        echo ' </div>';
                        echo '<div class="col-12 col-md-7">';
                        echo ' <div class="pt-md-3">';
                        echo '<h1 class="mobname">' . $row1["brand_name"] . ' ' . $value["mobile_name"] . '</h1>';
                        echo '</div>';
                        echo ' <div class="price">';
                        echo ' <h2><span> ₹ </span><span>' . $row1["price"] . '</span></h2>';
                        echo ' </div>';
                        echo '<div class="rating">';
                        for ($i = 0; $i < $row1['recommendation']; $i++) {
                            echo '<span class="fa fa-star checked"></span>';
                        }
                        $remain = 10 - $row1['recommendation'];
                        for ($i = 0; $i < $remain; $i++) {
                            echo '<span class="fa fa-star"></span>';
                        }
                        echo '</div>';
                        echo ' <div class="info">';
                        echo ' <a href="mobileinfo.php?id=' . $row1['model_id'] . '&& bid=' . $row1['brand_id'] . '" class="ckitbtn btn mt-3">Check it</a>';
                        echo ' </div>';
                        echo '  </div>';
                        echo '</div>';
                    }
                } else
                    echo '<div class="">
                 <div class="main1">
                     <h1 style="font-size: 70px;color:red;">Oops....</h1>
                     <h1 style="font-size: 50px;color:blue;">Mobile Not Found</h1>
                     <p>We will add it as soon as possible...<br />try another mobile?</p>
                     <a class="fbtn btn" href="mobiles.php">Go back</a>
                 </div>
             </div>';
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
                    <p> In current situation is that finding best suitable mobile for us is vary difficult.
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

                        <a data-toggle="modal" data-target="#loginModal" data-toggle="tooltip" data-placement="bottom" title="log in" class="footer-link">
                            Your Account</a>

                    </p>
                    <p>
                        <a href="mobiles.php" class="footer-link">Mobiles</a>
                    </p>
                    <p>
                        <a href="pricesearch.php" class="footer-link">Price Search</a>
                    </p>
                    <p>
                        <a href="contactus.php" class="footer-link">Contact Us</a>
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
                        <i class="fas fa-envelope mr-3"></i> mbucket07@gmail.com</p>
                    <p>
                        <i class="fas fa-phone mr-3"></i> +91 97238 21144<br>
                    </p>
                    <p>
                        <i class="fab fa-whatsapp mr-3" style="font-size: 20px;"></i> +91 72848 82289</p>
                    </p>
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
                            <a class="btn-floating btn-sm rgba-white-slight mx-1" href="https://www.facebook.com/">
                                <i class="fab fa-facebook-f social-icon"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a class="btn-floating btn-sm rgba-white-slight mx-1" href="https://twitter.com/search-home">
                                <i class="fab fa-twitter social-icon"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a class="btn-floating btn-sm rgba-white-slight mx-1" href="https://myaccount.google.com/profile">
                                <i class="fab fa-google-plus-g social-icon"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a class="btn-floating btn-sm rgba-white-slight mx-1" href="https://in.linkedin.com/">
                                <i class="fab fa-linkedin-in social-icon"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a class="btn-floating btn-sm rgba-white-slight mx-1" href="https://www.instagram.com/">
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
                    <a href="index.php" style="text-decoration: none;color:yellow;">
                        <strong> M-bucket.com</strong>
                    </a>
                </p>
                <!-- Grid column -->



            </div>
            <!-- Grid row -->

        </div>
        <!-- Footer Links -->

    </footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="./js/loginall.js"></script>
    <!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>


</html>