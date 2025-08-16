<?php
include 'config.php';

session_start();

if (isset($_SESSION['email'])) {
    $email = $_SESSION['email'];

    $myquery = "SELECT * FROM `register` WHERE email='$email'";
    $data = mysqli_query($conn, $myquery);
    $user = mysqli_fetch_assoc($data); 

    if ($user) {
     
      $cartQuery = "SELECT * FROM `cart` WHERE email='$email'";
      $cartData = mysqli_query($conn, $cartQuery);

      echo "
      <div class='offcanvas offcanvas-end' tabindex='-1' id='offcanvasSidebar' aria-labelledby='offcanvasSidebarLabel'>
          <div class='offcanvas-header'>
              <h5 class='offcanvas-title ms-auto' id='offcanvasSidebarLabel'>
                  <div>
                      <img src='" . $user['image'] . "' alt='User Image' class='img-fluid rounded-circle' style='width: 50px; height: 50px; object-fit: cover;'>
                  </div>
              </h5>
              <button type='button' class='btn-close' data-bs-dismiss='offcanvas' aria-label='Close'></button>
          </div>
          <div class='offcanvas-body'>
              <ul class='list-group'>";

      // Display user's name and cart title
      echo "
      <li class='list-group-item'><strong>Welcome, " . $user['name'] . "</strong></li>
      <li class='list-group-item text-center'><h5><strong>Cart</strong></h5></li>";

      // Display cart items
      if (mysqli_num_rows($cartData) > 0) {
          while ($cartItem = mysqli_fetch_assoc($cartData)) {
              echo "
              <li class='list-group-item d-flex justify-content-between align-items-center'>
                  Product: " . $cartItem['name'] . " - Price: " . $cartItem['price'] . " Taka
                  <a href='delete.php?id=" . $cartItem['id'] . "' class='btn btn-sm btn-danger'>-</a>
              </li>";
          }
      } else {
          echo "<li class='list-group-item'>Your cart is empty.</li>";
      }

      echo "
              <li class='list-group-item'><a href='logout.php' class='btn btn-outline-danger w-100'>Logout</a></li>
             <li class='list-group-item'>  <a href='setting.php?id=" . $user['id'] . "' class='btn btn-outline-secondary w-100'>Settings</a><li>

          </ul>
          </div>
      </div>";
  } else {
      echo "
      <div class='offcanvas offcanvas-end' tabindex='-1' id='offcanvasSidebar' aria-labelledby='offcanvasSidebarLabel'>
          <div class='offcanvas-header'>
              <h5 class='offcanvas-title ms-auto' id='offcanvasSidebarLabel'>
                  <div><i class='bx bx-user-circle'></i></div>
              </h5>
              <button type='button' class='btn-close' data-bs-dismiss='offcanvas' aria-label='Close'></button>
          </div>
          <div class='offcanvas-body'>
              <ul class='list-group'>
                  <li class='list-group-item'><a href='Login.php' class='btn btn-outline-primary w-100'>Log In</a></li>
                  <li class='list-group-item'><a href='Register.php' class='btn btn-outline-primary w-100'>Sign Up</a></li>
              </ul>
          </div>
      </div>";
  }
} else {
  echo "
  <div class='offcanvas offcanvas-end' tabindex='-1' id='offcanvasSidebar' aria-labelledby='offcanvasSidebarLabel'>
      <div class='offcanvas-header'>
          <h5 class='offcanvas-title ms-auto' id='offcanvasSidebarLabel'>
              <div><i class='bx bx-user-circle'></i></div>
          </h5>
          <button type='button' class='btn-close' data-bs-dismiss='offcanvas' aria-label='Close'></button>
      </div>
      <div class='offcanvas-body'>
          <ul class='list-group'>
              <li class='list-group-item'><a href='Login.php' class='btn btn-outline-primary w-100'>Log In</a></li>
              <li class='list-group-item'><a href='Register.php' class='btn btn-outline-primary w-100'>Sign Up</a></li>
          </ul>
      </div>
  </div>";
}
?>
