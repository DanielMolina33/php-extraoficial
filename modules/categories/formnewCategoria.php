<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Nueva categoria</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" href="css/style.css">
	<script type="text/javascript">
		function volver() {
			window.history.back();
		}
	</script>
</head>
<body>             
	<div class="container">	
		<h1 class="text-center">Nueva categoria</h1>
		<form action="cod/newcategoria.php" method="GET">
			<input  type="text" name="descripcion" placeholder="Descripcion Categoria"><br>
			<select name="estado">
				<option selected value="0"> Elige una opción </option>
				<option value="8">Activo</option> 
				<option value="9">Inactivo</option>
			</select> 			
			Indique la fecha de creacion<br><input class="m-2" type="date" name="fechaCreacion" placeholder="Fecha Creacion"><br>

			<input  type="submit" name="" placeholder="guardar">
			<input type="button" name="" value="Volver" onclick="volver()">
		</form><br>
	</div>
	
</body>
</html