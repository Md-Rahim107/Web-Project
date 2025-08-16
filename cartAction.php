<?php
include 'config.php';
if (isset($_GET['id'])) {
    $id = $_GET['id'];
      
} else {
    die("Product ID not found!");
}


session_start();

if (isset($_SESSION['email'])) {
    $email = $_SESSION['email'];
    
    $query = "SELECT * FROM `bag_list` WHERE id = '$id'";

    //$myquery = "SELECT * FROM `register` WHERE email='$email'";
    


    $data = mysqli_query($conn, $query);
    if (mysqli_num_rows($data) > 0) {
        $product = mysqli_fetch_assoc($data);
        $productName = $product['name']; // Replace with actual column name for product name
        $productPrice = $product['price'];



        $insertQuery = "INSERT INTO `cart` ( `email`, `name`, `price`) VALUES ('$email', '$productName', '$productPrice')";
        if (mysqli_query($conn, $insertQuery)) {
            echo "<script>alert('Product added to the cart successfully!!!')</script>"            ;
            echo "<script>location.href='index.php'</script>";
        } else {
            echo "Error: " . mysqli_error($conn);
        }
    } else {
        echo  "<script>alert('Product not found!!!')</script>"            ;
    }
} else {
    echo  "<script>alert('Please log in!!!')</script>" ;
    echo "<script>location.href='index.php'</script>";
           
}


























    ?>