<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Departamentos</title>
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"/>
	<link rel="stylesheet" href="../../../css/contentBackground.css">
	<script type="text/javascript">
		function volver() {
			window.history.back();
		}
	</script>
</head>
<body class="bg-secondary-custom"> 
	<?php
    require 'Ciudades.php';
    $id = $_GET['idCiudades'];
    $pte = new Ciudades();
    $datos = $pte->editar($id);
    $datos = mysqli_fetch_assoc($datos);
  ?> 

	<div class="row justify-content-start mt-5 ms-5">
	<a href="../index.php" title="Atrás" class="fs-4 text-decoration-none">
		<img src='../../../img/1486348529-back-backwards-repeat-arrows-arrow_80455 (1).ico' width=30px/>
	</a>
  </div>        
  <section class="row h-100 w-100 d-flex flex-column align-items-center m-0 mt-5">
    <div class="col-12 col-lg-6 mb-4">
    	<h3 class="display-4 text-center">Formulario ciudades</h3>
    </div>

    <div class="col-12 col-lg-6">
    	<form
				action="./actualizarCiudades.php"
				method="POST">
        <div class="mb-3">
          <label for="nombre" class="w-100">
            <input
							type="text"
							required="required"
							name="nombre"
							id="nombre"
							placeholder="Nombre"
							class="form-control"
							value="<?php echo $datos['nombre']; ?>"
            />
          </label>
        </div>

        <div class="mb-3">
          <label for="departamento" class="w-100">
            <input
							type="text"
							required="required"
							readonly="readonly"
							name="departamento"
							id="departamento"
							placeholder="Nombre"
							class="form-control"
							value="<?php echo $datos['departamento']; ?>"
            />
          </label>
        </div>

				<input type="hidden" name="idCiudades" value="<?php echo $datos['idCiudades']; ?>"><br>

        <div class="mb-3">
          <input type="submit" value="Actualizar" class="btn bg-dark text-white w-100"/>
        </div>

        <div>
          <input type="reset" value="Borrar" class="btn bg-dark text-white w-100"/>
        </div>
      </form>
    </div>  
	</section>
	<?php
		if(isset($_POST['msn'])){
			echo $_POST['msn'];
		}
	?>
</body>
</html>