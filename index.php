<?php include 'sidebar.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home - Book List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
   <link rel="stylesheet" href="style.css">
   <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
<style>

#image-logo{
  width: 15vh;
  height: auto;
  float: left;
 }

  .navbar-nav .nav-link {
   position: relative;
   padding-bottom: 5px;
   margin: 10px;
   transition: color 0.3s ease;
  }


  .navbar-nav .nav-link::after {
    content: "";
    position: absolute;
    left: 0;
    bottom: 0;
    height: 2px;
    width: 0;
    background-color: #940f6e; 
    transition: width 0.3s ease;
  }


      .navbar-nav .nav-link:hover::after {
        width: 100%;
      }
  
     
      #image-sidebar{
        width: 4vh;
        height: auto;
  
      }

      .carousal-item{
        height: 100vh;
        min-height: 300px;
      }
      
       .home .home-banner-1,
       .home .home-banner-2{
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center;
        min-height: 650px;
        position: relative;

       }
       .home .home-banner-1{
        background-image: url("images/slide1.png");
       }
       
       .home .home-banner-2{
        background-image: url("images/slide2.png");
       }
       .home .home-banner-text-1{
        position: absolute;
        top: 50%;
        left: 30%;
        transform: translate(-80%,-50%);
        
       }

       .home .home-banner-text-2{
        position: absolute;
        top: 50%;
        right:30%;
        transform: translate(50%,-50%);
        
       }


       .home .home-banner-text-1,
       .home .home-banner-text-2 p{
        color: #940f6e;
        font-size: 30px;
        font-family:Verdana, Geneva, Tahoma, sans-serif;
       }
       /* .home .home-banner-text-2 p{
        color: #940f6e;
        font-size: 30px;
       } */

       .box{
      /* border: 2px solid; */
      width: 100%;
      position: relative;
      overflow: hidden;
      


  }
  
  .content{
      width: 100%;
      height: 100%;
      color: aliceblue;
      position: absolute;
      background: rgba(36, 35, 35, 0.6);
      top: 0%;
      left: 0%;
     
      display: flex;
      align-items: center;
      justify-content: center;
      transition: 0.9s;
      opacity: 0;
     



  }
  .box:hover .content{
  
      opacity: 1;

  }

  .card-image img{
    width: 100%; /* Ensures the image fills the box width */
    height: auto; /* Maintains the image's aspect ratio */
    margin-bottom: 10px;
    float:left;
  }
   
    .card-content p{
      color: #940f6e;
      line-height: 1.9;
    }   
    #offcanvasSidebarLabel{
      font-size: 60px;
      
    }
    .img-fluid{
      height: 500px;
      width: 100%;
    }



</style>
</head>
<body>
  
  <nav class="navbar navbar-expand-lg sticky-top navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#"><img src="images/Carry_Quest__logo.png" class="img-fluid" id="image-logo"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav mx-auto">
          <li class="nav-item">
            <a class="nav-link active" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="About.php">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Services.php">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Contact.php">Contact</a>
          </li>
        </ul>
      
        <a data-bs-toggle="offcanvas" data-bs-target="#offcanvasSidebar" aria-controls="offcanvasSidebar">
       
        <img src="images/sidebar (3).png" class="img-fluid" id="image-sidebar" alt="Sidebar Image">
         

        </a>
        

      </div>
    </div>
  </nav>












  
 
  <!-- <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasSidebar" aria-labelledby="offcanvasSidebarLabel">
    <div class="offcanvas-header">
      <h5 class="offcanvas-title ms-auto" id="offcanvasSidebarLabel"><div><i class='bx bx-user-circle'></i></div></h5>
      <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
      <ul class="list-group">
        <li class="list-group-item"><a href="Login.php" class="btn btn-outline-primary w-100">
          Log In
        </a></li>
        <li class="list-group-item"><a href="Register.php" class="btn btn-outline-primary w-100">
          Sign Up
        </a></li>

      </ul>
    </div>
  </div> -->

  <?php
include 'config.php';

// Fetch banners from the `banner` table
$query = "SELECT * FROM `banner` ";
$result = mysqli_query($conn, $query);
?>
  
  
  
    
  <section id="home" class="home overflow-hidden">


<div id="carouselExampleIndicators" class="carousel slide">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <div class="home-banner home-banner-1" >
        <div class="home-banner-text-1">
          <p>Welcome <br>To<br>Carry Quest <br><a href="BagList.php"class="btn btn-outline-danger mt-5">Learn More</a></p>                   
        </div>
      </div>
    </div>
    <div class="carousel-item">
      <div class="home-banner home-banner-2" >
        <div class="home-banner-text-2">
          <p>Your Ultimate Destination <br>For Stylish Durable and<br>Varsatile Bags <br><a href="BagList.php"class="btn btn-outline-danger mt-5">Learn More</a></p>                   
        </div>
      </div>
    </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true">
      <!-- <span class="ti-angle-left"></span> -->
    </span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true">
      <!-- <span class="ti-angle-left"></span> -->
    </span>
    <span class="visually-hidden">Next</span>
  </button>
</div>






</section>



    <div class="row">
    <?php
include 'config.php';

// Fetching data from `bag_list` table
$query = "SELECT * FROM `bag_list`";
$result = mysqli_query($conn, $query);

while ($row = mysqli_fetch_array($result)) {
  echo "
  <div class='col-md-4 mt-5'>
    <div class='box'>
      <img src='" . $row['image'] . "' alt='Image' class='img-fluid'>
      <div class='content'>
        <a href='Bag.php?id=" . $row['id'] . "' class='btn btn-outline-warning'>
          Learn More
        </a>
      </div>
    </div>
  </div>";

}
?>

    </div>
    
    


    <footer class="footer bg-light footer-light sticky-bottom text-dark text-center py-3">
      <div class="container">
        <span>© 2024 Carry Quest. All rights reserved.</span>
      </div>
    </footer>


    

    <script src="scripts.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>
