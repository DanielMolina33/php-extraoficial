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
		require 'Comentario.php';	

		$pte = new Comentario();
		$resultado = $pte->consultar();

		echo "<div class='row justify-content-start mt-5 ms-5'>
		<a href='index.php' title='Atrás' class='fs-4 text-decoration-none'>
			<img src='../../img/1486348529-back-backwards-repeat-arrows-arrow_80455 (1).ico' width=30px/>
		</a>
  	</div>";
		echo "<div class=container>";
			echo "<h1 class=text-center>Listado de Comentarios</h1>";
			if (isset($_GET['msn'])) {
				echo $_GET['msn'];
			}
			echo "<br>";
			echo "<table border=1 class=table>";
			echo "<tr>
					<th>IdComentarios</th>
					<th>Descripcion</th>
					<th>Fecha creacion</th>
					<th>Producto</th>
					<th>Perfil</th>
					<th>Eliminar</th>
				</tr>";

			while ($datos = mysqli_fetch_assoc($resultado)){
				echo "<tr class='bg-transparent'>";
					foreach ($datos as $key => $value) {
						echo "<td>".$value."</td>";
					}

					echo "<td>
						<form action='eliminarComentario.php' method='POST'>
							<input type=hidden name=idComentarios value= ".$datos['idComentarios'].">
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