<?php include "header.php"?>
<link rel="stylesheet" href="./assets/css/table.css">
<!-- Start Banner Hero -->
    <div id="template-mo-zay-hero-carousel" class="carousel slide" data-bs-ride="carousel">
        <ol class="carousel-indicators">
            <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="0" class="active"></li>
            <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="1"></li>
            <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="2"></li>
        </ol>
        <div class="carousel-inner ">
            <div class="carousel-item active">
                <div class="container">
                    <div class="row p-5">
                        <div class="mx-auto col-md-8 col-lg-6 order-lg-last ml-1 p-3">
                            <img class="img-fluid mb-5" src="./assets/img/banner_img_03.jpg" width='90%' height="500px" alt="">
                        </div>
                        <div class="col-lg-6 mb-0 d-flex align-items-center">
                            <div class="text-align-left align-self-center">
                                <h1 class="h1">Exclusive Design</h1>
                                <h3 class="h2">Casual line with short design </h3>
                                <p>
                                Our template is fully customizable. You can change color combination, fonts, icons, contents, images etc. You can also
                                add custom css.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="container">
                    <div class="row p-5">
                        <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                            <img class="img-fluid" src="./assets/img/banner_img_02.jpg" alt="">
                        </div>
                        <div class="col-lg-6 mb-0 d-flex align-items-center">
                            <div class="text-align-left">
                                <h1 class="h1">Proident occaecat</h1>
                                <h3 class="h2">Aliquip ex ea commodo consequat</h3>
                                <p>
                                Our template is fully customizable. You can change color combination, fonts, icons, contents, images etc. You can also
                                add custom css.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <a class="carousel-control-prev text-decoration-none w-auto ps-3" href="#template-mo-zay-hero-carousel" role="button" data-bs-slide="prev">
            <i class="fas fa-chevron-left"></i>
        </a>
        <a class="carousel-control-next text-decoration-none w-auto pe-3" href="#template-mo-zay-hero-carousel" role="button" data-bs-slide="next">
            <i class="fas fa-chevron-right"></i>
        </a>
    </div>
    <!-- End Banner Hero -->


    <!-- Start Categories of The Month -->
    <section class="container py-5">
        <div class="row text-center pt-3">
            <div class="col-lg-6 m-auto">
                <h1 class="h1">Categories of The Month</h1>
                <p>
                    Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                    deserunt mollit anim id est laborum.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-4 p-5 mt-3">
                <a href="#"><img src="./assets/img/category_img_01.jpg" class="rounded-circle img-fluid border"></a>
                <h5 class="text-center mt-3 mb-3">Watches</h5>
                <p class="text-center"><a class="btn btn-success">Go Shop</a></p>
            </div>
            <div class="col-12 col-md-4 p-5 mt-3">
                <a href="#"><img src="./assets/img/category_img_02.jpg" class="rounded-circle img-fluid border"></a>
                <h2 class="h5 text-center mt-3 mb-3">Shoes</h2>
                <p class="text-center"><a class="btn btn-success">Go Shop</a></p>
            </div>
            <div class="col-12 col-md-4 p-5 mt-3">
                <a href="#"><img src="./assets/img/category_img_03.jpg" class="rounded-circle img-fluid border"></a>
                <h2 class="h5 text-center mt-3 mb-3">Accessories</h2>
                <p class="text-center"><a class="btn btn-success">Go Shop</a></p>
            </div>
        </div>
    </section>
    <!-- End Categories of The Month -->


    <!-- Start Featured Product -->
    <section class="bg-light">
        <div class="container py-5">
            <div class="row text-center py-3">
                <div class="col-lg-6 m-auto">
                    <h1 class="h1">Featured Product</h1>
                    <p>
                        Reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                        Excepteur sint occaecat cupidatat non proident.
                    </p>
                </div>
            </div>
            
<div class="row">
            <?php 
            include 'config.php';
            $sql="SELECT * FROM product";
            $result = mysqli_query($conn,$sql);
            if(mysqli_num_rows($result)){
                
                while($row= mysqli_fetch_assoc($result)){

           
            
            ?>
                <div class="col-4 mb-4">
                    <div class="card h-80 overflow-hidden">
                        <a href='shop-single.php?id=<?php echo $row['p_id'] ?>' style="height:250px ;">
                            <img src="../admin/upload/<?php echo $row['p_img']?>" class="card-img-top h-100 " alt="..."/>
                        </a>
                        <div class="card-body">
                            <ul class="list-unstyled d-flex justify-content-between">
                                <li>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-muted fa fa-star"></i>
                                    <i class="text-muted fa fa-star"></i>
                                </li>
                                <li class="text-muted text-right">$<?php echo $row['p_price']?></li>
                            </ul>
                            <a style="font-size: 18px !important; font-weight: 600;" href="shop-single.php" class="h2 text-decoration-none text-dark "><?php echo $row['p_name'] ?></a>
                            <p style="font-size: 14px !important;" class="card-text mt-2">
                            <?php echo substr($row['p_des'], 0, 20) . "..." ?>
                </p>
                        
                    <form action="create-cart.php" method="POST">
                        <input type="text" hidden name="product-id" value="<?php echo $row['p_id'] ?>">
                        <button name="addToCart" class='check-btn mt-3'>Add to cart</button>
                    </form>
                   
                        </div>
                    </div>

                </div>
               







<?php
      }
            }
            
            ?>
               
   
    <!-- End Featured Product -->
            </div>
        </div>
    </section>


<?php include'footer.php'?>