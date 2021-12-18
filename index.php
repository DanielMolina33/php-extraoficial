<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"/>
  <link href="./css/menu.css" rel="stylesheet"/>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <title>Ecommerce Admin - Home</title>
</head>
<body class="bg-secondary-custom">
  <div class="offcanvas offcanvas-start offcanvas-width show bg-dark border-0" data-bs-scroll="true" data-bs-backdrop="false" tabindex="1" id="menuOptions" aria-labelledby="menuOptionsLabel">
    <div class="offcanvas-header">
      <h5 class="offcanvas-title text-white display-6" id="menuOptionsLabel">Menú</h5>
    </div>
    <div class="offcanvas-body">
      <div class="mb-2">
        <h6 class="text-white fs-13">Navegación</h6>
        <ul class="list-group">
          <li class="list-group-item border-0 bg-transparent fs-14 text-white">
            <i class="bi bi-house me-1"></i>
            <a href="./modules/home/index.php" class="text-decoration-none text-white" onclick="showContent(event)">Inicio</a>
          </li>
          <!-- <li class="list-group-item border-0 bg-transparent fs-14 text-white">
            <i class="bi bi-cart me-1"></i>
            <a href="#" class="text-decoration-none text-white">Ordenes de compra</a>
          </li> -->
          <li class="list-group-item border-0 bg-transparent fs-14 text-white">
            <i class="bi bi-columns-gap me-1"></i>
            <a href="./modules/categories/index.php" class="text-decoration-none text-white" onclick="showContent(event)">Categorias</a>
          </li>
          <li class="list-group-item border-0 bg-transparent fs-14 text-white">
            <i class="bi bi-geo-alt me-1"></i>
            <a href="./modules/locations/index.php" class="text-decoration-none text-white" onclick="showContent(event)">Ubicaciones</a>
          </li>
          <li class="list-group-item border-0 bg-transparent fs-14 text-white">
            <i class="bi bi-shop me-1"></i>
            <a href="./modules/products/index.php" class="text-decoration-none text-white" onclick="showContent(event)">Productos</a>
          </li>
          <li class="list-group-item border-0 bg-transparent fs-14 text-white">
            <i class="bi bi-cart-check me-1"></i>
            <a href="./modules/sales/index.php" class="text-decoration-none text-white" onclick="showContent(event)">Ventas</a>
          </li>
          <li class="list-group-item border-0 bg-transparent fs-14 text-white">
            <i class="bi bi-boxes me-1"></i>
            <a href="./modules/entities/index.php" class="text-decoration-none text-white" onclick="showContent(event)">Entidades</a>
          </li>
          <li class="list-group-item border-0 bg-transparent fs-14 text-white">
            <i class="bi bi-chat-right-text me-1"></i>
            <a href="./modules/comments/index.php" class="text-decoration-none text-white" onclick="showContent(event)">Comentarios</a>
          </li>
        </ul>
      </div>
      <!-- <div class="mb-2">
        <h6 class="text-white fs-13">Configuración</h6>
        <ul class="list-group">
          <li class="list-group-item border-0 bg-transparent fs-14 text-white">
            <i class="bi bi-app me-1"></i>
            <a href="#" class="text-decoration-none text-white">table 1</a>
          </li>
          <li class="list-group-item border-0 bg-transparent fs-14 text-white">
          <i class="bi bi-app me-1"></i>
            <a href="#" class="text-decoration-none text-white">table 2</a>
          </li>
        </ul>
      </div> -->
    </div>
  </div>
  <div class="container-fluid container-no-margin container-offset-right vh-100" id="mainContent">
    <header class="row">
      <div class="col">
        <a class="text-decoration-none text-dark fs-2" data-bs-toggle="offcanvas" href="#menuOptions" role="button" aria-controls="menuOptions" id="menuOptionsToggle">
          <i class="bi bi-list"></i>
        </a>
      </div>
      <div class="col d-flex justify-content-end align-items-center pt-2 col-user-menu">
        <div class="d-flex align-items-center position-relative user-menu-open pb-1">
          <figure class="profile me-2">
            <img src="http://placeimg.com/640/480/animals" alt="foto de perfil" class="d-inline-block rounded me-2 profile__image"/>
          </figure>
          <span class="d-inline-block fs-14">Administrador</span>
          <div class="user-menu bg-dark">
            <ul class="list-group">
              <li class="list-group-item border-0 bg-transparent">
                <a href="#" class="text-decoration-none text-white d-block w-100 fs-13">Mi perfil</a>
              </li>
              <li class="list-group-item border-0 bg-transparent">
                <a href="#" class="text-decoration-none text-white d-block w-100 fs-13">Cerrar sesion</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </header>
    <section class="h-100 w-100">
      <iframe class="h-100 w-100 m-0" id="iframe">
        <!-- Modules here -->
      </iframe>
    </section>
  </div>
  <script src="./js/showMenu.js"></script>
  <script src="./js/showContent.js"></script>
</body>
</html>