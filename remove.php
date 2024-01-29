<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["id"])) {
    $id = $_POST["id"];
    
    $conn = new mysqli("localhost", "root", "", "testing");
    
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
    $sql = "DELETE FROM tbl_product WHERE proid = $id";
    
    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Record Deleted successfully.'); window.location.href = 'http://localhost/myproject/dashboard_admin.php';</script>";
    } else {
        echo "Error deleting record: " . $conn->error;
    }
    
    $conn->close();
}
?>
