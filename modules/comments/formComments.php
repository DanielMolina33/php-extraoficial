<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Comentarios</title>
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
	<div class="row justify-content-start mt-5 ms-5">
			<a href="index.php" title="Atrás" class="fs-4 text-decoration-none">
				<img src='../../img/1486348529-back-backwards-repeat-arrows-arrow_80455 (1).ico' width=30px/>
			</a>
		</div>        
	<section class="row h-100 w-100 d-flex flex-column align-items-center m-0 mt-5">
		<div class="col-12 col-lg-6 mb-4">
			<h3 class="display-4 text-center">Formulario comentarios</h3>
		</div>

		<div class="col-12 col-lg-6">
			<form
				action="insertar.php"
				method="POST">
				<div class="mb-3">
					<label for="comenomb" class="w-100">
						<input
							type="text"
							required="required"
							name="comenomb"
							id="comenomb"
							placeholder="Título del comentio"
							class="form-control"
						/>
					</label>
				</div>

				<div class="mb-3">
					<label for="comedesc" class="w-100">
						<input
							type="text"
							required="required"
							name="comedesc"
							id="comedesc"
							placeholder="Descripción"
							class="form-control"
						/>
					</label>
				</div>

				<div class="mb-3">
					<label for="comefech" class="w-100">
						<textarea
							type="date"
							required="required"
							name="comefech"
							id="comefech"
							placeholder="Fecha comentario"
							class="form-control"></textarea>
					</label>
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