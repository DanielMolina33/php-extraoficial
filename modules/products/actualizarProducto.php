<?php
	
# *************** Anclar archivos php ***************

	require 'Producto.php';
	
# *************** Recibe los datos del formulario ***************

	$datos[0] = $_POST['referencia'];
	$datos[1] = $_POST['nombre'];
	$datos[2] = $_POST['descripcion'];
	$datos[3] = $_POST['precio'];
	$datos[4] = $_POST['stock'];
	$datos[5] = $_POST['color'];
	$datos[6] = $_POST['talla'];
	$datos[7] = $_POST['usuarioModifica'];
	$datos[8] = $_POST['estado'];
	$datos[9] = $_POST['subcategoria'];
	$datos[10] = $_POST['precioDescuento'];
  $datos[11] = $_POST['id'];

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