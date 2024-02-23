<?php

    require_once '../../src/controllers/controllers.php';    

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $userName = $_POST["name"];
        $address = $_POST["Address"];
        $phoneNo = $_POST["Phone"];
        $email = $_POST["Email"];
        $password = $_POST["Password"];
        $usertype = "client";        

        $registration_result = registerUser($userName, $address, $phoneNo, $email, $password, $usertype);

        if($registration_result == "AFAR"){
            echo "<script>alert('All Fields Are Required');</script>";
        }
        if($registration_result == "IEF"){
            echo "<script>alert('Invalid Email Format');</script>";
        }
    }
?>
