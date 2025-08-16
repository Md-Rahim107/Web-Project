<?php
    include 'config.php';
    $id = $_POST['id'];
    $name= $_POST['name'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $mobile=$_POST['mobile'];
    $image = $_FILES['image'];
    if (!empty($_FILES['image']['name'])){

     $imageLocation = $_FILES['image']['tmp_name'];
     $imageName = $_FILES['image']['name'];
     $image_des = "images/".$imageName;
     move_uploaded_file($imageLocation,$image_des);

     $updateQuery = "UPDATE `register` SET `image`='$image_des',`name`='$name',`email`='$email',`password`='$password',`mobile`='$mobile' WHERE id='$id'";

     if(mysqli_query($conn,$updateQuery)){
            session_start();

            session_unset();
            session_destroy();
        echo "<script>alert('Updated!!! !!')</script>";
        echo "<script>alert('Please Log In Again !!')</script>";
        echo "<script>location.href='index.php'</script>";
     }else{
        echo "<script>alert('not Updated!!! !!')</script>";
     }
   }
   else{
      $imageLocation = $_FILES['image']['tmp_name'];
     $imageName = $_FILES['image']['name'];
     $image_des = "images/".$imageName;
     move_uploaded_file($imageLocation,$image_des);

     $updateQuery = "UPDATE `register` SET `name`='$name',`email`='$email',`password`='$password',`mobile`='$mobile' WHERE id='$id'";

     if(mysqli_query($conn,$updateQuery)){
            session_start();

            session_unset();
            session_destroy();
        echo "<script>alert('Updated!!! !!')</script>";
        echo "<script>alert('Please Log In Again !!')</script>";
        echo "<script>location.href='index.php'</script>";
     }else{
        echo "<script>alert('not Updated!!! !!')</script>";
     }

   }