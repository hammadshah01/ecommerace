<style>
    #qty1 {
        width: 30px;
    }
</style>

<?php
$id = $_POST['product-id'];
include 'config.php';
$id = $_POST['product-id'];
$sql = "SELECT * FROM product WHERE p_id =$id ";
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
$sql4 = "SELECT * FROM wishlist WHERE p_id=$id";
$result4 = mysqli_query($conn, $sql4);
if (mysqli_num_rows($result4)) {
    header('Location: ' . $_SERVER['HTTP_REFERER']);
    exit;
} else {
    include 'config.php';
    $sql1 = "INSERT INTO wishlist(p_id,name,price,w_img) VALUES ({$_SESSION['p_id']},'{$_SESSION['p_title']}',{$_SESSION['p_price']},'{$_SESSION['p_img']}')";
    if (mysqli_query($conn, $sql1)) {
        header('Location: ' . $_SERVER['HTTP_REFERER']);
        exit;
    }
}



?>