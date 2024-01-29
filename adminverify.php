<?php
session_start();

if(isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // In a real scenario, you should validate username and password against a database
    // For the sake of example, let's assume username: admin, password: admin123

    if($username === 'admin' && $password === 'admin') {
        $_SESSION['admin'] = true;
        header('Location: http://localhost/myproject/dashboard_admin.php'); // Redirect to the dashboard page
    } else {
       echo "Invalid username or password";
    }
}
?>
