<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"/>
  <link rel="stylesheet" href="../../../../css/contentBackground.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
	<title>Lista de facturas</title>
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
<body class="bg-secondary-custom">
	<section class="container py-4">
		<div class="row justify-content-start">
			<a href="../../index.php" title="Atrás" class="fs-4 text-decoration-none">
        <img src='../../../../img/1486348529-back-backwards-repeat-arrows-arrow_80455 (1).ico' width=30px/>
      </a>
		</div>
		<div class="row justify-content-center mb-4">
			<div class="col-12 col-lg-6">
				<h2 class="display-5 text-center">Lista de facturas</h2>
			</div>
		</div>
		<div class="row justify-content-center mb-5">
			<div class="col-12 col-lg-6">
        <?php include "../../controllers/bills/billsList.php"; ?>
			</div>
		</div>
	</section>
  <script>
    function deletePatient(e){
      sn = confirm("¿Realmente desea eliminar esta factura?");

      if(!sn){
        e.preventDefault();
      }
    }
  </script>
</body>
</html>
