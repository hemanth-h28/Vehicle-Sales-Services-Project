<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles.css">
  <title>Login Page</title>
  <style>
  body {
  margin: 0;
  padding: 0;
  font-family: Arial, sans-serif;
  background-color: #f0f0f0;
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
}

.login-container {
  background-color: #3498db;
  border-radius: 10px;
  padding: 20px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  color: white;
  text-align: center;
}

.login-form {
  display: flex;
  flex-direction: column;
  gap: 10px;
}

.input-field {
  padding: 10px;
  border: none;
  border-radius: 5px;
}

.login-button {
  background-color: #2980b9;
  color: white;
  border: none;
  border-radius: 5px;
  padding: 10px;
  cursor: pointer;
  transition: background-color 0.3s ease;
}

.login-button:hover {
  background-color: #1f669e;
}

  </style>
</head>
<body>
  <div class="login-container">
    <h1>Admin Login</h1>
    <form action="adminverify.php" method="POST" class="login-form">
      <input type="text" placeholder="Username" name="username" class="input-field" required>
      <input type="password" placeholder="Password" name="password" class="input-field" required>
      <button type="submit" name="login" class="login-button">Login</button>
    </form>
  </div>
</body>
</html>
