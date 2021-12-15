<?php
	
# *************** Anclar archivos php ***************

	require 'Ciudades.php';

# *************** Recibe los datos del formulario ***************

	$datos[0] = $_POST['nombre'];
	$datos[1] = $_POST['departamento'];

# *************** Se crea la instancia (objeto) de la clase Departamentos ***************

	$general = new Ciudades();

# *************** Accediendo a funciones ***************

	$general->nombre = $datos[0];
	$general->departamento = $datos[1];

	
	$respuesta = $general -> guardar();

# *************** Mensaje para el usuario ***************

if ($respuesta == 1){
		$msn = "<font color = green>El registro se creo correctamente</font>";
	}else{
		$msn = "<font color = red>No se creo el registro</font>";
	}

# *************** Redireccionar ***************

	header('Location: consultaCiudades.php?msn='.$msn);
?>