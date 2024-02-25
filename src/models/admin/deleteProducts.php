<?php

    require_once '../../../php/db/mysql.php';  

    function deleteProducts($proid){
        global $mysqli;

        $sql = "DELETE FROM productdetails WHERE proId = '$proid'";

        $result = mysqli_query($mysqli, $sql);
        return $result;
        
    }
?>
