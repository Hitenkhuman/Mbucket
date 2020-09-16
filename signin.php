<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/4dedb1023f.js" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        Sign in</title>
    <link rel="stylesheet" href="./css/signin.css">
    <link rel="icon" href="./images/logo.png" type="image/png">
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
            <div class="col-12 col-md-8  order-12 order-md-1">
                <form class="form-inline">
                    <input class="form-control mr-sm-2 w-75 ml-3 mr-2" type="search" placeholder="Search" aria-label="Search">
                    <a href="">
                        <i class="fas fa-search mr-3" style="color: white;"></i>
                    </a>
                </form>
            </div>

            <div class="col-2 col-md-1 order-1 order-md-11">

                <!-- <a href="signin.php" style="color: white;">
                    <span class="fas fa-user-plus"> &nbsp;</span>
                </a> -->

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
                    <a class="nav-link" href="#">Home<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item pl-5">
                    <a class="nav-link" href="#">Mobiles</a>
                </li>
                <li class="nav-item pl-5">
                    <a class="nav-link" href="#">Compare</a>
                </li>
                <li class="nav-item pl-5">
                    <a class="nav-link" href="#">Price-Search</a>
                </li>
                <li class="nav-item pl-5">
                    <a class="nav-link" href="#">About US</a>
                </li>
                <li class="nav-item pl-5">
                    <a class="nav-link" href="#">Contact</a>
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
                            <div class="form-group col-12">
                                <label class="sr-only" for="exampleInputEmail3">Email address</label>
                                <input type="email" class="form-control form-control-sm mr-1" id="exampleInputEmail3" placeholder="Enter email">
                            </div>
                            <div class="form-group col-12">
                                <label class="sr-only" for="exampleInputPassword3">Password</label>
                                <input type="password" class="form-control form-control-sm mr-1" id="exampleInputPassword3" placeholder="Password">
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
                            <button type="button" class="btn btn-secondary btn-sm ml-auto" data-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-primary btn-sm ml-1">Log in</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <br>
    <h1>Sign in</h1>

    <div class="container">
        <form class="form row">
            <div class="form-group col-12 row">
                <i class="fas fa-user p-2" aria-hidden="true"></i>
                <input type="email" class="form-control col-10 col-sm-8" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email id">
                <small id="emailHelp" class="form-text text-muted col-12 col-sm-3">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group col-12 row">
                <i class="fas fa-mobile p-2" aria-hidden="true"></i>
                <input type="text" class="form-control col-10 col-sm-8" id="mobile" aria-describedby="mobileHelp" placeholder="Mobile Number">
                <small id="mobileHelp" class="form-text text-muted col-12 col-sm-3">We'll never share your mobile with anyone else.</small>
            </div>
            <div class="form-group col-12 row">
                <button class="btn btn-primary offset-md-2 offset-4 offset-md-4">
                    Generate Otp <i class="fas fa-key" aria-hidden="true"></i>
                </button>

            </div>

            <div class="form-group col-12 row">

                <input type="text" id="otp" class="form-control col-md-5 col-8 ml-4" aria-describedby="otphelp" placeholder="Enter Otp">
                <small id="otphelp" class="text-muted col-md-3"></small>



            </div>
            <div class="form-group col-12 row">
                <button class="btn resent offset-md-2 offset-4 offset-md-4" disabled>
                    Resend Otp <i class="fas fa-redo" aria-hidden="true"></i>
                </button>

            </div>
            <div class="form-group col-12 row">
                <i class="fas fa-unlock p-2" aria-hidden="true"></i>
                <input type="password" id="pass" class="form-control col-10 col-sm-8" placeholder="password" aria-describedby="passhelp">
                <small id="passhelp" class="text-muted col-12 col-sm-3">Help text</small>
            </div>
            <div class="form-group col-12 row">
                <i class="fas fa-lock p-2" aria-hidden="true"></i>
                <input type="text" id="conpass" class="form-control col-sm-8 col-10" placeholder="Confirm password" aria-describedby="conpasshelp">
                <small id="conpasshelp" class="text-muted col-12 col-sm-3">Help text</small>
            </div>
            <div class="form-group col-12">
                <button class="btn btn-success text-light">
                    Sign in <i class="fas fa-sign-in-alt" aria-hidden="true"></i>
                </button>
            </div>


        </form>


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
                    <p>Here you can use rows and columns to organize your footer content. Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
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
                    <a href="https://mdbootstrap.com/">
                        <strong> M-Bucket.com</strong>
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