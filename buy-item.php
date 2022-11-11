<!doctype html>
<html lang="en">

<head>
  <title>Order</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="../admin/assets/css/style.css" rel="stylesheet">
<link rel="stylesheet" href="../admin/assets/css/bootstrap.min.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />
<script src="alert/dist/sweetalert-dev.js"></script>
<link rel="stylesheet" href="alert/dist/sweetalert.css">

</head>

<body>
    <style>
        ol {
            list-style-type: none !important;
            padding: 0%;
            margin: 0%;
        }
    
        ol li {
            display: inline-block !important;
        }
    </style>
    <?php
    include 'config.php';
    
    if (isset($_POST['submit'])) {
        $quan = $_POST['quan'];
        $price = $_POST['price'];
        $id = $_POST['id'];
        $name = $_POST['name'];
        $ordId = (rand(10, 1000));
        $date = date('F j, Y');
    
    
    }
    
    
    ?>
    
    
    <div class="pagetitle p-3">
    
        <nav>
            <ol class="breadcrumb" style="text-decoration:none ;">
    
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>&nbsp; <i class="fa-solid fa-angle-right mt-1"></i>&nbsp;
                <li class="breadcrumb-item">Order</li> &nbsp;<i class="fa-solid fa-angle-right mt-1"></i>&nbsp;
                <li class="breadcrumb-item">#
                   ` <?php echo $ordId ?>`
                </li>
    </div>
    
    
    </ol>
    </nav>
    <h1>Order ID: #
        <?php echo $ordId ?>
    </h1>
    </div><!-- End Page Title -->
    
    <p>Order Date: <b>
            <?php echo $date ?>
        </b></p>
    <p><i class="fa-solid fa-plane-up"></i> Estimate Delivery: after 2 businuess days</p>
    <div class="container">
        <!-- <hr class="text-center" style="opacity:20% ;border:1px solid #000000;  ;width:100%"> -->
    </div>
    
    
    <?php
    include 'config.php';
    $sql = "SELECT * FROM product WHERE p_id = {$id} ";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result)) {
        while ($row = mysqli_fetch_assoc($result)) {
    
    
    ?>
    <div class="container">
        <h2 class="text-center">You Order is</h2>
    
        <div class="card-body">
    
            <div class="text-center">
                <img class="card-img-top" src="../admin/upload/<?php echo $row['p_img'] ?>" 
                    style="border-radius:10px; width: 25rem;" alt="">
            </div>
           
        </div>
    
        <p class="card-title text-center ">
            <?php echo $name ?>
        </p>
       <div class="container text-center">
            <p class=" card-text text-center">Qnty :<?php echo $quan ?></p>
    
            <br>
             <b class=" text-center">Price:$ <?php echo $price ?>.00
            </b>
            <br><br>
            <form action=""></form>
            <button class=" btn btn-success w-25 text-center mt-2 mb-3" onclick="JSalert()">proceed to pay</button>
        </div></div>
    
    <?php }
    }
     ?>





    </div>



<script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script type="text/javascript">
    function JSalert() {
        swal("Good job!", "Your Order is Recieved !", "success");
    }
</script>















  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js">
  </script>
</body>

</html>