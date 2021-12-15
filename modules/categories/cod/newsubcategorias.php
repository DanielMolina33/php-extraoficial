<?php
	
	
	
# *************** Anclar archivos php ***************
	require 'categoria_sub.php';

// # *************** Recibe los datos del formulario ***************

	$datos[0] = $_POST['nombre'];
	$datos[1] = $_POST['fechaCreacion'];
	$datos[2] = $_POST['categoria'];
	$datos[3] = $_POST['estado'];


	$general = new Categorias();
	
	$general -> nombre = $datos[0];
	$general -> fechaCreacion = $datos[1];
	$general -> categoria = $datos[2];
    $general -> estado = $datos[3];
        

	
	$respuesta = $general -> guardarSubcategoria();

// # *************** Mensaje para el usuario ***************

if ($respuesta == 1){
		$msn = "<font color = green>El registro de la subCategoria fue un exito</font>";
	}else{
		$msn = "<font color = red>No se creo la Categoria</font>";
	}

// # *************** Redireccionar ***************

	header('Location: ../listas_subcategorias.php?msn='.$msn);
	?>