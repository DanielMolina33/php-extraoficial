<?php
	
# *************** Anclar archivos php ***************

	require 'Departamentos.php';
	
# *************** Recibe los datos del formulario ***************

	$datos[0] = $_POST['nombre'];
	$datos[1] = $_POST['pais'];
	$datos[2] = $_POST['idDepartamentos'];


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