<?php
	
# *************** Anclar archivos php ***************

	require 'Departamentos.php';
	
# *************** Recibe los datos del formulario ***************

	$datos[0] = $_GET['nombre'];
	$datos[1] = $_GET['usuarioModifica'];
	$datos[2] = $_GET['fechaCreacion'];
	$datos[3] = $_GET['fechaModificacion'];
	$datos[4] = $_GET['pais'];
	$datos[5] = $_GET['idDepartamentos'];


	$general = new Departamentos();
	
	$respuesta = $general->actualizar($datos);

# *************** Mensaje para el usuario ***************

if ($respuesta == 1){
		$msn = "<font color = green>El registro se actualizo correctamente</font>";
	}else{
		$msn = "<font color = red>No se actualizo el registro</font>";
	}

# *************** Redireccionar ***************

	header('Location: consultaDepartamentos.php?msn='.$msn);
?>