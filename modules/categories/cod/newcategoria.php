<?php
	
	
	
# *************** Anclar archivos php ***************
	require 'categoria_sub.php';

// # *************** Recibe los datos del formulario ***************

	$datos[0] = $_POST['descripcion'];
	$datos[1] = $_POST['estado'];
	$datos[2] = $_POST['categoria'];
	$datos[3] = $_POST['estado'];

	$general = new Categorias();
	
	$general -> descripcion = $datos[0];
	$general -> estado = $datos[1];
	$general -> fechaCreacion = $datos[2];

	
	$respuesta = $general -> guardarcategoria();

// # *************** Mensaje para el usuario ***************

if ($respuesta == 1){
		$msn = "<font color = green>El registro de la Categoria fue un exito</font>";
	}else{
		$msn = "<font color = red>No se creo la Categoria</font>";
	}

// # *************** Redireccionar ***************

	header('Location: ../listadocategorias.php?msn='.$msn);
	?>