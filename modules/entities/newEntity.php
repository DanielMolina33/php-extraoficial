<?php
	
# *************** Anclar archivos php ***************

	require 'Entity.php';

# *************** Recibe los datos del formulario ***************

	$datos[0] = $_POST['entidad'];
	$datos[1] = $_POST['tipo'];
	$datos[2] = $_POST['documento'];
	$datos[3] = $_POST['estado'];
	$datos[4] = $_POST['idEntity'];

# *************** Se crea la instancia (objeto) de la clase Paciente ***************

$general = new Entity();

# *************** Accediendo a funciones ***************

 	$general -> nombre = $datos[0];
	$general -> numeroDocumento = $datos[2];
	$general -> tipoDocumento = $datos[1];
	$general -> estado = $datos[3];
	$general -> id = $datos[4];
	
	if($datos[4] != 0){
		$respuesta = $general -> actualizar($datos);
		if ($respuesta == 1){
			$msn = "<font color = green>El registro se actualizo correctamente</font>";
		}else{
			$msn = "<font color = red>No se actualizo el registro</font>";
		}
	}else{
		$respuesta = $general -> guardar();
		if ($respuesta == 1){
			$msn = "<font color = green>El registro se creo correctamente</font>";
		}else{
			$msn = "<font color = red>No se creo el registro</font>";
		}
	}

# *************** Mensaje para el usuario ***************

	/*if ($respuesta == 1){
		$msn = "<font color = green>El registro se creo correctamente</font>";
	}else{
		$msn = "<font color = red>No se creo el registro</font>";
	}*/

# *************** Redireccionar ***************

	header('Location: index.php?msn='.$msn);
?>