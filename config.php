<?php
    $serverName = "localhost";
    $userName = "root";
    $password = "";
    $dbName = "bag_project";

    $conn = mysqli_connect($serverName,$userName,$password,$dbName);

    if(!$conn){
        die("connection Faild :".mysqli_connect_error());
    }
    else{
        echo "<script>console.log('Connected!!!');</script>";
    }


 ?>