<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <link href="../../css/contentBackground.css" rel="stylesheet"/>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"/>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css">
  <title>Menú</title>
  <style>
    a:hover {
      text-decoration: underline !important;
    }
  </style>
</head>
<body class="bg-secondary-custom">
  <section class="container mt-3"> 
    <div class="row">
      <div class="col-12">
        <h2 class="fs-3 fw-light mb-3">Departamentos</h2>
        <ul class="list-group mb-4 mx-3">
          <li class="list-group-item bg-transparent border-0">
            <a href="./departments/formDepartamentos.php" class="text-decoration-none d-block text-secondary">Crear</a>
          </li>
          <li class="list-group-item bg-transparent border-0">
            <a href="./departments/consultaDepartamentos.php" class="text-decoration-none d-block text-secondary">Listado</a>
          </li>
        </ul>
      </div>
      <div class="col-12">
        <h2 class="fs-3 fw-light mb-3">Ciudades</h2>
        <ul class="list-group mx-3">
          <li class="list-group-item bg-transparent border-0">
            <a href="./cities/formCiudades.php" class="text-decoration-none d-block text-secondary">Crear</a>
          </li>
          <li class="list-group-item bg-transparent border-0">
            <a href="./cities/consultaCiudades.php" class="text-decoration-none d-block text-secondary">Listado</a>
          </li>
        </ul>
    </div>
  </section>
</body>
</html>