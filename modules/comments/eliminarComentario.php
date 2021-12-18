<?php
	
# *************** Anclar archivos php ***************

	require 'Comentario.php';
	
# *************** Recibe los datos del formulario ***************

  $id= $_POST['idComentarios'];

	$general = new Comentario();
	
	$respuesta = $general->eliminar($id);

# *************** Mensaje para el usuario ***************

	if ($respuesta == 1){
		$msn = "<font color = green>El registro se elimino correctamente</font>";
	}else{
		$msn = "<font color = red>No se elimino el registro</font>";
	}

# *************** Redireccionar ***************

	header('Location: consultaComentarios.php?msn='.$msn);
?>