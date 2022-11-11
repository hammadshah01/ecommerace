
<html lang="en">

<?php session_start()?>
<?php
if (!isset($_SESSION['uname'])) {
    header('location:http://localhost/Ecom/front/login.php');
}

?>

<?php
if (isset($_POST['pay'])) {
    $p_id = $_POST['id'];
    echo $name = $_POST['name'];
    echo $adr = $_POST['address'];
    echo $phone = $_POST['phone'];
    echo $quantity = $_POST['quan'];
    echo $price = $_POST['price'];
    echo $orderID = $_POST['num'];
    echo $img = $_POST['img'];
    echo $date = date('F j, Y');
    $cartidis=$_POST['cart_id'];
    include 'config.php';
    if(!isset($_SESSION['cart_id'])){
        $sql = "INSERT INTO order_pen(product_id,name,date,quantity,price,p_img,address,phone,order_num) VALUES ({$p_id},'{$name}','{$date}',{$quantity},{$price},'{$img}','{$adr}',{$phone},{$orderID})";
        if (mysqli_query($conn, $sql)) {
            header("location:http://localhost/Ecom/front/thank.php");
        }
    }else{
       $sql = "INSERT INTO order_pen(product_id,name,date,quantity,price,p_img,address,phone,order_num) VALUES ({$p_id},'{$name}','{$date}',{$quantity},{$price},'{$img}','{$adr}',{$phone},{$orderID});";
         $sql .= "DELETE FROM cart WHERE id=$_SESSION[cart_id]";
        if (mysqli_multi_query($conn, $sql)) {
            header("location:http://localhost/Ecom/front/thank.php");
        }
    }

    }

 
// if(mysqli_query($conn,$sql)){
//     header("location:http://localhost/Ecom/front/thank.php");
// }

?>
<head>


    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order</title>
        <link rel="stylesheet" href="./assets/css/style.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />

</head>
<body>

    <?php
include 'config.php';



if (isset($_POST['submit'])) {
    $quan = $_POST['quan'];
    $price = $_POST['price'];
    $id = $_POST['id'];
    // $cartid = $_POST['cart_id'];
 
    $_SESSION['cart_id']=$_POST['cart_id'];
    $name = $_POST['name'];
    $ordId = (rand(10, 1000));
    $date = date('F j, Y');
    $total = $price * $quan;
    $sql = "SELECT * FROM product WHERE p_id = {$id} ";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result)) {
        while ($row = mysqli_fetch_assoc($result)) {

            ?>
    <div class="nav">
        <ul>
            <li>Home&nbsp;&nbsp; <i class="fa-solid fa-angle-right mt-1"></i></li>&nbsp;&nbsp;
            <li>Order&nbsp;&nbsp; <i class="fa-solid fa-angle-right mt-1"></i></li>&nbsp;&nbsp;
            <li>ID <?php echo $ordId ?>&nbsp;&nbsp;</li>
</ul>
        <h2>Order ID :<?php echo $ordId ?></h2>
        <div class="row">
            <div class="col">
                <span>Order date: <?php echo $date ?>&nbsp;&nbsp;&nbsp;&nbsp;</span>|
            </div>
            <div class="col">
               <span id="flight">&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa-solid fa-truck-fast"></i>&nbsp;Estimate delivery: after 2-3 businuess days</span>
            </div>

        </div>
    </div>
    <hr id="line">
    <div class="item-row">
        <div class="col2">
            <div class="image">
              <img  src="../admin/upload/<?php echo $row['p_img'] ?>"  alt="" width="50px">
            </div>
            <div class="img-title">
                <span><?php echo $name ?></span>
            </div>

        </div>
        <div class="col2 pr">
            <div class="price">
                <h3>$<?php echo $total ?>.00</h3>
            </div>
            <div class="quan">
                <span id="quan">Qnty: <?php echo $quan ?></span>
            </div>
        </div>
    </div>
    <hr id="line">
<div class="delivery">
    <h3 id="del">Delivery</h3>
    <span id="add">Address</span>
    <form action="<?php $_SERVER['PHP_SELF']?>" method="POST">

        <input hidden type="text" name="id" id="" value="<?php echo $row['p_id'] ?>">
    

        <input hidden type="text" name="quan" id="" value="<?php echo $quan ?>">
        <input hidden type="text" name="img" id="" value="<?php echo $row['p_img'] ?>">
        <input hidden type="text" name="date" id="" value="<?php echo $date ?>">
        <input hidden type="text" name="price" id="" value="<?php echo $price ?>" >
        <input hidden type="text" name="num" id="" value="<?php echo $ordId ?>" >
        <input type="text" name="name" id="" value="" placeholder="Enter Name" required>
        <input type="text" name="address" id="" value="" placeholder="Enter permanent Address" required>
<input type="text" name="phone" id="" value="" placeholder="Enter Phone" required>


        <div class="row-2">
            <div class="total">
                <h3>Total</h3><span id="t-price">$<?php echo $total ?>.00</span>
            </div>

            <button type="submit" name="pay" id="submit">Proceed to pay</button>
        </div>

    </form>
</div>
    <?php }
    }}
?>

</body>
</html>