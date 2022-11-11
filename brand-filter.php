<?php
include 'header.php';
?>
<!-- Start Content -->
<div class="container py-5">
    <div class="row">

        <div class="col-lg-3">
            <h1 class="h2 pb-4">Categories</h1>
            <ul class="list-unstyled templatemo-accordion">
                <li class="pb-3">
                    <a class="collapsed d-flex justify-content-between h3 text-decoration-none" href="#">
                        Brands
                        <i class="fa fa-fw fa-chevron-circle-down mt-1"></i>
                    </a>
                    <ul class="collapse show list-unstyled pl-3">
                        <?php
                            $sql2 = "SELECT * FROM brands";
                            $result2 = mysqli_query($conn, $sql2);
                            if (mysqli_num_rows($result2)) {
                                while ($row2 = mysqli_fetch_assoc($result2)) {
                            ?>
                        <li><a class="text-decoration-none"
                                href="brand-filter.php?brand=<?php echo $row2['brand_id'] ?>">
                                <?php echo $row2['brand_name'] ?>
                            </a></li>

                        <?php
                                }
                            }
                            ?>
                    </ul>
                </li>
            </ul>
        </div>

<?php
include 'config.php';
$brand = $_GET['brand'];

?>
        <div class="col-lg-9">
            <div class="row">
                <!-- <div class="col-md-6">
                                <ul class="list-inline shop-top-menu pb-3 pt-1">
                                    <li class="list-inline-item">
                                        <a class="h3 text-dark text-decoration-none mr-3" href="#">All</a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a class="h3 text-dark text-decoration-none mr-3" href="#">Men's</a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a class="h3 text-dark text-decoration-none" href="#">Women's</a>
                                    </li>
                                </ul>
                            </div> -->

<a href="shop.php?page=1"><button class="btn btn-success w-25 float-end"><i class="fa fa-arrow-left" aria-hidden="true"></i> Go to Shop</button></a>          
</div>

            <div class="row m-lg-1 text-center" id="mydata">
                <?php

