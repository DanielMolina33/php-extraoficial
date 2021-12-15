<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Productos</title>
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css">
	<script type="text/javascript">
		function volver() {
			window.history.back();
		}
	</script>
</head>
<body> 
	<?php
        require 'Producto.php';
        $id = $_GET['idProductos'];
        $pte = new Producto();
        $datos = $pte->editar($id);
        $datos = mysqli_fetch_assoc($datos);
    ?>             
	<div class="container">	
		<h1 class="text-center">Editar Producto</h1>
		<form action="actualizarProducto.php" method="GET">
			Digite la referencia <br><input class="m-2" type="text" name="referencia" placeholder="Referencia" value="<?php echo $datos['referencia']; ?>"><br>
			Digite el nombre: <br><input class="m-2" type="text" name="nombre" placeholder="Nombre" value="<?php echo $datos['nombre']; ?>"><br>
			Digite una descripción: <br><textarea class="m-2" name="descripcion" rows="4" cols="50"><?php echo $datos['descripcion']; ?></textarea><br>
			Digite el precio: <br><input class="m-2" type="number" name="precio" placeholder="Precio" value="<?php echo $datos['precio']; ?>"><br>
			Digite el stock: <br><input class="m-2" type="number" name="stock" placeholder="Stock" value="<?php echo $datos['stock']; ?>"><br>
			Digite el color: <br><input class="m-2" type="number" name="color" placeholder="Color" value="<?php echo $datos['color']; ?>"><br>
			Digite la talla: <br><input class="m-2" type="number" name="talla" placeholder="Talla" value="<?php echo $datos['talla']; ?>"><br>
			Digite el usuario modifica: <br><input class="m-2" type="number" name="usuarioModifica" placeholder="Usuario Modifica" value="<?php echo $datos['usuarioModifica']; ?>"><br>
			Digite el estado: <br><input class="m-2" type="number" name="estado" placeholder="Estado" value="<?php echo $datos['estado']; ?>"><br>
			Digite la subcategoría: <br><input class="m-2" type="number" name="subcategoria" placeholder="Subcategoria" value="<?php echo $datos['subcategoria']; ?>"><br>
			Digite el precio descuento: <br><input class="m-2" type="number" name="precioDescuento" placeholder="Precio descuento" value="<?php echo $datos['precioDescuento']; ?>"><br>
			<input type="hidden" name="id" value="<?php echo $datos['idProductos']; ?>"><br>
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