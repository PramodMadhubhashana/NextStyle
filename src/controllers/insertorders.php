<?php

    require_once '../models/insertorders.php';

    if(isset($_GET['uid'])){
        $uid = $_GET['uid'];
        $tprice = $_GET['tprc'];
        
    }

    $result = insertorders($uid, $tprice);

    if($result > 0 ){
        $orderID = mysqli_insert_id($mysqli);       

    }
    
    $cartproductlist = Cartproductlist($uid);

    $productIds = $cartproductlist['productIds'];
    $quantities = $cartproductlist['quantities'];

    foreach($productIds as $index => $productId){
        $quantity = $quantities[$index];
        $orderItemResult  =  order_Item($orderID, $productId, $quantity);  
    }

    
    






?>

