<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css">
	<script src="https://code.jquery.com/jquery-3.6.0.min.js" type="text/javascript"></script>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"/>
	<link rel="stylesheet" href="../../css/contentBackground.css">
	<script type="text/javascript">
		function eliminar(pid){
			if(confirm('¿Seguro desea eliminar el registro?')) {
				$.ajax({
					url : "deleteEntity.php?id="+pid, 
					cache: false,
					dataType : 'html',
					success: function(response) {
						alert('Registro eliminado con exito');
						location.href = "index.php?msn=<font color = green>Registro eliminado exitosamente.</font>";
					},
					error : function(response) {
						alert('Error eliminando registro');
					}
				});
			}
		}
	</script>
</head>
<body class="bg-secondary-custom">
	<?php
		require 'Entity.php';	

		$pte = new Entity();
		$resultado = $pte->consultar();

		echo "<div class=container>";
			echo "<h1 class=text-center>Listado de Entidades</h1>";
			if (isset($_GET['msn'])) {
				echo $_GET['msn'];
			}
			echo "<br>";
			echo "<a href=formEntities.php class=btn>Agregar nueva Entidad</a>";
			echo "<table border=1 class=table>";
			echo "<tr>
					<th>#</th>
					<th>ID Entidad</th>
					<th>Entidad</th>
					<th>Tipo Identidad</th>
					<th>N° Identidad</th>
					<th>Fecha Creación</th>
					<th>Fecha Modificación</th>
					<th>Estado</th>
					<th>Editar</th>
					<th>Eliminar</th>
				</tr>";

			while ($datos = mysqli_fetch_assoc($resultado)){
				echo "<tr class='bg-transparent'>";
					foreach ($datos as $key => $value) {
						echo "<td>".$value."</td>";
					}
					echo "<td>
						<form action='formEntities.php?id=".$datos['idEntidad']."' method='POST'>
							<button title='Editar' class=btn>
								<img src='https://img.icons8.com/ios-glyphs/30/000000/edit--v2.png' width=30px/>
							</button>
						</form>
						</td>";
					echo "<td>
						<a href=javascript:eliminar('".$datos['idEntidad']."')>
							<button title='Eliminar' class=btn>
								<img src='https://img.icons8.com/ios/50/000000/delete--v3.png' width=30px/>
							</button>
						</a>
						</td>";
				echo "</tr>";
			}
			echo "</table>";
		echo "</div>";
	?>
</body>
</html>