$sql = "SELECT * FROM product WHERE p_brand=$brand";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result)) {
    while ($row = mysqli_fetch_assoc($result)) {
        ?>

                <div class="col-md-4">
                    <div class="card mb-4 product-wap rounded-0">
                        <div class="card rounded-0">
                            <img class="card-img rounded-0 img-fluid" src="../admin/upload/<?php echo $row['p_img'] ?>">
                            <div
                                class="card-img-overlay rounded-0 product-overlay d-flex align-items-center justify-content-center">
                                <ul class="list-unstyled">
                                    <li><a class="btn btn-success text-white" href="shop-single.php"><i
                                                class="far fa-heart"></i></a></li>
                                    <li><a class="btn btn-success text-white mt-2"
                                            href="shop-single.php?id=<?php echo $row['p_id'] ?>"><i class="far fa-eye"></i></a>
                                    </li>
                                    <li>
                                        <form action="create-cart.php" method="POST">
                                            <input type="text" hidden name="product-id" value="<?php echo $row['p_id'] ?>">
                                            <button type="submit" name=addToCart class='btn btn-success mt-2'><i
                                                    class="fas fa-cart-plus"></i></button>
                                    </li>
                                    </form>



                                </ul>
                            </div>
                        </div>
                        <div class="card-body">
                            <a href="shop-single.html" class="h3 text-decoration-none">
                                <?php echo substr($row['p_name'], 0, 25) . "..." ?>
                            </a>
                            <ul class="w-100 list-unstyled d-flex justify-content-between mb-0">

                                <li class="pt-2">
                                    <span class="product-color-dot color-dot-red float-left rounded-circle ml-1"></span>
                                    <span class="product-color-dot color-dot-blue float-left rounded-circle ml-1"></span>
                                    <span class="product-color-dot color-dot-black float-left rounded-circle ml-1"></span>
                                    <span class="product-color-dot color-dot-light float-left rounded-circle ml-1"></span>
                                    <span class="product-color-dot color-dot-green float-left rounded-circle ml-1"></span>
                                </li>
                            </ul>
                            <ul class="list-unstyled d-flex justify-content-center mb-1">
                                <li>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-muted fa fa-star"></i>
                                    <i class="text-muted fa fa-star"></i>
                                </li>
                            </ul>
                            <p class="text-center mb-0">$
                                <?php echo $row['p_price'] ?>.00
                            </p>
                        </div>
                    </div>
                </div>

                <?php
}
}else{
    echo" <h1 class='text-center'>😔</h1>";
    echo" <h1 class='alert alert-danger'>Sorry no Product of this Brand!</h1>";
}
?>
            </div>

            <!-- PRODUCT END -->

        </div>

        </div>
        </div>
        <!-- End Content -->

        <!-- Start Brands -->
        <section class="bg-light py-5">
            <div class="container my-4">
                <div class="row text-center py-3">
                    <div class="col-lg-6 m-auto">
                        <h1 class="h1">Our Brands</h1>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            Lorem ipsum dolor sit amet.
                        </p>
                    </div>
                    <div class="col-lg-9 m-auto tempaltemo-carousel">
                        <div class="row d-flex flex-row">
                            <!--Controls-->
                            <div class="col-1 align-self-center">
                                <a class="h1" href="#multi-item-example" role="button" data-bs-slide="prev">
                                    <i class="text-light fas fa-chevron-left"></i>
                                </a>
                            </div>
                            <!--End Controls-->

                            <!--Carousel Wrapper-->
                            <div class="col">
                                <div class="carousel slide carousel-multi-item pt-2 pt-md-0" id="multi-item-example"
                                    data-bs-ride="carousel">
                                    <!--Slides-->
                                    <div class="carousel-inner product-links-wap" role="listbox">

                                        <!--First slide-->
                                        <div class="carousel-item active">
                                            <div class="row">
                                                <div class="col-3 p-md-5">
                                                    <a href="#"><img class="img-fluid brand-img" src="assets/img/brand_01.png"
                                                            alt="Brand Logo"></a>
                                                </div>
                                                <div class="col-3 p-md-5">
                                                    <a href="#"><img class="img-fluid brand-img" src="assets/img/brand_02.png"
                                                            alt="Brand Logo"></a>
                                                </div>
                                                <div class="col-3 p-md-5">
                                                    <a href="#"><img class="img-fluid brand-img" src="assets/img/brand_03.png"
                                                            alt="Brand Logo"></a>
                                                </div>
                                                <div class="col-3 p-md-5">
                                                    <a href="#"><img class="img-fluid brand-img" src="assets/img/brand_04.png"
                                                            alt="Brand Logo"></a>
                                                </div>
                                            </div>
                                        </div>
                                        <!--End First slide-->

                                        <!--Second slide-->
                                        <div class="carousel-item">
                                            <div class="row">
                                                <div class="col-3 p-md-5">
                                                    <a href="#"><img class="img-fluid brand-img" src="assets/img/brand_01.png"
                                                            alt="Brand Logo"></a>
                                                </div>
                                                <div class="col-3 p-md-5">
                                                    <a href="#"><img class="img-fluid brand-img" src="assets/img/brand_02.png"
                                                            alt="Brand Logo"></a>
                                                </div>
                                                <div class="col-3 p-md-5">
                                                    <a href="#"><img class="img-fluid brand-img" src="assets/img/brand_03.png"
                                                            alt="Brand Logo"></a>
                                                </div>
                                                <div class="col-3 p-md-5">
                                                    <a href="#"><img class="img-fluid brand-img" src="assets/img/brand_04.png"
                                                            alt="Brand Logo"></a>
                                                </div>
                                            </div>
                                        </div>
                                        <!--End Second slide-->

                                        <!--Third slide-->
                                        <div class="carousel-item">
                                            <div class="row">
                                                <div class="col-3 p-md-5">
                                                    <a href="#"><img class="img-fluid brand-img" src="assets/img/brand_01.png"
                                                            alt="Brand Logo"></a>
                                                </div>
                                                <div class="col-3 p-md-5">
                                                    <a href="#"><img class="img-fluid brand-img" src="assets/img/brand_02.png"
                                                            alt="Brand Logo"></a>
                                                </div>
                                                <div class="col-3 p-md-5">
                                                    <a href="#"><img class="img-fluid brand-img" src="assets/img/brand_03.png"
                                                            alt="Brand Logo"></a>
                                                </div>
                                                <div class="col-3 p-md-5">
                                                    <a href="#"><img class="img-fluid brand-img" src="assets/img/brand_04.png"
                                                            alt="Brand Logo"></a>
                                                </div>
                                            </div>
                                        </div>
                                        <!--End Third slide-->

                                    </div>
                                    <!--End Slides-->
                                </div>
                            </div>
                            <!--End Carousel Wrapper-->

                            <!--Controls-->
                            <div class="col-1 align-self-center">
                                <a class="h1" href="#multi-item-example" role="button" data-bs-slide="next">
                                    <i class="text-light fas fa-chevron-right"></i>
                                </a>
                            </div>
                            <!--End Controls-->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End Brands-->

        <?php include 'footer.php'?>