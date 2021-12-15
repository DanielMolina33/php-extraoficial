<?php
	
# *************** Anclar archivos php ***************

	require 'Departamentos.php';

# *************** Recibe los datos del formulario ***************

	$datos[0] = $_POST['nombre'];
	$datos[1] = $_POST['pais'];

# *************** Se crea la instancia (objeto) de la clase Departamentos ***************

	$general = new Departamentos();

# *************** Accediendo a funciones ***************

	$general -> nombre = $datos[0];
	$general -> pais = $datos[1];

	
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