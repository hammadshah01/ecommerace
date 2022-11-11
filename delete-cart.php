<?php
            $id=  $_GET['id'];
            include 'config.php';
            $sql = "DELETE FROM cart WHERE id=$id";
            if(mysqli_query($conn, $sql)){
                header('location:http://localhost/ecom/front/cart.php');
            };
         

            ?>