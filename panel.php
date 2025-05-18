<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Panel Principal</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Bootstrap 5 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
  <style>
    body {
      background-color: #f8f9fa;
    }
    .navbar-brand {
      font-weight: bold;
    }
    .card {
      border-radius: 15px;
    }
  </style>
</head>
<body>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Mi Panel</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>
  </nav>

  <!-- Contenido principal -->
  <div class="container mt-4">
    <h3 class="mb-4">Bienvenido al Panel de Control</h3>

    <div class="row g-4">
      <!-- Tarjeta 1 -->
      <div class="col-md-4">
        <div class="card shadow-sm text-center p-3">
          <i class="bi bi-bar-chart-fill fs-1 text-primary"></i>
          <h5 class="mt-3">Estadísticas</h5>
          <p>Visualiza las métricas de uso.</p>
        </div>
      </div>

      <!-- Tarjeta 2 -->
      <div class="col-md-4">
        <div class="card shadow-sm text-center p-3">
          <i class="bi bi-people-fill fs-1 text-success"></i>
          <h5 class="mt-3">Usuarios</h5>
          <p>Gestiona los usuarios registrados.</p>
        </div>
      </div>

      <!-- Tarjeta 3 -->
      <div class="col-md-4">
        <div class="card shadow-sm text-center p-3">
          <i class="bi bi-gear-fill fs-1 text-danger"></i>
          <h5 class="mt-3">Configuraciones</h5>
          <p>Ajusta parámetros del sistema.</p>
        </div>
      </div>
    </div>
  </div>

  <!-- Scripts Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
