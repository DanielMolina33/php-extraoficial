<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Lista de medicamentos</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"/>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <style>
    body {
      overflow-y: scroll;
    }

    body::-webkit-scrollbar {
      -webkit-appearance: none;
    }

    body::-webkit-scrollbar:vertical {
      width: 10px;
    }

    body::-webkit-scrollbar-thumb {
      background-color: #373737;
      border-radius: 20px;
      border: 3px solid white;
    }
  </style>
</head>
<body>
  <?php
		include "../../utils/security.php";
		userDoesNotExits();
	?>
	<section class="container py-4">
		<div class="row justify-content-start">
			<a href="../../views/menu.php" title="Atrás" class="fs-4 text-decoration-none">👈</a>
		</div>
		<div class="row justify-content-center mb-4">
			<div class="col-12 col-lg-6">
				<h2 class="display-5 text-center">Listado de medicamentos</h2>
			</div>
		</div>
    <div class="row d-flex justify-content-center mb-4">
			<div class="col-12 col-lg-6 text-end">
        <div class="dropdown">
          <button class="btn btn-success dropdown-toggle" type="button" id="filter" data-bs-toggle="dropdown" aria-expanded="false">
            Filtrar por
          </button>
          <ul class="dropdown-menu" aria-labelledby="filter">
            <li><a class="dropdown-item" href="./medicineList.php?filter=activo">Activo</a></li>
            <li><a class="dropdown-item" href="./medicineList.php?filter=inactivo">Inactivo</a></li>
            <li><a class="dropdown-item" href="./medicineList.php?filter=todo">Todo</a></li>
          </ul>
        </div>
			</div>
		</div>
		<div class="row justify-content-center mb-5">
			<div class="col-12 col-lg-6">
        <?php include "../../controllers/medicines/medicineList.php"; ?>
			</div>
		</div>
	</section>
  <script>
    function deleteMedicine(e){
      sn = confirm("¿Realmente desea este medicamento?");

      if(!sn){
        e.preventDefault();
      }
    }
  </script>
</body>
</html>
