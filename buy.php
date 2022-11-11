

<?php
include'header.php';



include'config.php';
if(isset($_POST['submit-log'])){
$num = $_POST['product-number'];
$title = $_POST['product-title'];
$quan = $_POST['product-quanity'];

}

?>

<h2 class="text-center m-5">Shop Now </h2>


<?php
include 'config.php';
$sql1="SELECT * FROM product WHERE p_id =$num";
$result=mysqli_query($conn,$sql1);
if(mysqli_num_rows($result)){
    while($row = mysqli_fetch_assoc($result)){
?>

<div class="card-body  ">
<div class="container">
<table class="table table-light table-bordered">
    <thead>
        <th>Product</th>
        <th>Title</th>
        <th>Quantity</th>
        <th>Price</th>
        <th>Action</th>
        
    </thead>
    <tbody>
        <td><img src="../admin/upload/<?php echo $row['p_img'] ?>" style=" width:120px;" alt="" class="text-center"></td>
        <td><?php echo $row['p_name'] ?></td>
        <td><?php echo $quan ?> item</td>
        <?php $total =($quan * $row['p_price'])?>
        <td> $<?php echo $total?></td>
        <td>
            <form action="design.php" method="POST">
            <input hidden name ="quan" type="text" value="<?php echo $quan ?>">
            <input hidden name ="id" type="text" value="<?php echo $num ?>">    
            <input hidden name ="name" type="text" value="<?php echo $row['p_name'] ?>">    
            <input hidden name ="price" type="text" value="<?php echo $total ?>">
            <input hidden name ="img" type="text" value="1">
            <button class="btn btn-dark"name='submit'>Submit Order</button>
        </form></td>
    </tbody>

</table></div></div>


  <?php  }
    }
    
    ?>