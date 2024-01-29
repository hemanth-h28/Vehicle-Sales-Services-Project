<!DOCTYPE html>
<html>
<head>
    <title>Edit Vegetable/Fruit</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <style>
        body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 20px;
}

h1 {
    text-align: center;
    margin-bottom: 20px;
}

form {
    width: 50%;
    margin: 0 auto;
    border: 1px solid #ccc;
    padding: 20px;
    background-color: #f9f9f9;
}

label {
    display: inline-block;
    width: 120px;
    font-weight: bold;
    margin-bottom: 8px;
}

input {
    width: 100%;
    padding: 8px;
    margin-bottom: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
}
a {
        text-decoration: none;
        padding: 8px 16px;
    background-color: #007bff;
    color: white;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    }
input[type=submit],button {
    padding: 8px 16px;
    background-color: #007bff;
    color: white;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

button:hover {
    background-color: #0056b3;
}

button:active {
    background-color: #004080;
}


    </style>
</head>
<body>
    <h1>The Royal Touch</h1>
    
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["id"])) {
        $id = $_GET["id"];
        
        $conn = new mysqli("localhost", "root", "", "testing");
        
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        
        $sql = "SELECT * FROM tbl_product WHERE proid = $id";
        $result = $conn->query($sql);
        
        if ($result->num_rows == 1) {
            $row = $result->fetch_assoc();
            ?>
            <form action="update.php" method="POST">
                <input type="hidden" name="id" value="<?php echo $row['proid']; ?>">
                <label>Name: </label>
                <input type="text" name="name" value="<?php echo $row['proname']; ?>" required><br>
                <label>Description: </label>
                <input type="text" name="type" value="<?php echo $row['prodesc']; ?>"><br>
                <label>Price: </label>
                <input type="number" step="0.01" name="price" value="<?php echo $row['price']; ?>"><br>
                <input type="submit" value="Update Record" name="submit">
                <a href="http://localhost/myproject/dashboard_admin.php">Back</a>
            </form>
            
            <?php
        } else {
            echo "Record not found";
        }
        
        $conn->close();
    }
    ?>
</body>
</html>
