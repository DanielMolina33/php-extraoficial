<?php
	
# *************** Anclar archivos php ***************

	require 'Comentario.php';

# *************** Recibe los datos del formulario ***************

	$datos[0] = $_POST['descripcion'];
	$datos[1] = $_POST['idProductos'];

# *************** Se crea la instancia (objeto) de la clase Paciente ***************

$general = new Comentario();

# *************** Accediendo a funciones ***************

 	$general -> descripcion = $datos[0];
	$general -> producto = $datos[1];

	$respuesta = $general -> guardar();

# *************** Mensaje para el usuario ***************

if ($respuesta == 1){
		$msn = "<font color = green>El registro se creo correctamente</font>";
	}else{
		$msn = "<font color = red>No se creo el registro</font>";
	}

# *************** Redireccionar ***************

	header('Location: ../products/consultaProductos.php?msn='.$msn."&esComentario=1");
?>