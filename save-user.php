<?php
if(isset($_POST['register-submit']))
{
    $name=$_POST['name'];
    $email=$_POST['email'];
    $username=$_POST['username'];
    $pass=$_POST['password'];
    include'config.php';
    $sql="INSERT INTO user_info(name,username,email,password) VALUES ('{$name}','{$username}','{$email}','{$pass}')" ;
    if(mysqli_query($conn,$sql)){
        header("location:http://localhost/ecom/front/login.php");
    }
}

?>