<?php

    require_once '../../src/controllers/admin/updateproduct.php'; 

    if(isset($_POST["submit"]) ) {

        $pnme = $_POST['product_Name'];
        $qty = $_POST['Quantity'];
        $uprc = $_POST['Price'];
        $image_name = $_FILES["image"]["name"]; 
        $image_tmp = $_FILES["image"]["tmp_name"];
            echo $pnme;

        $upload_dir = "../../public/img/productImage/";
        $upload_path = $upload_dir . basename($image_name);
        move_uploaded_file($image_tmp, $upload_path);        

        //$insertdata = updateProduct($pnme, $qty, $uprc, $upload_path, $proId);
    }
    
     echo "p";
    

?>
