<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>


<?php
    require'cod/categoria_sub.php';
    $id = $_GET['id'];
    $cat = new Categorias();
    $result = $cat->filtrarcategorias($id);

    
    echo "<div class=container>";
		echo "<h1 class=text-center>Listado de subcategorias</h1>";
		echo "<form action='listadocategorias.php' method='GET'>
		<button class=btn>
			<img src='img/1486348529-back-backwards-repeat-arrows-arrow_80455 (1).ico' width=30px/>
			<a>volver</a>
		</button>";
		echo "<br>";
		echo "<a href=formNewSubcategoria.php class=btn>Agregar nueva subcategoria</a>";
		echo "<table border=1 class=table>";
		echo "<tr>
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
			
			echo "<tr>";
				foreach ($datos as $key => $value) {
					echo "<td>".$value."</td>";
					
					
				}
				echo "<td>
					<form action='eliminarPaciente.php' method='GET'>
						<input type=hidden name=id value= ".$datos['idSubcategorias'].">
						<button class=btn>
							<img src='https://img.icons8.com/ios/50/000000/delete--v3.png' width=30px/>
						</button>
					</form>
					</td>";
			
			echo "<td>
					<form action='filtrarProductos.php' method='GET'>
						<input type=hidden name=id value= ".$datos['idSubcategorias'].">
						<input type=hidden name=nom value=".$datos['nombre'].">
						<input type=hidden name=vol value=".$id.">
						<button class=btn>
							<img src='img/gonext_103393.ico' width=30px/>
						</button>
					</form>
					</td>";
					echo "</tr>";
		}
		echo "</table>";
		echo "<form action='inicio.php' method='GET'>
		<button class=btn>
			<img src='img/4213459-common-door-exit-logout-out-signout_115411.ico' width=30px/>
			<a>salir</a>
		</button>";

		
		if(isset($_GET['msn'])){
			echo $_GET['msn'];
		}
	
	echo "</div>";

	
?>