<?php 
include'header.php';?>

<div class="row w-100 ">
<?php


include "config.php";
if(isset($_GET['search'])){
$search_term = mysqli_real_escape_string($conn, $_GET['search']);
?>

    <h3 class="card-title p-5">Search -
        <?php echo $search_term; ?>
    </h3>


 
       <?php 
          
            $sql="SELECT * FROM product  WHERE p_name LIKE '%{$search_term}%' OR p_des LIKE '%{$search_term}%'";
            $result = mysqli_query($conn,$sql);
            if(mysqli_num_rows($result)){
                while($row= mysqli_fetch_assoc($result)){

           
            
            ?>
                <div class="col-6 col-md-4 mb-4">
                    <div class="card h-80">
                        <a href="shop-single.html">
                            <img src="../admin/upload/<?php echo $row['p_img']?>" class="card-img-top" alt="...">
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
                            <a href="shop-single.html" class="h2 text-decoration-none text-dark"><?php echo $row['p_name'] ?></a>
                            <p class="card-text pt-4">
                            <?php echo substr($row['p_des'], 0, 100) . "..." ?>
                            </td>
                          <br>
                          <button class='btn btn-outline-primary mt-3'>read more</button>
                        </div>
                    </div>
                </div>


                

<?php
      }
            }}
            
            ?>
            </div>