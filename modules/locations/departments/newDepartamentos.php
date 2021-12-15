<?php
	
# *************** Anclar archivos php ***************

	require 'Departamentos.php';

# *************** Recibe los datos del formulario ***************

	$datos[0] = $_GET['nombre'];
	$datos[1] = $_GET['usuarioModifica'];
	$datos[2] = $_GET['fechaCreacion'];
	$datos[3] = $_GET['fechaModificacion'];
	$datos[4] = $_GET['pais'];

# *************** Se crea la instancia (objeto) de la clase Departamentos ***************

	$general = new Departamentos();

# *************** Accediendo a funciones ***************

	$general -> nombre = $datos[0];
	$general -> usuarioModifica = $datos[1];
	$general -> fechaCreacion = $datos[2];
	$general -> fechaModificacion = $datos[3];
	$general -> pais = $datos[4];

	
	$respuesta = $general -> guardar();

# *************** Mensaje para el usuario ***************

if ($respuesta == 1){
		$msn = "<font color = green>El registro se creo correctamente</font>";
	}else{
		$msn = "<font color = red>No se creo el registro</font>";
	}

# *************** Redireccionar ***************

	header('Location: consultaDepartamentos.php?msn='.$msn);
?>