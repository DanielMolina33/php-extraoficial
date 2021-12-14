<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Nueva categoria</title>
	<link rel="stylesheet" href="../../css/contentBackground.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" href="css/style.css">
	<script type="text/javascript">
		function volver() {
			window.history.back();
		}
	</script>
</head>
<body class="bg-secondary-custom">             
	<div class="container">	
		<h1 class="text-center">Nueva SUBcategoria</h1>
		<form action="cod/newsubcategorias.php" method="GET">
			<input  type="text" name="nombre" placeholder="nombre subcategoria"><br>
		
					
			Indique la fecha de creacion<br><input class="m-2" type="date" name="fechaCreacion" placeholder="Fecha Creacion"><br>
            
            <?php
            require'cod/categoria_sub.php';
            $cat = new Categorias();
            $result = $cat->consulta();
            $result = $cat->consultacategorias();
                echo"<select name='categoria'>";
				echo"<option selected value='0'> Elige una categoria</option>";
                while ($datos = mysqli_fetch_assoc($result)){
                        echo "<option value=".$datos['idTipos'].">".$datos['descripcion']."</option>" ;
                       
                }
				echo"</select><br> ";
                    
            ?>
            <select name='estado'>"
				<option selected value="0"> Elige una opción </option>
				<option value="8">Activo</option> 
				<option value="9">Inactivo</optio>
            </select> 	

			<input  type="submit" name="" placeholder="guardar">
			<input type="button" name="" value="Volver" onclick="volver()">
            
		</form><br>
	</div>
	
</body>
</html