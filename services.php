<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="services.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<title>Vehicle Services</title>
<link rel="stylesheet" href="services.css">
<style>
  .navbar {
    display: flex;
    justify-content: space-between;
    align-items: center;
    background-color: #000;
    color: white;
    padding: 10px 20px;
}

/* Style for the logo */
.logo img {
    max-height: 80px;
    margin-right: 10px;
}

/* Style for the title and subtitle */
.title-container {
    flex-grow: 1;
    text-align: center;
}

.title {
    margin: 0;
    font-size: 24px;
}

.subtitle {
    margin: 0;
    font-size: 16px;
}

/* Style for navigation links */
.nav-links a {
    color: white;
    text-decoration: none;
    margin-left: 20px;
    font-size: 16px;
    transition: color 0.3s;
}

.nav-links a:hover {
    color: #cce0ff;
}

/* Media query for responsiveness */
@media (max-width: 768px) {
    .nav-links {
        display: none;
    }
    
    /* Mobile menu icon */
    .mobile-menu-icon {
        font-size: 24px;
        cursor: pointer;
    }
}

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
input[type="text"] {
    padding: 0px;
    border: 1px solid #ccc;
    border-radius: 4px;
    width: 60%;
    box-sizing: border-box;
}
</style>
</head>
<body>
<header class="navbar">
        <div class="logo">
            <img src="img/logo3.png" alt="The Royal Touch Logo">
        </div>
        <div class="title-container">
            <h1 class="title">The Royal Touch</h1>
            <h2 class="subtitle">Two Wheeler Sales & Services</h2>
        </div>
        <div class="nav-links">
            <a href="http://localhost/myproject/index.html"><button class="btn btn-success">HOME</button></a>
        </div>
    </header>

    <div id="container">
        <div id="content">
            <h2>Packages Available with Us</h2>
            <p>Select a service provided below </p>

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
        $sql = "SELECT * FROM  tbl_services";
        $result = mysqli_query($conn, $sql);

        while ($row = mysqli_fetch_assoc($result)) {
            echo "<div class='product-card'>";
            echo "<h2>{$row['serviceName']}</h2>";
            echo"<p>Description</p>";
            echo "<p>{$row['serviceDesc']}</p>";
            echo "<p class='product-price'>{$row['price']} Rs</p>";
            echo "<form action='add_servicerequest.php' method='POST'>";
            echo "Name: <input type='text' name='custname' maxlength='10'>";
            echo"<br>"; echo"<br>";
            echo "Ph No.: <input type='text' name='custPhno' maxlength='10'>";
            echo"<br>"; echo"<br>";
            echo "<button type='submit' name='add_to_service' class='buy-button'>Book</button>";
            echo "&nbsp;<button type='reset'' class='buy-button'>Reset</button>";
            echo "<input type='hidden' name='serviceName' value='{$row['serviceName']}'>";
            echo "<input type='hidden' name='price' value='{$row['price']}'>";
            echo "</form>";
            echo "</div>";
        }

        // Close the database connection
        mysqli_close($conn);
        ?>
    </div>
</section>
                </div>
            </div>
        </div>
    </div>
</body>
</html>