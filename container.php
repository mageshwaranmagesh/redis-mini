<?php
error_reporting(0);
    $servername = "localhost:3307";
    $username = "root";
    $password = "";
    $dbname = "demo";
    
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    
    if($conn)
    {
        echo "connection ok";

    }
    else
    {
        echo "connention failed".mysqli_connect_error();
        
    }