<html>
<head>
  <title>Iniciar sesión</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f4f4f4;
      padding: 20px;
    }
    
    .login-container {
      max-width: 400px;
      margin: 0 auto;
      background-color: #fff;
      border: 1px solid #ccc;
      padding: 20px;
      border-radius: 5px;
    }
    
    .login-container h2 {
      text-align: center;
    }
    
    .login-container input[type="text"],
    .login-container input[type="password"] {
      width: 100%;
      padding: 10px;
      margin-bottom: 10px;
      border: 1px solid #ccc;
      border-radius: 3px;
    }
    
    .login-container button {
      width: 100%;
      padding: 10px;
      background-color: #4caf50;
      color: #fff;
      border: none;
      border-radius: 3px;
      cursor: pointer;
    }
    
    .login-container button:hover {
      background-color: #45a049;
    }
  </style>
</head>
<body>
  <div class="login-container">
    <h2>Iniciar sesión</h2>
    <form action="procesos/login/login.php" method="GET">
      <input type="text" name="num_mesa" placeholder="N° de Mesa" required>
      <input type="password" name="contraseña" placeholder="Contraseña" required>
      <button type="submit">Iniciar sesión</button>
    </form>
  </div>
</body>
</html>