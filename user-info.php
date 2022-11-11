<!doctype html>
<html lang="en">


<?php session_start()?>
<?php
if (!isset($_SESSION['uname'])) {
    header('location:http://localhost/Ecom/front/login.php');
} 

?>
<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />

</head>

<body>

<style>
    form{
        display: flex;
        flex-direction: column;
        align-items: center;
    }
    input{
        background: transparent;
        border: none;
        border-bottom: 2px solid green;
        padding: 5px;
        width: 20rem;
        margin-top: 2rem;
        outline: none;
    }

</style>
  
  <main>
<div class="card-body">
    <a href="index.php">
        <i class="fa-solid fa-xmark text-bg-danger p-2 float-end"></i>
    </a>
   
    <h2 class="card-title text-center p-5">
    <i class="fa fa-user text-center text-success display-3" aria-hidden="true"></i>
    </h2>
</div>
<form class="form" action="logout.php" method="POST">

<input type="text" name="name" id="" placeholder="" value="<?php echo $_SESSION['uname']?>" readonly>

<input type="text" name="username" id="" placeholder="" value="@<?php echo $_SESSION['u_username']?>" readonly>

<input type="text" name="email" id="" placeholder="" value="<?php echo $_SESSION['uemail'] ?>" readonly>

<button type="submit" class="btn btn-danger mt-4">Sign out</button>

</form>

  </main>
  
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>