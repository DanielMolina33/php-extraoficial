<?php
		require 'Entity.php';

		$pte = new Entity();
		$tipo = $pte->tipoDocumento();
		$estado = $pte->estado();

		$id = 0;
		$entity = "";
		$tipoDoc = "";
		$documento = "";
		$estadoEnt = "";

		if (isset($_GET['id'])) {
			$id = $_GET['id'];

			$update = $pte->queryUpdateEntity($_GET['id']);

			while ($up = $update->fetch_assoc()){
				$entity = $up['nombre'];
				$tipoDoc = $up['tipoDocumento'];
				$documento = $up['numeroDocumento'];
				$estadoEnt = $up['estado'];
			}
		}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Productos	</title>
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"/>
	<script src="https://code.jquery.com/jquery-3.6.0.min.js" type="text/javascript"></script>
	<link rel="stylesheet" href="../../css/contentBackground.css">
	<script type="text/javascript">
		function volver() {
			window.history.back();
		}
	</script>
</head>
<body class="bg-secondary-custom">
	<div class="row justify-content-start mt-5 ms-5">
			<a href="index.php" title="Atrás" class="fs-4 text-decoration-none">
				<img src='../../img/1486348529-back-backwards-repeat-arrows-arrow_80455 (1).ico' width=30px/>
			</a>
		</div>        
	<section class="row h-100 w-100 d-flex flex-column align-items-center m-0 mt-5">
		<div class="col-12 col-lg-6 mb-4">
			<h3 class="display-4 text-center">Formulario Entidades</h3>
		</div>

		<div class="col-12 col-lg-6">
			<form
				action="newEntity.php"
				method="POST">
				<div class="mb-3">
					<label for="entidad" class="w-100">
						<input
							type="text"
							required="required"
							name="entidad"
							id="entidad"
							placeholder="Entidad"
							class="form-control"
							value="<?php echo $entity ?>"
						/>
					</label>
				</div>

				<div class="mb-3">
					<label for="tipo" class="w-100">
						<select name="tipo" required="required" id="tipo" class="form-select" placeholder="Tipo Documento">
							<option value="">Elige Tipo de Documento</option>
							<?php 
								while ($datos = $tipo->fetch_assoc()){
									echo "<option value='".$datos['idTipos']."'>".$datos['descripcion']."</option>";
								}
							?>
						</select>
					</label>
				</div>

				<div class="mb-3">
					<label for="documento" class="w-100">
						<input
							type="number"
							required="required"
							name="documento"
							id="documento"
							placeholder="N° Documento"
							class="form-control"
							value="<?php echo $documento ?>"
						/>
					</label>
				</div>

				<div class="mb-3">
					<label for="estado" class="w-100">
						<select name="estado" required="required" id="estado" class="form-select">
							<option value="">Elige Estado</option>
							<?php 
								while ($datos = $estado->fetch_assoc()){
									echo "<option value='".$datos['idTipos']."'>".$datos['descripcion']."</option>";
								}
							?>
						</select>
					</label>
				</div>
				<input type="hidden" name="idEntity" value="<?php echo $id ?>" >	
				<div class="mb-3">
					<input type="submit" value="Enviar" class="btn bg-dark text-white w-100"/>
				</div>

				<div>
					<input type="reset" value="Limpiar" class="btn bg-dark text-white w-100"/>
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
<script>
	var tipo = document.getElementById("tipo");
    tipo.value = <?php echo $tipoDoc; ?>

	var estado = document.getElementById("estado");
    estado.value = <?php echo $estadoEnt; ?>
</script>
</html>