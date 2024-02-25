<?php

    require_once '../../src/controllers/cart.php'; 

    if(isset($_GET['proId']) && $_SERVER["REQUEST_METHOD"] == "POST") {
        $proId = $_GET['proId'];
        $qty = $_POST["qty"];
        $name = $_GET['nme'];
        $price = $_GET['prc'];   
        $userId = $_GET["uId"];
        $img = $_GET['img'];       

        $crt = cart($userId, $proId, $qty, $name, $price, $img);
    }
    else{
        echo "<script>alert('Try again Later');</script>";
    }
?>