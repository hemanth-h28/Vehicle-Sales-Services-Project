<!DOCTYPE html>
<html>
<head>
    <title>Delete Vegetable/Fruit</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background-color: #f5f5f5;
        }

        .container {
            background-color: white;
            border-radius: 8px;
            padding: 20px;
            width: 400px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        h1 {
            margin-bottom: 20px;
        }

        p {
            margin-bottom: 10px;
        }

        form {
            margin-top: 20px;
        }

        button {
            padding: 8px 16px;
            background-color: #d9534f;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #c9302c;
        }

        button:active {
            background-color: #ac2925;
        }

        /* ... (existing CSS code) ... */

.cancel-button {
    display: inline-block;
    padding: 8px 16px;
    background-color: #6c757d;
    color: white;
    text-decoration: none;
    border-radius: 4px;
    margin-top: 10px;
}

.cancel-button:hover {
    background-color: #5a6268;
}

.cancel-button:active {
    background-color: #464c51;
}

    </style>
</head>
<body>
    <div class="container">
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
                <p>Are you sure you want to delete the following record?</p>
                <p><strong>Id:</strong> <?php echo $row['proid']; ?></p>
                <p><strong>Name:</strong> <?php echo $row['proname']; ?></p>
                <p><strong>Description:</strong> <?php echo $row['prodesc']; ?></p>
                <!-- <p><strong>Quantity:</strong> <?php echo $row['quantity']; ?></p> -->
                <p><strong>Price:</strong> <?php echo $row['price']; ?></p>
                <form action="remove.php" method="POST">
                    <input type="hidden" name="id" value="<?php echo $row['proid']; ?>">
                    <button type="submit">Delete</button> 
                    
                </form>
    </form>
    <br><a href="http://localhost/myproject/dashboard_admin.php"><button>Back</button></a>
                <?php
            } else {
                echo "Record not found";
            }
            
            $conn->close();
        }
        ?>
    </div>
</body>
</html>
