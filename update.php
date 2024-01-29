<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["submit"])) {
    $id = $_POST["id"];
    $name = $_POST["name"];
    $type = $_POST["type"];
    $price = $_POST["price"];
    
    $conn = new mysqli("localhost", "root", "", "testing");
    
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
    $sql = "UPDATE tbl_product SET proname = '$name', prodesc = '$type', price = $price WHERE proid = $id";
    
    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Record updated successfully.'); window.location.href = 'http://localhost/myproject/dashboard_admin.php';</script>";
    } else {
        echo "Error updating record: " . $conn->error;
    }
    
    $conn->close();
}
?>
