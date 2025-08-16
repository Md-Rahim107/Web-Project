<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #ffffff;
            font-family: Arial, sans-serif;
        }
        .contact-form {
            max-width: 500px;
            margin: 50px auto;
            padding: 20px;
            background-color: rgba(203, 167, 180, 0.6);
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
        h1{
            color: #000000;
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
      
     
      <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasSidebar" aria-labelledby="offcanvasSidebarLabel">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title ms-auto" id="offcanvasSidebarLabel"><div><i class='bx bx-user-circle'></i></div></h5>
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
          <ul class="list-group">
            <li class="list-group-item"><a href="Login.html" class="btn btn-outline-primary w-100">
              Log In
            </a></li>
            <li class="list-group-item"><a href="Register.html" class="btn btn-outline-primary w-100">
              Sign Up
            </a></li>
    
          </ul>
        </div>
      </div>


    <div class="contact-form">
        <h1>Contact us</h1>
        <form>
            <div class="mb-3">
                <input type="text" class="form-control" placeholder="Name" name="name" require>
            </div>
            <div class="mb-3">
                <input type="email" class="form-control" placeholder="Email *" name="email" required>
            </div>
            <div class="mb-3">
                <input type="text" class="form-control" placeholder="Phone number" name="phone" require>
            </div>
            <div class="mb-3">
                <textarea class="form-control" rows="4" placeholder="Comment" name="comment" require></textarea>
            </div>
            <button type="submit" class="btn btn-outline-dark" onclick="alert('Your message has been sent!')">Send</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>