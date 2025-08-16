<?php
include 'config.php';

$id = $_GET['id'];
$query = "SELECT * FROM `bag_list` WHERE id = '$id'";
$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) > 0) {
    $data = mysqli_fetch_assoc($result);
} else {
    die("No record found!");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
    .TopBag{
      width: 100%;
      height: auto;
      border: #940f6e 2px solid;
    
    }
    .card-image img{
      width: 600px; 
      height: auto; 
      margin-bottom: 10px;
      float:left;
    }
    .box-container {
      display: flex;
      align-items: center;
      justify-content: space-between;
      background-color: #ffffff; 
      padding: 20px;
      border-radius: 10px;
      max-width: 100%;
      
      
      } 
      .line {
            text-decoration: line-through;
            color: red; 
            font-size:25px;
            margin-right: 20px; 
        }
        .price {
            font-weight: bold;
            color: green; 
            font-size:25px;
          }
      .card-content p{
        color: #940f6e;
        line-height: 1.9
        ;
      }   
    </style>
</head>
<body>

    <section id="TopBag-section">

        <div class="box-container m-1 mt-5">
          <div class="card-content">
            <h1><?php echo $data['name']; ?></h1>
            <p>
            <?php echo $data['description']; ?>
            </p>
            
            <p>
              Price: <span class="line"><?php echo $data['discount']; ?>Taka</span>
              <span class="price"><?php echo $data['price']; ?>Taka</span>
                  </p>
            
           


                  <a href='cartAction.php?id=<?php echo $id; ?>' class='btn btn-outline-warning'>Add to Cart</a>


          </div>
          <div class="card-image">
          <img src="<?php echo $data['image']; ?>" alt="Image">
          </div>
        </div>
        
  
  
  
  
  
      </section>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>