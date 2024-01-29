<?php

    // Retrieve form data
    $custName = $_POST["custname"];
    $custPhNo = $_POST["custPhno"]; // Make sure to use the correct name attribute for phone number input
    $serviceName = $_POST["serviceName"];
    // $serviceDesc = $_POST["serviceDesc"];
    $price = $_POST["price"];

    // Database connection
    $dbHost = "localhost";
    $dbUser = "root";
    $dbPass = "";
    $dbName = "testing";

    $conn = mysqli_connect($dbHost, $dbUser, $dbPass, $dbName);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Insert data into tbl_servicerequest
    $sql = "INSERT INTO tbl_servicerequest (CustomerName, PhoneNo, ServiceName, Price)
            VALUES ('$custName', '$custPhNo', '$serviceName', '$price')";

    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('Booked successfully.'); window.location.href = 'http://localhost/myproject/services.php';</script>";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    // Close the database connection
    mysqli_close($conn);

?>
