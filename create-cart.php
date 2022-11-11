<style>
    #qty1 {
        width: 30px;
    }
</style>
<?php
include'config.php';
if(isset($_POST['wish-id'])){
    $wish=$_POST['wish-id'];
 $sql2 = "DELETE FROM wishlist WHERE id =$wish;";
    $result = mysqli_query($conn, $sql2);   
}


?>




<?php
$id = $_POST['product-id'];

include 'config.php';
// $id = $_POST['product-id'];
$sql = "SELECT * FROM product WHERE p_id =$id;";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result)) {
    while ($row = mysqli_fetch_assoc($result)) {


    $_SESSION['p_id'] = $row['p_id'];
    $_SESSION['p_title'] = $row['p_name'];
    $_SESSION['p_price'] = $row['p_price'];
    $_SESSION['p_quan'] = $row['p_quantity'];
    $_SESSION['p_img'] = $row['p_img'];



    }
}

// }

?>

<?php
$sql4 = "SELECT * FROM cart WHERE p_id=$id";
$result4 = mysqli_query($conn, $sql4);
if (mysqli_num_rows($result4)) {
    header('Location: ' . $_SERVER['HTTP_REFERER']);
    exit;
}
else{
 include 'config.php';
    $sql1 = "INSERT INTO cart(p_id,qty,price,title,c_img) VALUES ({$_SESSION['p_id']},{$_SESSION['p_quan']},{$_SESSION['p_price']},'{$_SESSION['p_title']}','{$_SESSION['p_img']}')";
    if(mysqli_query($conn, $sql1)){
      header('Location: ' . $_SERVER['HTTP_REFERER']);
        exit;
}
}



?>
