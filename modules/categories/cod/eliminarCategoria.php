<?php
	
# *************** Anclar archivos php ***************

	require 'categoria_sub.php';
	
# *************** Recibe los datos del formulario ***************

    $id= $_GET['id'];
	
 	$general = new Categorias();
	
 	$respuesta = $general->eliminarCategoria($id);

 # *************** Mensaje para el usuario ***************

 if ($respuesta == 1){
 		$msn = "<font color = green>El registro se elimino correctamente</font>";
 	}else{
 		$msn = "<font color = red>No se elimino el registro</font>";
 	}

# *************** Redireccionar ***************

	header('Location: ../listadocategorias.php?msn='.$msn);
?>