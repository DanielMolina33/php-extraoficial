<?php
	
# *************** Anclar archivos php ***************

	require 'Producto.php';
	
# *************** Recibe los datos del formulario ***************

    $id= $_GET['idProductos'];

	$general = new Producto();
	
	$respuesta = $general->eliminar($id);

# *************** Mensaje para el usuario ***************

if ($respuesta == 1){
		$msn = "<font color = green>El registro se elimino correctamente</font>";
	}else{
		$msn = "<font color = red>No se elimino el registro</font>";
	}

# *************** Redireccionar ***************

	header('Location: index.php?msn='.$msn);
?>