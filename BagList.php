<?php
include 'config.php'; // Database connection

// Fetch all bag data from the `bag_list` table
$query = "SELECT * FROM `bag_list`";
$result = mysqli_query($conn, $query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
            .bag-card {
            border: 1px solid #ddd;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
            transition: transform 0.3s ease;
        }
        .bag-card:hover {
            transform: translateY(-5px);
        }
        .bag-image img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }
        .bag-info {
            padding: 15px;
            text-align: center;
        }
        .bag-info h5 {
            font-size: 18px;
            margin-bottom: 10px;
        }
        .bag-info .price {
            font-weight: bold;
            color: #e63946;
        }
        .bag-info .line {
            text-decoration: line-through;
            color: #999;
        }
        .bag-info .btn {
            margin-top: 10px;
        } 
    </style>
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center mb-5">Bag List</h1>
        <div class="row">
            <?php while ($row = mysqli_fetch_array($result)): ?>
                <div class="col-md-4">
                    <div class="bag-card">
                        <div class="bag-image">
                            <img src="<?php echo $row['image']; ?>" alt="<?php echo $row['name']; ?>">
                        </div>
                        <div class="bag-info">
                            <h5><?php echo $row['name']; ?></h5>
                            <p>
                                Price: <span class="line"><?php echo $row['discount']; ?> Taka</span>
                                <span class="price"><?php echo $row['price']; ?> Taka</span>
                            </p>
                            <a href="Bag.php?id=<?php echo $row['id']; ?>" class="btn btn-outline-warning">Learn More</a>
                            <a href="cartAction.php?id=<?php echo $row['id']; ?>" class="btn btn-outline-success">Add to Cart</a>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>