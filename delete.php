<?php
    include 'config.php';
    $id = $_GET['id'];
    $deleteQuery = "DELETE FROM `cart` WHERE id='$id'";
    mysqli_query($conn,$deleteQuery);
    header('location:index.php');

    // if(mysqli_query($conn,$deleteQuery)){
    //     echo "<script>location.href='index.php'</script>";
    //     }
    //     else{
    //         echo "<script>alert('not deleted!!! !!')</script>"; 
    //     }



?>