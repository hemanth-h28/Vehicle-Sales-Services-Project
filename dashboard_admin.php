
<!DOCTYPE html>
<html>
<head>
    <title>Product Dashboard</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
        }

        .dashboard-container {
            padding: 20px;
            text-align: center;
        }

        h1 {
            margin-bottom: 20px;
        }

        p {
            margin-bottom: 10px;
        }

        .logout-button {
            padding: 6px 12px;
            background-color: #d9534f;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            color: white;
            text-decoration: none;
        }

        .logout-button:hover {
            background-color: #c9302c;
        }
        h1, h2 {
    text-align: center;
}

form {
    width: 50%;
    margin: 20px auto;
}

table {
    width: 80%;
    margin: 20px auto;
    border-collapse: collapse;
}

table, th, td {
    border: 1px solid black;
    padding: 8px;
    text-align: center;
}

th {
    background-color: #f2f2f2;
}

button {
    padding: 8px 16px;
    background-color: #007bff;
    color: white;
    border: none;
    cursor: pointer;
}

a {
    color: #007bff;
    text-decoration: none;
}
.navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #007bff;
            color: white;
            padding: 10px 20px;
        }
        .form-table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 15px;
        }

        .form-table th,
        .form-table td {
            padding: 10px;
            border: 1px solid #ccc;
            text-align: left;
        }

        .form-table th {
            background-color: #f7f7f7;
        }

        .form-container button {
            background-color: #007bff;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .form-container button:hover {
            background-color: #0056b3;
        }
        .header {
    display: flex;
    align-items: center;
    padding: 10px 20px;
    background-color: #333;
    color: #fff;
  }
  
  .logo img {
    max-height: 80px;
    margin-right: 10px;
  }

  .form-container {
        text-align: center;
    }

    .form-grid {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        grid-gap: 10px;
        text-align: left;
        margin: 20px auto;
    }

    label {
        align-self: center;
    }

    input[type="text"], input[type="file"] {
        width: 100%;
        padding: 5px;
    }

    button {
        margin-top: 10px;
    }

    @media (max-width: 768px) {
        .form-grid {
            grid-template-columns: 1fr;
        }
    }
    .dashboard-container {
            padding: 20px;
            text-align: center;
        }

        /* Other styles... */

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
        <a href="http://localhost/myproject/dashboard_admin.php"><button class="btn btn-info">Product</button></a>
        <a href="http://localhost/myproject/services_admin.php"><button class="btn btn-info">Services</button></a>    
        <a href="http://localhost/myproject/index.html"><button class="btn btn-danger">Logout</button></a>
        </div>
    </header>

<!-- Add Product Form -->
<div class="form-container">
    <h2>Add Product</h2>
    <form action="create.php" method="POST" enctype="multipart/form-data">
        <div class="form-grid">
            <label for="productID">Product ID:</label>
            <input type="text" id="productID" name="productID" required>
            
            <label for="productName">Product Name:</label>
            <input type="text" id="productName" name="productName" required>
            
            <label for="productImage">Product Image:</label>
            <input type="file" id="productImage" name="productImage" accept="image/*" required>
            
            <label for="productDesc">Product Description:</label>
            <input type="text" id="productDesc" name="productDesc" required>
            
            <label for="productPrice">Product Price:</label>
            <input type="text" id="productPrice" name="productPrice" required>
        </div>
        <button type="submit" class="btn btn-primary">Add Product</button>
    </form>
</div>


    <div class="dashboard-container">
        <h1>Admin Dashboard</h1>
<h2>Records</h2>
<table>
    <tr>
        <th>Product ID</th>
        <th>Product Name</th>
        <th>Product Image</th>
        <th>Product Description</th>
        <th>Product Price</th>
        <th>Actions</th>
    </tr>
    <?php
    // PHP code to fetch and display records
    $conn = new mysqli("localhost", "root", "", "testing");

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM tbl_product";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["proid"] . "</td>";
            echo "<td>" . $row["proname"] . "</td>";
            echo "<td><img src='" . $row["proimg"] . "' alt='" . $row["proname"] . "' width='80'></td>"; // Display image
            echo "<td>" . $row["prodesc"] . "</td>";
            echo "<td>" . $row["price"] . "</td>";
            echo "<td><a href='edit.php?id=" . $row["proid"] . "'>Edit</a> | <a href='delete.php?id=" . $row["proid"] . "'>Delete</a></td>";
            echo "</tr>";
        }
    } else {
        echo "<tr><td colspan='6'>No records found.</td></tr>";
    }

    $conn->close();
    ?>
</table>
<div><form action="productReport.php" method="post">
    <button type="submit" class="btn btn-success">Generate Report</button>
</div>
    </div>

</body>
</html>
