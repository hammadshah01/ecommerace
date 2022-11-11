<?php
$conn = mysqli_connect('localhost', 'root', '', 'ecom') or die("connection failed");
$id = $_POST['id'];
$sql = "UPDATE cart SET qty = qty+1 WHERE id = {$id};";
if (mysqli_query($conn, $sql)) {
    $sql2 = "select * from cart where id={$id}";
    $result = mysqli_query($conn, $sql2);
    if (mysqli_num_rows($result)) {
        while ($row2 = mysqli_fetch_assoc($result)) {
            echo $row2["qty"];
        }
    }

} else {
    echo 0;
}

?>

<!-- $sql = UPDATE cart SET qty = qty+1 WHERE id = {$id};";
$sql .= "DELETE FROM cart WHERE id=$_SESSION[cart_id]"; -->