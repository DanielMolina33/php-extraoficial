<!DOCTYPE html>
<html>
<head>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" href="../../css/contentBackground.css">
</head>
<body class="bg-secondary-custom">
	<?php
			require'cod/categoria_sub.php';
			$cat = new Categorias();
			$result = $cat->consulta();
		$cont=0;
			
			echo "<div class=container>";
			echo "<h1 class=text-center>Listado de subcategorias</h1>";
			echo "<form action='index.php' method='GET'>
			<button class=btn title='Atrás'>
				<img src='img/1486348529-back-backwards-repeat-arrows-arrow_80455 (1).ico' width=30px/>
			</button>";
			echo "<br>";
			echo "<a href=formNewSubcategoria.php class=btn>Agregar nueva subcategoria</a>";
			echo "<table border=1 class=table>";
			echo "<tr>
					<th>#</th>
					<th>Id</th>
					<th>nombre</th>
					<th>usuario creador</th>
					<th>fecha creacion</th>
					<th>fecha modifica</th>
					<th>Categoria</th>
					<th>estado</th>
					<th>elimar</th>
				</tr>";

			while ($datos = mysqli_fetch_assoc($result)){
				if ($datos['usuarioModifica']== ""){
					$datos['usuarioModifica']= 'no registra';
				}
				if ($datos['fechaModificacion']== ""){
					$datos['fechaModificacion']= 'no regstra';
				}
				if ($datos['categoria']== 19){
					$datos['categoria']= 'mujer';}
				elseif ($datos['categoria']== 20){
					$datos['categoria']= 'hombre';
				}
				$cont= 1+$cont;
				echo "<tr>";
				echo "<td>".$cont."#</td>";
					foreach ($datos as $key => $value) {
						echo "<td>".$value."</td>";
						
						
					}
					echo "<td>
						<form action='./cod/eliminarSubCategorias.php' method='GET'>
							<input type=hidden name=id value= ".$datos['idSubcategorias'].">
							<button class=btn>
								<img src='https://img.icons8.com/ios/50/000000/delete--v3.png' width=30px/>
							</button>
						</form>
						</td>";
					echo "<td>
						<form action='filtrarProductos.php' method='GET'>
							<input type=hidden name=id value= ".$datos['idSubcategorias'].">
							<input type=hidden name=nom value= ".$datos['nombre'].">
							<button class=btn>
								<img src='img/gonext_103393.ico' width=30px/>
							</button>
						</form>
						</td>";
				echo "</tr>";
			}
			
			if(isset($_GET['msn'])){
				echo $_GET['msn'];
			}
		
			echo "</table>";
		echo "</div>";
	?>
</body>
</html>