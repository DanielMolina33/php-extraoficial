<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Departamentos</title>
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css">
	<script type="text/javascript">
		function volver() {
			window.history.back();
		}
	</script>
</head>
<body> 
<?php
        require 'Ciudades.php';
        $id = $_GET['idCiudades'];
        $pte = new Ciudades();
        $datos = $pte->editar($id);
        $datos = mysqli_fetch_assoc($datos);
		
    ?>                     
	<div class="container">	
		<h1 class="text-center">Ciudades</h1>
		<form action="actualizarCiudades.php" method="GET">
			Digite su nombre: <br><input class="m-2" type="text" name="nombre" placeholder="Nombre" value="<?php echo $datos['nombre']; ?>"><br>
			Usuario modifica: <br><input class="m-2" type="number" name="usuarioModifica" placeholder="usuario modifica"value="<?php echo $datos['usuarioModifica']; ?>"><br>
			Digite la fecha de creaccion: <br><input class="m-2" type="date" name="fechaCreacion" placeholder="fecha de creacion"value="<?php echo $datos['fechaCreacion']; ?>"><br>
			Digite la fecha de modificacion: <br><input class="m-2" type="date" name="fechaModificacion" placeholder="fecha de modificacion" value="<?php echo $datos['fechaModificacion']; ?>"><br>
			Digite el ID del departamento: <br><input class="m-2" type="number" name="departamento" placeholder="ID del departamento" value="<?php echo $datos['departamento']; ?>"><br>
			<input type="hidden" name="idCiudades" value="<?php echo $datos['idCiudades']; ?>"><br>
			<input class="m-2" type="submit" name="">
		</form><br>
	</div>
	<?php
		if(isset($_GET['msn'])){
			echo $_GET['msn'];
		}
	?>
</body>
</html>