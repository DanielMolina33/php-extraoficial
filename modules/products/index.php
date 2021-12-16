<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"/>
	<link rel="stylesheet" href="../../css/contentBackground.css">
	<script type="text/javascript">
		function confirmar(){
			var n = confirm("¿Realmente quiere eliminar el registro?");
			return n;
		}
	</script>
</head>
<body class="bg-secondary-custom">
	<?php
		require 'Producto.php';	

		$pte = new Producto();
		$resultado = $pte->consultar();

		echo "<div class=container>";
			echo "<h1 class=text-center>Listado de Productos</h1>";
			if (isset($_POST['msn'])) {
				echo $_POST['msn'];
			}
			echo "<br>";
			echo "<a href=formProducto.php class=btn>Agregar nuevo Producto</a>";
			echo "<table border=1 class=table>";
			echo "<tr>
					<th>IdProducto</th>
					<th>Referencia</th>
					<th>Nombre</th>
					<th>Descripcion</th>
					<th>Precio</th>
					<th>Stock</th>
					<th>Color</th>
					<th>Talla</th>
					<th>Usuario modifica</th>
					<th>Fecha creación</th>
					<th>Fecha modifica</th>
					<th>Estado</th>
					<th>Subcategoría</th>
					<th>Precio descuento</th>
					<th>Editar</th>
					<th>Eliminar</th>
				</tr>";

			while ($datos = mysqli_fetch_assoc($resultado)){
				echo "<tr class='bg-transparent'>";
					foreach ($datos as $key => $value) {
						echo "<td>".$value."</td>";
					}
					echo "<td>
						<form action='editarProducto.php' method='POST'>
							<input type=hidden name=idProductos value= ".$datos['idProductos'].">
							<button title='Editar' class=btn>
								<img src='https://img.icons8.com/ios-glyphs/30/000000/edit--v2.png' width=30px/>
							</button>
						</form>
						</td>";
					echo "<td>
						<form action='eliminarProducto.php' method='POST'>
							<input type=hidden name=idProductos value= ".$datos['idProductos'].">
							<button title='Eliminar' class=btn>
								<img src='https://img.icons8.com/ios/50/000000/delete--v3.png' width=30px/>
							</button>
						</form>
						</td>";
				echo "</tr>";
			}
			echo "</table>";
		echo "</div>";
	?>
</body>
</html>