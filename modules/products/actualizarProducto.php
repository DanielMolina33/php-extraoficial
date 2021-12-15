<?php
	
# *************** Anclar archivos php ***************

	require 'Producto.php';
	
# *************** Recibe los datos del formulario ***************

	$datos[0] = $_GET['referencia'];
	$datos[1] = $_GET['nombre'];
	$datos[2] = $_GET['descripcion'];
	$datos[3] = $_GET['precio'];
	$datos[4] = $_GET['stock'];
	$datos[5] = $_GET['color'];
	$datos[6] = $_GET['talla'];
	$datos[7] = $_GET['usuarioModifica'];
	$datos[8] = $_GET['estado'];
	$datos[9] = $_GET['subcategoria'];
	$datos[10] = $_GET['precioDescuento'];
    $datos[11] = $_GET['id'];

	$general = new Producto();
	
	$respuesta = $general->actualizar($datos);

# *************** Mensaje para el usuario ***************

if ($respuesta == 1){
		$msn = "<font color = green>El registro se actualizo correctamente</font>";
	}else{
		$msn = "<font color = red>No se actualizo el registro</font>";
	}

# *************** Redireccionar ***************

	header('Location: index.php?msn='.$msn);
?>