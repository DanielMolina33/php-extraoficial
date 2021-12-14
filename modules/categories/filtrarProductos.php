<!DOCTYPE html>
<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body class="bg-secondary-custom">

	<?php
    require'cod/categoria_sub.php';
    $id = $_GET['id'];
    $Nombresub= $_GET['nom'];
    $cat = new Categorias();
    $result = $cat->filtrarproductos($id);

    
    echo "<div class=container>";
		echo "<h1 class=text-center>productos</h1>";
		echo "<form action='listadocategorias.php' method='GET'>
		<button class=btn>
			<img src='img/1486348529-back-backwards-repeat-arrows-arrow_80455 (1).ico' width=30px/>
			<a>Atras</a>
		</button>";
		echo "<br>";
		echo "<table border=1 class=table>";
		echo "<tr>
				<th>Id</th>
				<th>Referencia</th>
				<th>Nombre</th>
				<th>descripcion</th>
				<th>precio</th>
				<th>stock</th>
				<th>color</th>
				<th>talla</th>
                <th>usuario Modifica</th>
                <th>Fecha</th>
                <th>Fecha Modifica</th>
                <th>estado</th>
                <th>subcategoria</th>
                <th>PrecioDescuento</th>
			</tr>";

		while ($datos = mysqli_fetch_assoc($result)){
			if ($datos['usuarioModifica']== ""){
				$datos['usuarioModifica']= 'no registra';
			}
			if ($datos['fechaModificacion']== ""){
				$datos['fechaModificacion']= 'no registra';
			}
            if ($datos['precioDescuento']== ""){
                $datos['precioDescuento']= 'no aplica';
                // print_r($datos);
            }
            $datos['subcategoria']= $Nombresub;
			echo "<tr>";
				foreach ($datos as $key => $value) {
					echo "<td>".$value."</td>";
					
					
				}
		}
		echo "</table>";
		echo "<form action='inicio.php' method='GET'>
		<button class=btn>
			<img src='img/4213459-common-door-exit-logout-out-signout_115411.ico' width=30px/>
			<a>salir</a>
		</button>";
		echo "</div>";
	?>
</body>
</html>