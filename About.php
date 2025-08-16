<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>About Us</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #ffffff; /* Light purple background */
      color: #5a2848; /* Deep purple text */
      font-family: 'Arial', sans-serif;
    }

    h1 {
      font-size: 3rem;
      font-weight: bold;
      margin-bottom: 20px;
    }

    .content {
      margin-top: 50px;
      background-color: rgba(208, 182, 191, 0.6); /* Light overlay */
      padding: 30px;
      border-radius: 10px;
    }

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
            <a class="nav-link active" href="index.php">Home</a>
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
      
        
        

      </div>
    </div>
  </nav>
  
 



  <div class="container text-center">
    <div class="row justify-content-center">
      <div class="col-md-8 content">
        <h1>About Us</h1>
        <p>
          <strong>Carry Quest</strong> started with our customers in mind. Our mission is to provide an unparalleled shopping experience by delivering exceptional customer service and great merchandise at affordable prices.
        </p>
        <p>
          At <strong>Carry Quest</strong>, we value quality and honesty above all else. We work closely with manufacturers and vendors to provide unique and trending products without compromising price. We know how exciting it is to find good deals, so we strive to carry amazing products that you’ll enjoy! We also know that time is precious, so we made shopping simple. With an extensive range of products, you are bound to find what you need all in one place.
        </p>
        <p>
          <strong>Carry Quest</strong> is a brand you can trust. All our products are backed up by a 30-days money-back guarantee so you can shop risk-free and most importantly, stress-free. Our ultimate goal is to create a loyal customer base that will constantly return to our store to simply shop freely, comfortably, and conveniently.
        </p>
      </div>
    </div>
  </div>

  <!-- Bootstrap JavaScript -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
