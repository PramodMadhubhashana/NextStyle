<?php

    require_once '../../php/db/mysql.php';    

    function insertUser($username, $address, $phoneNO, $email, $password, $usertype){
        global $mysqli;
        $sql = "INSERT INTO users (name, address, phone_no, email, password, user_type) 
                 VALUES ('$username', '$address', '$phoneNO', '$email', '$password', '$usertype')";

        $result = mysqli_query($mysqli, $sql);

        return $result;
    }

    
?>