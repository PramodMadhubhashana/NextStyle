<?php

    require_once '../../src/controllers/cart.php'; 

    if(isset($_GET['proId'])) {
        $proId = $_GET['proId'];
        echo $proId;
    }
    else{
        echo "<script>alert('Try again Later');</script>";
    }






?>