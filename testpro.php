<?php include("header.php");?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- meta tags, stylesheets, and title -->
    <style>
        /* Your CSS styles here */
        /* Reset some default styles */
body, h1, h2, h3, p {
    margin: 0;
    padding: 0;
}

/* Style the product cards */
.product-cards {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 20px;
    margin-top: 20px;
}

.product-card {
    border: 1px solid #ccc;
    padding: 20px;
    width: 250px;
    text-align: center;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
}

.product-image {
    max-width: 100%;
    max-height: 150px;
    margin-bottom: 10px;
}

.product-price {
    font-weight: bold;
    color: #3498db;
    margin-top: 10px;
}

.buy-button {
    background-color: #3498db;
    color: white;
    border: none;
    padding: 5px 10px;
    cursor: pointer;
}

/* Style the footer */
.footer {
    background-color: #333;
    color: white;
    text-align: center;
    padding: 20px 0;
}

.contact-info {
    margin-top: 10px;
}

/* Additional styling */
.product-description {
    background-color: #f2f2f2;
    padding: 20px;
    text-align: center;
}

.product-section {
    padding: 20px;
}

    </style>
</head>
<body>

<div class="product-description">
    <center> <h1>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Available Spare Parts</h1></center>
</div>

<section class="product-section">
    <div class="product-cards">
        <?php
        // Connect to your database (you'll need to replace these with your database details)
        $dbHost = "localhost";
        $dbUser = "root";
        $dbPass = "";
        $dbName = "testing";

        $conn = mysqli_connect($dbHost, $dbUser, $dbPass, $dbName);

        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        // Fetch items from the database
        $sql = "SELECT * FROM  tbl_product";
        $result = mysqli_query($conn, $sql);

        while ($row = mysqli_fetch_assoc($result)) {
            echo "<div class='product-card'>";
            echo "<img src='{$row['proimg']}' alt='{$row['proname']}' class='product-image'>";
            echo "<h2>{$row['proname']}</h2>";
            echo "<p>{$row['prodesc']}</p>";
            echo "<p class='product-price'>{$row['price']} Rs</p>";
            echo "<form action='manage.php' method='POST'>";
            echo "<button type='submit' name='add_to_cart' class='buy-button'>Add to cart</button>";
            echo "<input type='hidden' name='Item_name' value='{$row['proname']}'>";
            echo "<input type='hidden' name='price' value='{$row['price']}'>";
            echo "</form>";
            echo "</div>";
        }

        // Close the database connection
        mysqli_close($conn);
        ?>
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
