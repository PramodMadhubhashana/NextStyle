<?php

    require_once '../../php/db/mysql.php';

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $userName = $_POST["name"];
        $address = $_POST["Address"];
        $phoneNo = $_POST["Phone"];
        $email = $_POST["Email"];
        $password = $_POST["Password"];
        $usertype = "client";  


        try{

            $query = "INSERT INTO users (name, address, phone_no, email, password, usertype)
                 VALUES ('$userName', '$address', '$phoneNo', '$email', '$password', '$usertype')";

            if ($mysqli->query($query) === TRUE) {
                echo "Registration successful!";
            } else {
                echo "Error: " . $mysqli->error;
            }

        }catch(Exception $e){

        }
    }
?>