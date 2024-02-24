<?php

    require_once '../../php/db/mysql.php';    

    function inserproduct($proName, $qty, $uprc, $img){
        global $mysqli;

        $sql = "INSERT INTO products (	proName, proQty, unitPrice, img)
            VALUES ('$proName', $qty, $uprc, '$img')";
        
        $result = mysqli_query($mysqli, $sql);

        return $result;

    }   

?>

