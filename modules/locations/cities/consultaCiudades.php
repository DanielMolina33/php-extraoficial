<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="../../../css/contentBackground.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css"/>
	<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
	<script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
	<script type="text/javascript">
		function confirmar(){
			var n = confirm("¿Realmente quiere eliminar el registro?");
			return n;
		}
	</script>
	<style>
		.vh-100 {
			height: 100vh;
		}
	</style>
</head>
<body class="bg-secondary-custom">
	<?php
		require 'Ciudades.php';	

		$pte = new Ciudades();
		$resultado = $pte->consultar();

		echo "<div class=container>";
			echo "<h1 class=text-center>Listado Ciudades</h1>";
			echo "
				<div class='d-flex justify-content-center align-items-center mt-5' id=loader>
					<div class='spinner-border text-dark' role='status'>
						<span class='visually-hidden'>Loading...</span>
					</div>
				</div>
			";
			if (isset($_POST['msn'])) {
				echo $_POST['msn'];
			}
			echo "<br>";
			echo "<a href=formCiudades.php class='btn d-none' id=add>Agregar nueva ciudad</a>";
			echo "<table border=1 class='table d-none' id=datatable>";
			echo "<thead>";
			echo "<tr>
					<th>Id</th>
					<th>nombre</th>
					<th>usuarioModifica</th>
					<th>fechaCreacion</th>
					<th>fechaModificacion</th>
					<th>departamento</th>
					<th>Editar</th>
					<th>Eliminar</th>
				</tr>";
			echo "</thead>";

			while ($datos = mysqli_fetch_assoc($resultado)){
				echo "<tr class='bg-transparent'>";
					foreach ($datos as $key => $value) {
						echo "<td >".$value."</td>";
					}
					echo "<td>
						<form action='editarCiudades.php' method='GET'>
							<input type=hidden name=idCiudades value= ".$datos['idCiudades'].">
							<button class=btn>
								<img src='https://img.icons8.com/ios-glyphs/30/000000/edit--v2.png' width=30px/>
							</button>
						</form>
						</td>";
					echo "<td>
						<form action='eliminarCiudades.php' method='GET'>
							<input type=hidden name=idCiudades value= ".$datos['idCiudades'].">
							<button class=btn>
								<img src='https://img.icons8.com/ios/50/000000/delete--v3.png' width=30px/>
							</button>
						</form>
						</td>";
				echo "</tr>";
			}
			echo "</table>";
		echo "</div>";
	?>
	<script src="../js/datatableOptions.js"></script>
</body>
</html>