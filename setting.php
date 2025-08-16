<?php
include 'config.php';
$id = $_GET['id'];
$dataFetchQuery = "SELECT * FROM `register` WHERE id = '$id'";
$record = mysqli_query($conn, $dataFetchQuery);
$data = mysqli_fetch_array($record);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style1.css">
    <title>Update Profile</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f8f9fa;
        }
        .login-container {
            width: 550px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.8);
            color: #ffffff;
            background-color: #6d0c52;
        }
        .preview img {
            width: 100px;
            height: 100px;
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
        <h2>Update Profile</h2>
        <form action="settingAction.php" method="post" enctype="multipart/form-data">
            <!-- Preview Image -->
            <div class="mb-3 preview text-center">
                <img id="previewImage" src="<?php echo $data['image']; ?>" alt="Image Preview">
            </div>
            <!-- File Input -->
            <div class="mb-3">
                <label for="image" class="form-label">Upload New Image</label>
                <input type="file" class="form-control" id="image" name="image" accept="image/*" onchange="showPreview(event);">
                 
            </div>
            <!-- Name -->
            <div class="mb-3">
                <label for="ifname" class="form-label">Username</label>
                <input type="text" class="form-control" id="ifname" value="<?php echo $data['name']; ?>" name="name">
            </div>
            <!-- Password -->
            <div class="mb-3">
                <label for="ipass" class="form-label">Password</label>
                <input type="password" class="form-control" id="ipass" value="<?php echo $data['password']; ?>" name="password">
            </div>
            <!-- Email -->
            <div class="mb-3">
                <label for="iemail" class="form-label">Email</label>
                <input type="email" class="form-control" id="iemail" value="<?php echo $data['email']; ?>" name="email">
            </div>
            <!-- Mobile -->
            <div class="mb-3">
                <label for="imob" class="form-label">Mobile</label>
                <input type="tel" class="form-control" id="imob" value="<?php echo $data['mobile']; ?>" name="mobile">
            </div>
            <!-- Hidden ID -->
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <!-- Submit Button -->
            <button type="submit" class="btn btn-primary mt-3 mb-3 col-12" name="submit">Update</button>
            <a href='deleteProfile.php?id=<?php echo $id; ?>' class="btn btn-danger">Delete</a>
        </form>
    </div>
</div>

<!-- JavaScript for Image Preview -->
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
            reader.readAsDataURL(file);
        }
    }
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
