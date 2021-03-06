<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Productos</title>
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"/>
	<link rel="stylesheet" href="../../css/contentBackground.css">
	<script type="text/javascript">
		function volver() {
			window.history.back();
		}
	</script>
</head>
<body class="bg-secondary-custom"> 
	<?php
        require 'Producto.php';
        $id = $_POST['idProductos'];
        $pte = new Producto();
        $datos = $pte->editar($id);
        $datos = mysqli_fetch_assoc($datos);
  ?>             
	<div class="row justify-content-start mt-5 ms-5">
		<a href="index.php" title="Atrás" class="fs-4 text-decoration-none">
			<img src='../../img/1486348529-back-backwards-repeat-arrows-arrow_80455 (1).ico' width=30px/>
		</a>
	</div>        
	<section class="row h-100 w-100 d-flex flex-column align-items-center m-0 mt-5">
		<div class="col-12 col-lg-6 mb-4">
			<h3 class="display-4 text-center">Editar producto</h3>
		</div>

		<div class="col-12 col-lg-6">
			<form
				action="actualizarProducto.php"
				method="POST">
				<div class="mb-3">
					<label for="referencia" class="w-100">
						<input
							type="text"
							required="required"
							name="referencia"
							id="referencia"
							placeholder="Referencia"
							value="<?php echo $datos['referencia']; ?>"
							class="form-control"
						/>
					</label>
				</div>

				<div class="mb-3">
					<label for="nombre" class="w-100">
						<input
							type="text"
							required="required"
							name="nombre"
							id="nombre"
							placeholder="Nombre"
							class="form-control"
							value="<?php echo $datos['nombre']; ?>"
						/>
					</label>
				</div>

				<div class="mb-3">
					<label for="descripcion" class="w-100">
						<textarea
							type="text"
							required="required"
							name="descripcion"
							id="descripcion"
							placeholder="Descripción del producto"
							class="form-control"><?php echo $datos['descripcion']; ?></textarea>
					</label>
				</div>

				<div class="mb-3">
					<label for="precio" class="w-100">
						<input
							type="number"
							required="required"
							name="precio"
							id="precio"
							placeholder="Precio"
							class="form-control"
							value="<?php echo $datos['precio']; ?>"
						/>
					</label>
				</div>

				<div class="mb-3">
					<label for="stock" class="w-100">
						<input
							type="number"
							required="required"
							name="stock"
							id="stock"
							placeholder="Stock"
							class="form-control"
							value="<?php echo $datos['stock']; ?>"
						/>
					</label>
				</div>

				<div class="mb-3">
					<label for="color" class="w-100">
						<select name="color" required="required" id="color" class="form-select">
							<option value="">Color</option>
							<?php require_once "./consultaColores.php"; obtenerColores($datos['color']); ?>
						</select>
					</label>
				</div>

				<div class="mb-3">
					<label for="talla" class="w-100">
						<select name="talla" required="required" id="talla" class="form-select">
							<option value="">Talla</option>
							<?php require_once "./consultaTallas.php"; obtenerTallas($datos['talla']); ?>
						</select>
					</label>
				</div>

				<div class="mb-3">
					<label for="subcategoria" class="w-100">
						<select name="subcategoria" required="required" id="subcategoria" class="form-select">
							<option value="">Subcategoria</option>
							<?php require_once "./consultaSubcategorias.php"; obtenerSubcategorias($datos['subcategoria']); ?>
						</select>
					</label>
				</div>

				<div class="mb-3">
					<label for="precioDescuento" class="w-100">
						<input
							type="number"
							required="required"
							name="precioDescuento"
							id="precioDescuento"
							placeholder="Precio Descuento"
							class="form-control"
							value="<?php echo $datos['precioDescuento']; ?>"
						/>
					</label>
				</div>

				<div class="mb-3">
          <label for="estado" class="w-100">
            <select  required="required" id="estado" class="form-select" name="estado">
              <option value="">Elige un estado</option>
              <option value="8">Activo</option> 
              <option value="9">Inactivo</option>
            </select>
          </label>
        </div>

				<div>
					<input type="hidden" name="id" value="<?php echo $id; ?>"/>
				</div>

				<div class="mb-3">
					<input type="submit" value="Actualizar" class="btn bg-dark text-white w-100"/>
				</div>

				<div>
					<input type="reset" value="Limpiar" class="btn bg-dark text-white w-100"/>
				</div>
			</form>
		</div>  
	</section>
	<?php
		if(isset($_POST['msn'])){
			echo $_POST['msn'];
		}
	?>
</body>
</html>