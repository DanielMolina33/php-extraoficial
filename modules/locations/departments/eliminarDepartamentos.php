<?php
	
# *************** Anclar archivos php ***************

	require 'Departamentos.php';
	
# *************** Recibe los datos del formulario ***************

    $id= $_GET['idDepartamentos'];

	$general = new Departamentos();
	
	$respuesta = $general->eliminar($id);

# *************** Mensaje para el usuario ***************

if ($respuesta == 1){
		$msn = "<font color = green>El registro se elimino correctamente</font>";
	}else{
		$msn = "<font color = red>No se elimino el registro</font>";
	}

# *************** Redireccionar ***************

	header('Location: consultaDepartamentos.php?msn='.$msn);
?>