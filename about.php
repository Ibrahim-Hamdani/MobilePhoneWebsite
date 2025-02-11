<?php

//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();} for php 5.4 and above

if(session_id() == '' || !isset($_SESSION)){session_start();}


?>

<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ABOUT US || Prime Mobiles</title>
    <link rel="stylesheet" href="css/foundation.css" />
    <script src="js/vendor/modernizr.js"></script>
  </head>
  
  <body>

  <nav class="top-bar" data-topbar role="navigation">
      <ul class="title-area">
        <li class="name">
         <h1><a href="index.php">Prime Mobiles</a></h1>
  
         
        </li>
        <li class="toggle-topbar menu-icon"><a href="#"><span></span></a></li>
    
      </ul>

      <section class="top-bar-section">
      <!-- Right Nav Section -->
        <ul class="right">
          <li><a href="products.php">Mobiles</a></li>
          <li><a href="cart.php">Cart</a></li>
          <li><a href="orders.php">Orders</a></li>
          <li><a href="about.php">About</a></li>
          <li><a href="contact.php">Contact</a></li>
          <?php

          if(isset($_SESSION['username'])){
            echo '<li><a href="account.php">Your Account</a></li>';
            echo '<li><a href="logout.php">Log Out</a></li>';
          }
          else{
            echo '<li><a href="login.php">Sign In</a></li>';
            echo '<li><a href="register.php">Register</a></li>';
          }
          ?>
        </ul>
      </section>
    </nav>



<div class="container mt-4px" style="margin-top:200px;">
  <div class="row">
   
      
      <h1 style="text-align:center;">We strive to be</h1>
      <h3 style="text-align:center;">being at our best in every decision, every day.</h3>
      <h3 style="text-align:center;">Our Code of Ethics serves as a critical foundation for our company</h3>

    </div>
    
  </div>
</div>


    





    <script src="js/vendor/jquery.js"></script>
    <script src="js/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>
  </body>
</html>
