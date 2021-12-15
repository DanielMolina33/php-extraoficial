<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>title</title>
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
		<!-- <div class="row justify-content-start">
			<a href="../../views/menu.php" title="Atrás" class="fs-4 text-decoration-none">👈</a>
		</div> -->
  <div class="row justify-content-center mb-4">
    <div class="col-12 col-lg-6">
      <h2 class="display-5 text-center">Lorem, ipsum dolor.</h2>
    </div>
  </div>
  <div class="row justify-content-center mb-5">
    <div class="col-12 col-lg-6">
      <div class='accordion' id='accordion'>
        <div class="accordion-item">
          <h2 class="accordion-header" id="testId">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-id" aria-expanded="false" aria-controls="collapse-id">
              Lorem, ipsum dolor.
            </button>
          </h2>
          <div id="collapse-id" class="accordion-collapse collapse" aria-labelledby="testId" data-bs-parent="#accordion">
            <div class="accordion-body">
              <ul class="list-group">
                <li class='list-group-item d-flex justify-content-between'>
                  <span class='text-secondary'>Lorem</span>
                  Lorem, ipsum.
                </li>
                <li class='list-group-item d-flex justify-content-between'>
                  <span class='text-secondary'>Lorem</span>
                  Lorem, ipsum.
                </li>
              </ul>
              <!-- <div class="d-flex justify-content-end mt-3">
                <a href="#" class="btn btn-success me-2">Editar</a>
                <a href="#" onclick="deleteMedicine(event)" class="btn btn-danger">Eliminar</a>
              </div> -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- <script>
    function deleteMedicine(e){
      sn = confirm("¿Realmente desea este medicamento?");

      if(!sn){
        e.preventDefault();
      }
    }
  </script> -->
</body>
</html>
