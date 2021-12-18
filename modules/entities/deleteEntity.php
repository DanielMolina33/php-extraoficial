<?php
	
# *************** Anclar archivos php ***************

	require 'Entity.php';
	
# *************** Recibe los datos del formulario ***************

    $id= $_GET['id'];
	
 	$general = new Entity();
	
 	$respuesta = $general->delete($id);

 # *************** Mensaje para el usuario ***************

 if ($respuesta == 1){
 		$msn = "<font color = green>El registro se elimino correctamente</font>";
 	}else{
 		$msn = "<font color = red>No se elimino el registro</font>";
 	}

# *************** Redireccionar ***************

	header('Location: index.php?msn='.$msn);
?>