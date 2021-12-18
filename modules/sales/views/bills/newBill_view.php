<!DOCTYPE html>
<html lang="es">
<head>
	<meta name="viewport" content="width=device-width; initial-scale=1.0"/>
	<meta charset="utf-8"/>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"/>
	<link rel="stylesheet" href="../../../../css/contentBackground.css">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
	<title>Generar factura</title>
</head>
<body class="bg-secondary-custom">
	<section class="container py-4">
		<div class="row justify-content-start">
			<a href="../../../products/consultaProductos.php" title="Atrás" class="fs-4 text-decoration-none">
				<img src='../../../../img/1486348529-back-backwards-repeat-arrows-arrow_80455 (1).ico' width=30px/>
			</a>
		</div>
		<div class="row justify-content-center mb-4">
			<div class="col-12 col-lg-6">
				<h2 class="display-4 text-center">Generar factura</h2>
			</div>
		</div>
		<?php
			$idProductos = $_GET['idProductos'];
			$productoNombre = $_GET['productoNombre'];
			$productoPrecio = $_GET['productoPrecio'];
			
			$hasMsg = isset($_GET['msg']);

			if($hasMsg){
				$msg = $_GET['msg'];

				echo <<< html
					<div class="row justify-content-center">
						<div class="col-12 col-lg-6">
							<div class="alert alert-primary alert-dismissible fade show" role="alert">
								<span>$msg <a href="./billsList_view.php">Ver listado</a></span>
								<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
							</div>
						</div>
					</div>
				html;
			}
		?>
		<div class="row justify-content-center">
			<div class="col-12 col-lg-6">
			<form
				action="../../controllers/bills/newBill.php"
				method="POST"
			>
				<div class="mb-3">
					<label for="amount" class="w-100">
						<input
							type="number"
							required="required"
							name="amount"
							id="amount"
							placeholder="Cantidad"
							class="form-control"
						/>
					</label>
				</div>
				<div class="mb-3">
					<label for="productName" class="w-100">
						<input 
							type="text"
							required="required"
							disabled="disabled"
							name="productName"
							id="productName"
							value="<?php echo $productoNombre; ?>"
							placeholder="Producto"
							class="form-control"
						/>
					</label>
				</div>
				<div class="mb-3">
					<label for="price" class="w-100">
						<input 
							type="text"
							required="required"
							disabled="disabled"
							name="price"
							id="price"
							value="<?php echo $productoPrecio; ?>"
							placeholder="Precio"
							class="form-control"
						/>
					</label>
				</div>
				<div class="mb-3">
					<label for="profile" class="w-100">
						<select name="profile" required="required" id="profile" class="form-select">
							<option value="">Perfil</option>
							<?php require_once "../../controllers/profiles/getProfiles.php"; ?>
						</select>
					</label>
				</div>
				<div>
					<input type="hidden" name="product" value="<?php echo $idProductos; ?>"/>
				</div>
				<div class="mb-3">
					<input type="submit" value="Enviar" class="btn bg-dark text-white w-100"/>
				</div>
				<div>
					<input type="reset" value="Limpiar" class="btn bg-dark text-white w-100"/>
				</div>
			</form>
		</div>
	</section>
</body>
</html>