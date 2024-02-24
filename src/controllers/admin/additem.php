<?php

    require_once '../../src/models/admin/insertitem.php';   

    function additem($name, $quantity, $unitprice, $img){

        $imageContent = file_get_contents($img);
        $image = addslashes($imageContent);

        $result = inserproduct($name, $quantity, $unitprice, $image);
        
        if($result){
            echo "<script>alert('Product Add Successfull..');</script>";
        }
        else{
            echo "<script>alert('Product Add Fail...');</script>";
        }
        

        
    }


?>