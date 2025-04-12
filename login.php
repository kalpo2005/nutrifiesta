
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Login - NutriFiesta</title>
  <link rel="stylesheet" href="style.css" />
  <style>
    body {
      display: flex;
      align-items: center;
      justify-content: center;
      height: 100vh;
      font-family: Arial, sans-serif;
      background: #f4f4f4;
    }
    .login-container {
      background: white;
      padding: 2rem;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
      border-radius: 10px;
      width: 300px;
    }
    .login-container h2 {
      text-align: center;
      margin-bottom: 1.5rem;
    }
    .login-container input {
      width: 100%;
      padding: 0.75rem;
      margin: 0.5rem 0;
      border: 1px solid #ccc;
      border-radius: 5px;
    }
    .login-container button {
      width: 100%;
      padding: 0.75rem;
      background-color: #4caf50;
      color: white;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }
    .login-container button:hover {
      background-color: #45a049;
    }
  </style>
</head>
<body>
  <div class="login-container">
    <h2>Login</h2>
   <form action="php/login.php" method="POST">
  <input type="email" name="email" required>
  <input type="password" name="password" required>
  <button type="submit">Login</button>
</form>

  </div>
</body>
</html>
