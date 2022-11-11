<?php include 'header.php' ?>
<link rel="stylesheet" href="./assets/css/table.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.1.0/css/v4-shims.min.css"
    integrity="sha512-p++g4gkFY8DBqLItjIfuKJPFvTPqcg2FzOns2BNaltwoCOrXMqRIOqgWqWEvuqsj/3aVdgoEo2Y7X6SomTfUPA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">


<div class="card-body">
    <div class="container mt-5 ">
        <table class="table  table-bordered">
            <thead class="thead-dark text-center">
                <tr>
                    <th>Product</th>
                    <th>Price</th>
                    <th>Image</th>
                    <th colspan="2">Action</th>
                </tr>
            </thead>
            <?php

            include 'config.php';
            $sql1 = "SELECT * FROM wishlist";
            $result1 = mysqli_query($conn, $sql1);
            if (mysqli_num_rows($result1)) {

            ?>
            <tbody>
                <?php

                while ($row1 = mysqli_fetch_assoc($result1)) {


                ?>
                <tr>
                    <td id="name">
                        <p id="title">
                            <?php echo substr($row1['name'], 0, 20) ?>
                        </p>
                        
                    </td>

                    <td >
                        <p id='title'>
                            <?php echo $row1['price'] ?> $
                        </p>
                        
                    </td>

                    <td>
                        <img class="card-img" src="../admin/upload/<?php echo $row1['w_img'] ?>" width="300px" height="50px">
                    </td>
                    <form action="create-cart.php" method="POST">
                    <td>
                        <input type="text" hidden name="wish-id" value="<?php echo $row1['id'] ?>">
                        <input type="text" hidden name="product-id" value="<?php echo $row1['p_id'] ?>">
                        <button class="check-btn" type="submit" name='submit'>Add to Cart</button>
                    </td>
                    </form>
                    <td>
                        <a href="delete-wishlist.php?id=<?php echo $row1['id'] ?>"><i class="fa fa-trash-o"></i></a>
                    </td>  

                </tr>


                <?php
                }
            }
                ?>

            </tbody>
        </table>

       

    </div>
</div>

<script src="assets/js/jquery-1.11.0.min.js"></script>
<script src="assets/js/jquery-migrate-1.2.1.min.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/templatemo.js"></script>
<script src="assets/js/custom.js"></script>