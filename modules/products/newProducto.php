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
	$datos[7] = $_POST['subcategoria'];
	$datos[8] = $_POST['precioDescuento'];
	$datos[9] = $_POST['estado'];

# *************** Se crea la instancia (objeto) de la clase Paciente ***************

$general = new Producto();

# *************** Accediendo a funciones ***************

 	$general -> referencia = $datos[0];
	$general -> nombre = $datos[1];
	$general -> descripcion = $datos[2];
	$general -> precio = $datos[3];
	$general -> stock = $datos[4];
	$general -> color = $datos[5];
	$general -> talla = $datos[6];
	$general -> subcategoria = $datos[7];
	$general -> precioDescuento = $datos[8];
	$general -> estado = $datos[9];

	$respuesta = $general -> guardar();

# *************** Mensaje para el usuario ***************

if ($respuesta == 1){
		$msn = "<font color = green>El registro se creo correctamente</font>";
	}else{
		$msn = "<font color = red>No se creo el registro</font>";
	}

# *************** Redireccionar ***************

	header('Location: consultaProductos.php?msn='.$msn);
?>