<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style1.css">
    <title>Login</title>
    <style>
        body{
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f8f9fa;
            
        }
        .login-container{
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.8);
            color: #ffffff;
            width: 400px;
            background-color:#6d0c52;
        }

       
    </style>
     <script src="script1.js"></script>
</head>
<body>
<div class="login-container rounded-3">
    <div class="p-5 rounded-3">
      
  
    <form action="loginAction.php" method="post" onsubmit="return form1()">
                    <div class="mb-3">
                           <h3>Login Form</h3> 
                    </div>
                    <div class="mb-3">
                      Email :
                      <input type="text" class="form-control"id="iemail" name="l_email">
                      <span id="eemail"></span><br>
                    </div>

                    <div class="mb-3">
                      Password :
                      <input type="text" class="form-control" id ="ipass"name="l_pass">
                      <span id="epass"></span><br>
                    </div>
                    
                   
                    <button type="submit" class="btn btn-primary col-12" name="login">Login</button>
                    <a href="Register.php" class="d-block text-center text-white mt-3 ">Register here</a>
                </form>
    </div>
  </div>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>