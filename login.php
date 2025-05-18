<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Iniciar Sesión</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
  <style>
    body {
      background: linear-gradient(135deg,rgb(127, 164, 238), #4e73df);
      min-height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
    }
    .login-container {
      background: white;
      padding: 2.5rem;
      border-radius: 1rem;
      box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
      width: 100%;
      max-width: 420px;
    }
    .form-control:focus {
      box-shadow: none;
      border-color: #012b7e;
    }
    .btn-primary {
      background-color: #012b7e;
      border-color: #012b7e;
    }
    .btn-primary:hover {
      background-color: #021e5c;
    }
    .logo {
      width: 70px;
      height: auto;
      margin-bottom: 1rem;
    }
      .forgot-password {
    background-color: #e7f0ff; /* azul claro */
    padding: 10px;
    border-radius: 8px;
    margin-top: 1rem;
  }

  .forgot-password a {
    color: #012b7e;
    text-decoration: none;
    font-weight: 500;
  }

  .forgot-password a:hover {
    text-decoration: underline;
  }
  </style>
</head>
<body>

  <div class="login-container text-center">
    <img src="https://cdn-icons-png.flaticon.com/512/3135/3135715.png" alt="Logo" class="logo">
    <h4 class="mb-4">Iniciar Sesión</h4>
        <form action="panel.php" method="get">
  <div class="form-floating mb-3">
    <input type="email" class="form-control" id="email" name="email" placeholder="Correo electrónico" required>
    <label for="email"><i class="bi bi-envelope-fill"></i> Correo electrónico</label>
  </div>
  <div class="form-floating mb-4">
    <input type="password" class="form-control" id="password" name="password" placeholder="Contraseña" required>
    <label for="password"><i class="bi bi-lock-fill"></i> Contraseña</label>
  </div>
  <button type="submit" class="btn btn-primary w-100">Ingresar</button>
  <div class="forgot-password">
    <a href="#">¿Olvidaste tu contraseña?</a>
  </div>
</form>


  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>