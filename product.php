<?php include("header.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="product.css">
    <title>products</title>
</head>
<body>

<div class="product-description">
     <center> <h1>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Available Spare Parts</h1></center>
    </div>
    
    <section class="product-section">

    <div class="product-container">
      <div class="product-header">
        
        <h2>Engine Oil</h2>
      </div>
      <br>
      <br>
       <div class="product-image">
        <img src="img/oil.jpg" alt="Product 1">
      </div>
      <br>
      <br>
      <div class="product-body">
        <p>1L Castrol Engine Oil.</p> </div>
      <div class="product-footer">
        <span class="product-price">300 Rs</span>
<form action="manage.php" method="POST">
        <button type="submit" name="add_to_cart" class="buy-button">Add to cart</button>
        <input type="hidden" name="Item_name" value="Engine Oil">
        <input type="hidden" name="price" value="300">
</form>
      </div>
    </div>
    <div class="product-container">
      <div class="product-header">
        
        <h2>Chain Lube</h2>
      </div>
      <br>
      <br>
       <div class="product-image">
        <img src="img/lube.jpg" alt="Product 1">
      </div>
      <br>
      <br>
      <div class="product-body">
        <p>Chain Lube</p></div>
      <div class="product-footer">
        <span class="product-price">199 Rs</span>
<form action="manage.php" method="POST">
        <button type="submit" name="add_to_cart" class="buy-button">Add to cart</button>
        <input type="hidden" name="Item_name" value="Chain Lube">
        <input type="hidden" name="price" value="199">
</form>
      </div>
    </div>
    <div class="product-container">
      <div class="product-header">
        <h2>LED Indicators</h2>
      </div>
      <br>
      <br>
       <div class="product-image">
        <img src="img/led indicators.jpg" alt="Product 1">
      </div>
      <br>
      <br>
      <div class="product-body">
        <p>LED Indicators Suitable for all Bikes</p></div>
      <div class="product-footer">
        <span class="product-price">399 Rs</span>
        <form action="manage.php" method="POST">
        <button type="submit" name="add_to_cart" class="buy-button">Add to cart</button>
        <input type="hidden" name="Item_name" value="LED Indicators">
        <input type="hidden" name="price" value="399">
</form>
      </div>
    </div>
    <div class="product-container">
      <div class="product-header">
        <h2>RE Exhaust</h2>
      </div>
      <br>
      <br>
       <div class="product-image">
        <img src="img/RE Exhaust.jpg" alt="Product 1">
      </div>
      <br>
      <br>
      <div class="product-body">
        <p>Exhaust For Royal Enfield 350</p></div>
      <div class="product-footer">
        <span class="product-price">4999 Rs</span>
        <form action="manage.php" method="POST">
        <button type="submit" name="add_to_cart" class="buy-button">Add to cart</button>
        <input type="hidden" name="Item_name" value="RE Exhaust">
        <input type="hidden" name="price" value="4999">
</form>
      </div>
    </div>


    <div class="product-container">
      <div class="product-header">
        <h2>Exhaust Set</h2>
      </div>
      <br>
      <br>
       <div class="product-image">
        <img src="img/exhaust.jpg" alt="Product 3">
      </div>
      <br>
      <br>
      <div class="product-body">
        <p></p>Exhaust Set For Sports Bikes </div>
      <div class="product-footer">
        <span class="product-price">3999 Rs</span>
        <form action="manage.php" method="POST">
        <button type="submit" name="add_to_cart"class="buy-button">Add to cart</button>
        <input type="hidden" name="Item_name" value="Exhaust Set">
        <input type="hidden" name="price" value="3999">
</form>
      </div>
    </div>
    <div class="product-container">
      <div class="product-header">
        
        <h2>Bar-End Mirrors</h2>
      </div>
      <br>
      <br>
       <div class="product-image">
        <img src="img/handlebar-mirror.jpg" alt="Product 1">
      </div>
      <br>
      <br>
      <div class="product-body">
        <p>Mirrors for All kind of Bikes</p></div>
      <div class="product-footer">
        <span class="product-price">399 Rs</span>
<form action="manage.php" method="POST">
        <button type="submit" name="add_to_cart" class="buy-button">Add to cart</button>
        <input type="hidden" name="Item_name" value="Bar-End Mirrors">
        <input type="hidden" name="price" value="399">
</form>
      </div>
    </div>
</section>

 <footer class="footer">
    <div class="contact-info">
      <h3>Contact Us </br><p>Phone: 8431114001</p>
      <p>Address: Arsikere</p></h3>
      
    </div>
  </footer>
</body>
</html>
