<?php
include'config.php';

 $sql = "SELECT * FROM product";
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result)) {
                $output='';
                while ($row = mysqli_fetch_assoc($result)) {
                    $output.="<div class='col-md-4'>
                        <div class='card mb-4 product-wap rounded-0'>
                            <div class='card rounded-0'>";
                            $output.='<img class="card-img rounded-0 img-fluid" src="../admin/upload/<?php echo $row["p_img"] ?>">';
                            $output.="<div class='card-img-overlay rounded-0 product-overlay d-flex align-items-center justify-content-center'>
                                    <ul class='list-unstyled'>
                                        <li><a class='btn btn-success text-white' href='shop-single.php'><i class='far fa-heart'></i></a></li>";
                                      $output.='<li><a class="btn btn-success text-white mt-2" href="shop-single.php?id=<?php echo $row["p_id"] ?>"><i class="far fa-eye"></i></a></li>
                                        <li>
                                        <form action="create-cart.php" method="POST">
                                        <input type="text" hidden name="product-id" value="<?php echo $row["p_id"] ?>">
                                        <button type="submit"  name=addToCart class="btn btn-success mt-2"><i class="fas fa-cart-plus"></i></button>
                                        </li>
                                        </form>


                                       
                                    </ul>
                                </div>
                            </div>';
                            $output.='<div class="card-body">
                                <a href="shop-single.html" class="h3 text-decoration-none"><?php echo $row["p_name"] ?></a>
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
                                <p class="text-center mb-0">$<?php echo $row["p_price"] ?>.00</p>
                            </div>
                        </div>
                    </div>
                    </div>';
                  
                }
    $output .= '<div div="row">
                    <ul class="pagination pagination-lg justify-content-end" id="pagination">
                        <li class="page-item disabled">
                            <a id="1" class="page-link active rounded-0 mr-3 shadow-sm border-top-0 border-left-0" href="#" tabindex="-1">1</a>
                        </li>
                        <li class="page-item">
                            <a id="2" class="page-link rounded-0 mr-3 shadow-sm border-top-0 border-left-0 text-dark" href="#">2</a>
                        </li>
                        <li class="page-item">
                            <a id="3" class="page-link rounded-0 shadow-sm border-top-0 border-left-0 text-dark" href="#">3</a>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </div>';

    echo $output;

}else{

    echo"no";        }
?>
