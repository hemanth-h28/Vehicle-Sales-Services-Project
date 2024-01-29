<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Royal Touch - Two Wheeler Sales & Services</title>
    <link rel="stylesheet" href="thehomepage.css">
</head>
<body>
    <!-- Header with Logo and Title -->
    <header class="header">
        <div class="logo">
            <img src="img/logo3.png" alt="The Royal Touch Logo">
        </div>
        <div class="title-container">
            <h1 class="title">The Royal Touch</h1>
            <h2 class="subtitle">Two Wheeler Sales & Services</h2>
        </div>
    </header>

    <!-- Split Nav Bar -->
    <nav class="split-nav">
        <div class="left-nav">
            <a href="index.html">Home</a>
            <!-- <a href="services.php">Services</a> -->
        </div>
       
      <?php
      $count=0;
      if(isset($_SESSION['cart']))
      {
        $count=count($_SESSION['cart']);
      }
      ?>
      <i class="bi bi-cart"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" 
      fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16"><path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 
      .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>

  </svg><a href="mycart.php" >(<?php echo $count;?>)</a></i>
    </ul>
  </nav>
  
</body>
</html>
