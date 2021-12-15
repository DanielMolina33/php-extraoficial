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
	$general -> usuarioModifica = $datos[7];
	$general -> estado = $datos[8];
	$general -> subcategoria = $datos[9];
	$general -> precioDescuento = $datos[10];
	
	$respuesta = $general -> guardar();

# *************** Mensaje para el usuario ***************

if ($respuesta == 1){
		$msn = "<font color = green>El registro se creo correctamente</font>";
	}else{
		$msn = "<font color = red>No se creo el registro</font>";
	}

# *************** Redireccionar ***************

	header('Location: index.php?msn='.$msn);
?>