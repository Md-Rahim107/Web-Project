<?php
    include 'config.php';
    $r_username = $_POST['r_username'];
    $r_pass = $_POST["r_pass"];
    $r_con_pass = $_POST["r_con_pass"];
    $r_email = $_POST["r_email"];
    $r_mobile = $_POST["r_mobile"];

    $img = $_FILES['image'];

    $imageLocation = $_FILES['image']['tmp_name'];
    $imageName = $_FILES['image']['name'];
    $image_des = "images/".$imageName;
    move_uploaded_file($imageLocation,$image_des);

    $_mobile_pattern = "/(\+88)?-?01[3-9]\d{8}/";
    $_email_pattern = "/(cse|eee)_\d{10}@lus\.ac\.bd/";

    $insert_query ="INSERT INTO `register`(`image`, `name`, `email`, `password`, `mobile`) VALUES ( '$image_des','$r_username', '$r_email','$r_pass', '$r_mobile')";
    

    $duplicate_email = mysqli_query($conn,"SELECT * FROM `register` WHERE email='$r_email'");

  
  

    if($r_pass !== $r_con_pass){
        echo "<script>alert('Pass and con-pass is not matching!!')</script>";
        echo "<script>location.href='register.php'</script>";
    }
   
    else if(mysqli_num_rows($duplicate_email)>0){
        echo "<script>alert('email already taken!!')</script>";
        echo "<script>location.href='register.php'</script>";
    }
    else{
        if(!mysqli_query($conn,$insert_query)){
            die("not inserted!!");
        }
        else{
            echo "<script>alert('Inserted!!')</script>";
            echo "<script>location.href='login.php'</script>";
        }  
    }