<?php

    require_once '../../src/models/admin/insertitem.php';   

    function updateProduct($name, $quantity, $unitprice, $pathimg, $proId){

        $result = updateProduct($name, $quantity, $unitprice, $pathimg, $proId);
        

        if($result){
            echo "<script>alert('Add Products Succesfull...');";
            echo "window.location.href='/public/admin/edit_product.php';</script>";
            exit; 
        }
        else{
            echo "<script>alert('Product Add Fail...');</script>";
        }

        
    }



?>