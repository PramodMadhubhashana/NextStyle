<?php

    require_once '../../php/db/mysql.php';    

    function tabledat(){
        global $mysqli;

        $sql = "SELECT proId, proName, proQty, unitPrice, img FROM productdetails";
        $result = mysqli_query($mysqli, $sql);
        return $result;
    }
?>