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

		echo "<div>";
			echo "<h1 class=text-center>Listado de Productos</h1>";
			if (isset($_GET['msn'])) {
				if(isset($_GET['esComentario'])){
					echo $_GET['msn'] . " " . "<a href='../comments/consultaComentarios.php' class='text-primary'>Ir a comentarios</a>";
				} else if(isset($_GET['esFactura'])){
					echo $_GET['msn'] . " " . "<a href='../sales/views/bills/billsList_view.php' class='text-primary'>Ir a facturas</a>";
				} else {
					echo $_GET['msn'];
				}
			}
			echo "<br>";
			echo "<a href=formProducto.php class=btn>Agregar nuevo Producto</a>";
			echo "<table border=1 class='table m-auto w-50'>";
			echo "<tr>
					<th>IdProducto</th>
					<th>Referencia</th>
					<th>Nombre</th>
					<th>Descripcion</th>
					<th>Precio</th>
					<th>Stock</th>
					<th>Fecha creación</th>
					<th>Fecha modifica</th>
					<th>Precio descuento</th>
					<th>Facturar</th>
					<th>Comentar</th>
					<th>Editar</th>
					<th>Eliminar</th>
				</tr>";

			while ($datos = mysqli_fetch_assoc($resultado)){
				$idProductos = $datos['idProductos'];
				$productoNombre = $datos['nombre'];
				$productoPrecio = $datos['precio'];

				echo "<tr class='bg-transparent'>";
					foreach ($datos as $key => $value) {
						echo "<td>".$value."</td>";
					}

					echo "<td>
						<form action='../sales/views/bills/newBill_view.php' method='GET'>
							<input type='hidden' name='idProductos' value='$idProductos'>
							<input type='hidden' name='productoNombre' value='$productoNombre'/>
							<input type='hidden' name='productoPrecio' value='$productoPrecio'/>
							<button title='Facturar' class=btn>
								<img src='../../img/bill.png' width=30px/>
							</button>
						</form>
						</td>";
					echo "<td>
						<form action='../comments/formComentario.php' method='GET'>
							<input type=hidden name=idProductos value= ".$datos['idProductos'].">
							<button title='Comentar' class=btn>
								<img src='../../img/comment.png' width=30px/>
							</button>
						</form>
						</td>";
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