<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style1.css">
    <title>Register</title>
    <style>
        body{
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f8f9fa;
            
        }
        .login-container{
            width: 550px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.8);
            color: #ffffff;
            background-color:#6d0c52;
            
        }
        
        .preview img {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            object-fit: cover; 
            box-shadow: 0px 0px 10px 0px #aaa;
            margin-top: 10px;
        }
    

    </style>
    
</head>
<body>
<div class="login-container rounded-3">
    <div class="p-4 rounded-3">
      
    <h2>Sign Up</h2>
    <!-- <form action="About.html" method="get" onsubmit="return form()"> -->
    <form action="registerAction.php" method="post" enctype="multipart/form-data" onsubmit="return form()">
            <div class="mb-3 preview text-center">
                <img id="previewImage" src="#" alt="Image Preview" style="display: none;">
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Upload Image</label>
                <input type="file" class="form-control" id="image" name="image" accept="image/*" onchange="showPreview(event);">
            </div>
            <div class="mb-3">
                <label for="ifname" class="form-label">Username</label>
                <input type="text" class="form-control" id="ifname" name="r_username">
                <span id="efname"></span>
            </div>
            <div class="mb-3">
                <label for="ipass" class="form-label">Password</label>
                <input type="password" class="form-control" id="ipass" name="r_pass">
                <span id="epass"></span>
            </div>
            <div class="mb-3">
                <label for="r_con_pass" class="form-label">Confirm Password</label>
                <input type="password" class="form-control" name="r_con_pass">
            </div>
            <div class="mb-3">
                <label for="iemail" class="form-label">Email</label>
                <input type="email" class="form-control" id="iemail" name="r_email">
                <span id="eemail"></span>
            </div>
            <div class="mb-3">
                <label for="imob" class="form-label">Mobile</label>
                <input type="tel" class="form-control" id="imob" name="r_mobile">
                <span id="emob"></span>
            </div>
            <button type="submit" class="btn btn-primary mt-3 col-12" name="submit">Register</button>
            <a href="login.php" class="d-block text-center text-white mt-3 ">Login here</a>
        </form>
    </div>
  </div>
  <script>
    function showPreview(event) {
        const previewImage = document.getElementById('previewImage');
        const file = event.target.files[0];

        if (file) {
            const reader = new FileReader();
            reader.onload = function(e) {
                previewImage.src = e.target.result;
                previewImage.style.display = 'block';
            };
            reader.readAsDataURL(file); // Convert the file to a Data URL
        }
    }
</script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
      <script src="script.js"></script> 
</body>
</html>