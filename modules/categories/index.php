
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<?php
    echo"
	<form action='listadocategorias.php' method='GET'>
		<button class=btn>
			<img src='img/tags_categories_icon_145927.ico' width=120px/>
			categorias
		</button>
	</form>
	";
	echo"
	<form action='listas_subcategorias.php' method='GET'>
		<button class=btn>
			<img src='img/discount_tags_icon_152101.ico' width=120px/>
			subcategorias
		</button>
	</form>
	";
?>

