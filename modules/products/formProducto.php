<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Productos	</title>
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css">
	<script type="text/javascript">
		function volver() {
			window.history.back();
		}
	</script>
</head>
<body>             
	<div class="container">	
		<h1 class="text-center">Productos</h1>
		<form action="newProducto.php" method="GET">
			Digite la referencia <br><input class="m-2" type="text" name="referencia" placeholder="Referencia"><br>
			Digite el nombre: <br><input class="m-2" type="text" name="nombre" placeholder="Nombre"><br>
			Digite una descripción: <br><textarea class="m-2" name="descripcion" rows="4" cols="50"></textarea><br>
			Digite el precio: <br><input class="m-2" type="number" name="precio" placeholder="Precio"><br>
			Digite el stock: <br><input class="m-2" type="number" name="stock" placeholder="Stock"><br>
			Digite el color: <br><input class="m-2" type="number" name="color" placeholder="Foranea Color"><br>
			Digite la talla: <br><input class="m-2" type="number" name="talla" placeholder="Foranea Talla"><br>
			Digite el usuario modifica: <br><input class="m-2" type="number" name="usuarioModifica" placeholder="Foranea Usuario Modifica"><br>
			Digite el estado: <br><input class="m-2" type="number" name="estado" placeholder="Foranea Estado"><br>
			Digite la subcategoría: <br><input class="m-2" type="number" name="subcategoria" placeholder="Foranea Subcategoria"><br>
			Digite el precio descuento: <br><input class="m-2" type="number" name="precioDescuento" placeholder="Precio descuento"><br>
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