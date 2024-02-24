<?php

    require_once '../../src/controllers/admin/additem.php'; 

    if(isset($_POST["submit"])) {

        $pnme = $_POST['product_Name'];
        $qty = $_POST['Quantity'];
        $uprc = $_POST['Price'];

        if(isset($_FILES["image"]) && $_FILES["image"]["error"] == 0) {
            $image = $_FILES["image"]["tmp_name"];            
            $insertdata = additem($pnme, $qty, $uprc, $image);    
        }
    }
?>