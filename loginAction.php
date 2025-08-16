<?php
include 'config.php';

    $l_email = $_POST['l_email'];
    $l_pass = $_POST['l_pass'];

    $result = mysqli_query($conn,"SELECT * FROM `register` WHERE email='$l_email' And password='$l_pass'");

    if(mysqli_num_rows($result)>0){
        session_start();
        $_SESSION['email'] = $l_email; //session create
        echo "<script>location.href='index.php'</script>";
        
    }
    else{
        echo "<script>alert('Invalid username and Password!!')</script>";
        echo "<script>location.href='login.php'</script>";
    }


?> 