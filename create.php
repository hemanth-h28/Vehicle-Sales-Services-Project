<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Database connection
    $conn = new mysqli("localhost", "root", "", "testing");

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Get form data
    $productID = $_POST["productID"];
    $productName = $_POST["productName"];
    $productDesc = $_POST["productDesc"];
    $productPrice = $_POST["productPrice"];

    // Upload and process product image
    $targetDir = "uploads/"; // Change to your desired upload directory
    $targetFile = $targetDir . basename($_FILES["productImage"]["name"]);
    $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

    // Insert product data into the database
    $insertQuery = "INSERT INTO tbl_product (proid, proname, proimg, prodesc, price) VALUES ('$productID', '$productName', '$targetFile', '$productDesc','$productPrice')";

    if ($conn->query($insertQuery) === TRUE) {
        // Upload image if the insert was successful
        if (move_uploaded_file($_FILES["productImage"]["tmp_name"], $targetFile)) {
            echo "<script>alert('Record added successfully.'); window.location.href = 'http://localhost/myproject/dashboard_admin.php';</script>";
        } else {
            echo "Product added, but there was an error uploading the image.";
        }
    } else {
        echo "Error: " . $insertQuery . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
