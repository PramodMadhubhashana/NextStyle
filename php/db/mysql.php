<?php

    $host = 'localhost';
    $dbname = 'test';
    $username = 'root';
    $password = '';     
    
    $mysqli = new mysqli($host, $username, $password, $dbname);


    if($mysqli->connect_error) {
        die("connection faild : " .$mysqli->connect_error);
    }else{
        echo "Connect to mysql database Succesfull";
    }

?>