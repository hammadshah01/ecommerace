<style>
    body{
        background-color: aquamarine;
    }
</style>

<script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script type="text/javascript">
    function JSalert() {
        swal("Your Order is Received", "Product will landed soon!", "success");
    }
</script>
<input type="text" hidden name="" id="">
<script>
JSalert();
    $(function () {
        setTimeout(function () {
            window.location.replace('http://localhost/Ecom/front/index.php');
        }, 5000);
    });

</script>
