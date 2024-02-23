<?php
    
    require_once '../../src/models/models.php';     

    function registerUser($username, $address, $phoneNO, $email, $password, $usertype ){  

        $result = insertUser($username, $address, $phoneNO, $email, $password, $usertype);
        echo $result;
        echo "<script>const result = $result;</script>";
        if($result){
            ob_start();
            sleep(2);
            echo "<script>window.location.href='/public/client/login.html';</script>";
            exit;         }
        else{
            echo "<script>alert('Register Fail Try Again Later...');";
            echo "window.location.href='/public/client/register.html';</script>";
            exit;     
        }       

    }
?>