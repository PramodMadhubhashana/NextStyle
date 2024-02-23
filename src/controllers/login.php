<?php

    session_start();
    require_once '../../src/models/login.php';   

    function loginUser($email, $password){
        
        $user = userLogin($email, $password);

        if(mysqli_num_rows($user) == 1){

            $userData = mysqli_fetch_assoc($user);

            $_SESSION['userId'] = $userData['user_id'];
            $_SESSION['userName'] = $userData['name'];       

            if($userData['user_type'] == 'client'){

                echo "<script>window.location.href='/public/client/home.html';</script>";
            }
            elseif($userData['user_type'] == 'admin'){

                echo "<script>window.location.href='/public/admin/adminPage.html';</script>";
            }
            else{
                echo "<script>alert('Invalid email or password');";
                echo "window.location.href='/public/client/Login.html';</script>";
                exit;     
            }
        }
        else {
            echo "<script>alert('Invalid email or 111password');";
            echo "window.location.href='/public/client/Login.html';</script>";
            exit;
        }
    }

?>