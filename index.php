<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bike Website</title>
    <!-- <link rel="stylesheet" href="indexx.css"> -->
    <style>
        * {
    margin: 0;
    padding: 0;
    font-family: sans-serif;
}

body {
    background-image: url('img/Background.jpg');
    background-repeat: no-repeat;
   
}

.container {
    margin: auto;
    padding: 20px;
    display: flex;
    align-items: center;
    justify-content: space-between;
}

.container h1 {
    color: #fff;
    font-weight: 700;
    font-size: 40px;
    cursor: pointer;
}


/* Add styles for the logo */
.logo {
    width: 150px; /* Adjust the width as needed */
    height: auto;
    margin-right: 0px;
}

.navbar ul li {
    display: inline-block;
    list-style: none;
    margin: 0 20px;
}

.navbar ul li a {
    padding: 9px;
    text-decoration: none;
    color: #fff;
    font-size: 20px;
    transition: 1s;
}

.navbar ul li a:hover {
    background-color: rgb(252, 20, 140);
}

.content {
    position: absolute;
    color: #fff;
    margin-top: 11%;
    margin-left: 15%;
}

.content h1 {
    font-size: 50px;
}

/* New footer styles */
.footer {
    background-color: rgba(0, 0, 0, 0.8);
    color: #fff;
    padding: 10px;
    text-align: center;
    position: absolute;
    bottom: 0;
    width: 100%;
}

    </style>
</head>
<body >
    <div class="container">
        <img src="img/logo3.png" alt="Logo" class="logo">
        <h1> THE ROYAL TOUCH</h1>
        <div class="navbar">
            <ul>
                
                <li><a href="product.php">PRODUCTS</a></li>
                <li><a href="services.php">SERVICE</a></li>
                <li><a href="http://localhost/Vehicle/upload.php">ADMIN</a></li>
            </ul>
        </div>
    </div>
    <div class="content">
        <h1> Visit Us or Contact Us<br> For All Kind Of Bikes Sales & Services </h1>
        <h2> Contact No: 8431114001</h2>
    </div>
    
    <!-- Footer section -->
    <footer class="footer">
        <p>Address: Subramanya Nagara 2nd Cross Arsikere, Hassan 573-103  &copy; 2023 Royal Touch. All rights reserved.</p>
    </footer>
</body>
</html>