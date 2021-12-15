<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Ciudades</title>
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css">
	<script type="text/javascript">
		function volver() {
			window.history.back();
		}
	</script>
</head>
<body>             
	<div class="container">	
		<h1 class="text-center">Ciudades</h1>
		<form action="newCiudades.php" method="GET">
			Digite su nombre: <br><input class="m-2" type="text" name="nombre" placeholder="Nombre"><br>
			Usuario modifica: <br><input class="m-2" type="number" name="usuarioModifica" placeholder="usuario modifica"><br>
			Digite la fecha de creaccion: <br><input class="m-2" type="date" name="fechaCreacion" placeholder="fecha de creacion"><br>
			Digite la fecha de modificacion: <br><input class="m-2" type="date" name="fechaModificacion" placeholder="fecha de modificacion"><br>
			Digite el ID del departamento: <br><input class="m-2" type="number" name="departamento" placeholder="ID del departamento"><br>
			<input class="m-2" type="submit" name="">
			<input type="button" name="" value="Volver" onclick="volver()">
		</form><br>
	</div>
	<?php
		if(isset($_GET['msn'])){
			echo $_GET['msn'];
		}
	?>
</body>
</html>