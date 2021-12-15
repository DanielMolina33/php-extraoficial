<?php
	
# *************** Anclar archivos php ***************

	require 'Ciudades.php';
	
# *************** Recibe los datos del formulario ***************

	$datos[0] = $_GET['nombre'];
	$datos[1] = $_GET['departamento'];
	$datos[2] = $_GET['idCiudades'];


	$general = new Ciudades();
	
	$respuesta = $general->actualizar($datos);

# *************** Mensaje para el usuario ***************

if ($respuesta == 1){
		$msn = "<font color = green>El registro se actualizo correctamente</font>";
	}else{
		$msn = "<font color = red>No se actualizo el registro</font>";
	}

# *************** Redireccionar ***************

	// header('Location: consultaCiudades.php?msn='.$msn);
?>