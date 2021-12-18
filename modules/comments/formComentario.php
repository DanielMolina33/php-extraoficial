<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Productos	</title>
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"/>
	<link rel="stylesheet" href="../../css/contentBackground.css">
	<script type="text/javascript">
		function volver() {
			window.history.back();
		}
	</script>
</head>
<body class="bg-secondary-custom">
	<?php
		$productoId = $_GET['idProductos'];
	?>
	<div class="row justify-content-start mt-5 ms-5">
			<a href="../products/consultaProductos.php" title="Atrás" class="fs-4 text-decoration-none">
				<img src='../../img/1486348529-back-backwards-repeat-arrows-arrow_80455 (1).ico' width=30px/>
			</a>
		</div>        
	<section class="row h-100 w-100 d-flex flex-column align-items-center m-0 mt-5">
		<div class="col-12 col-lg-6 mb-4">
			<h3 class="display-4 text-center">Formulario comentarios</h3>
		</div>

		<div class="col-12 col-lg-6">
			<form
				action="newComentario.php"
				method="POST">
				<div class="form-floating mb-3">
					<textarea class="form-control" placeholder="Escribe tu comentario" name="descripcion" id="descripcion"></textarea>
					<label for="descripcion" class="text-secondary">Escribe tu comentario</label>
				</div>

				<div class="mb-3">
					<label for="perfil" class="w-100">
						<select name="perfil" required="required" id="perfil" class="form-select">
							<option value="">Perfil</option>
							<?php require_once "./consultaPerfiles.php"; ?>
						</select>
					</label>
				</div>

				<div>
					<input type="hidden" name="idProductos" value="<?php echo $productoId; ?>"/>
				</div>

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
</html>