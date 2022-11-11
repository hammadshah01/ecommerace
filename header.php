<!DOCTYPE html>
<html lang="en">

<head>
    <title>Zay Shop eCommerce HTML CSS Template</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="assets/img/apple-icon.png">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/templatemo.css">
    <link rel="stylesheet" href="assets/css/custom.css">

    <!-- Load fonts style after rendering the layout styles -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap">
    <link rel="stylesheet" href="assets/css/fontawesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css" />
    <!--
    
TemplateMo 559 Zay Shop

https://templatemo.com/tm-559-zay-shop

-->
</head>

<body>
    <!-- Start Top Nav -->



    <!-- Header -->
    <nav class="navbar navbar-expand-lg navbar-light ">
        <div class="container d-flex justify-content-between align-items-center">

            <a class="navbar-brand mb-2" href="index.php ">
                <img src="./assets/img/logo-footer.png" alt="" width="90px" height='auto'>
            </a>

            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse"
                data-bs-target="#templatemo_main_nav" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="align-self-center collapse main-nav navbar-collapse flex-fill  d-lg-flex justify-content-lg-between"
                id="templatemo_main_nav">
               
                <div class="flex-fill">
                    <ul class="nav navbar-nav d-flex justify-content-center mx-lg-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.php">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="shop.php?page=1">Shop</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.php">Contact</a>
                        </li>
                    </ul>
                </div>
                <div class="navbar align-self-center d-flex">
                    <div class="d-lg-none flex-sm-fill mt-3 mb-4 col-7 col-sm-auto pr-3">
                        <div class="input-group">
                            <input type="text" class="form-control" id="inputMobileSearch" placeholder="Search ...">
                            <div class="input-group-text">
                                <i class="fa fa-fw fa-search"></i>
                            </div>
                        </div>
                    </div>
                    <a class="nav-icon d-none d-lg-inline" href="#" data-bs-toggle="modal"
                        data-bs-target="#templatemo_search">
                        <i class="fa fa-fw fa-search text-dark mr-2"></i>
                    </a>
                    <a class="nav-icon position-relative text-decoration-none" href="cart.php">
                        <i class="fa fa-fw fa-cart-arrow-down text-dark mr-1"></i>
                        <span
                            class="position-absolute top-0 left-100 translate-middle badge rounded-pill " style="background-color:#B19361 ;color:white"><?php
                            include'config.php';
                            $sql3="SELECT * FROM cart";
                            $result3=mysqli_query($conn,$sql3);
                            echo(mysqli_num_rows($result3))
                            ?></span>
                    </a>
                    <a class="nav-icon position-relative text-decoration-none" href="wishlist.php">
                        <i class="fa fa-heart mr-3"></i>
                        <span
                            class="position-absolute top-0 left-100 translate-middle badge rounded-pill " style="background-color:#B19361 ;color:white"><?php
                        include 'config.php';
                        $sql4 = "SELECT * FROM wishlist";
                        $result4 = mysqli_query($conn, $sql4);
                        echo (mysqli_num_rows($result4))
                        ?></span>
                    </a> 
                    
                    <a class="nav-icon position-relative text-decoration-none" href="./user-info.php">
                        <i class="fa fa-user" aria-hidden="true"></i>
                      
                    </a>
                    
                
                </div>
            </div>

        </div>
    </nav>
    <!-- Close Header -->
        <!-- Modal -->
        <div class="modal fade bg-white" id="templatemo_search" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="w-100 pt-1 mb-5 text-right">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="search.php" method="GET" class="modal-content modal-body border-0 p-0">
                    <div class="input-group mb-2">
                        <input type="text" class="form-control" id="inputModalSearch" name="search" placeholder="Search ...">
                        <button type="submit" class="input-group-text bg-success text-light" name="submit">
                            <i class="fa fa-fw fa-search text-white"></i>
                        </button>
                    </div>
                </form>
            </div>
        </div>