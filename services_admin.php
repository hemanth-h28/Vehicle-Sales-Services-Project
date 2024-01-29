
<!DOCTYPE html>
<html>
<head>
    <title>Service Dashboard</title>
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
</div>
    <div class="dashboard-container">
        <h1>Services Dashboard</h1>
<h2>Records</h2>
<table>
    <tr>
        <th>Customer Name</th>
        <th>Phone No.</th>
        <th>Service Name</th>
        <th>Service Price</th>
    </tr>
    <?php
    // PHP code to fetch and display records
    $conn = new mysqli("localhost", "root", "", "testing");

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM tbl_servicerequest";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["CustomerName"] . "</td>";
            echo "<td>" . $row["PhoneNo"] . "</td>";
            echo "<td>" . $row["ServiceName"] . "</td>";
            echo "<td>" . $row["Price"] . "</td>";
            echo "</tr>";
        }
    } else {
        echo "<tr><td colspan='6'>No records found.</td></tr>";
    }

    $conn->close();
    ?>
</table>
<div><form action="http://localhost/myproject/service_request_report.php" method="post">
    <button type="submit" class="btn btn-success">Generate Report</button>
</div>
    </div>

</body>
</html>
