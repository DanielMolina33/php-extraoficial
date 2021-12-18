<!DOCTYPE html>
<html lang="es">
<head>
	<meta name="viewport" content="width=device-width; initial-scale=1.0"/>
	<meta charset="utf-8"/>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"/>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
	<title>Generar pago</title>
</head>
<body>
	<section class="container py-4">
		<div class="row justify-content-start">
			<a href="../../index.php" title="Atrás" class="fs-4 text-decoration-none">👈</a>
		</div>
		<div class="row justify-content-center mb-4">
			<div class="col-12 col-lg-6">
				<h2 class="display-4 text-center">Generar pago</h2>
			</div>
		</div>
		<?php
			$hasMsg = isset($_GET['msg']);

			if($hasMsg){
				$msg = $_GET['msg'];

				echo <<< html
					<div class="row justify-content-center">
						<div class="col-12 col-lg-6">
							<div class="alert alert-primary alert-dismissible fade show" role="alert">
								<span>$msg <a href="./medicineList.php">Ver listado</a></span>
								<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
							</div>
						</div>
					</div>
				html;
			}

			if(isset($_GET['id'])){
				include "../../models/medicines/Medicine.php";

				$medicineId = $_GET['id'];
				$medicine = new Medicine();
				$medicineList = $medicine->getMedicines("id = $medicineId")[0];
			}
		?>
		<div class="row justify-content-center">
			<div class="col-12 col-lg-6">
			<form
				action="<?php echo isset($_GET['id']) ? "../../controllers/medicines/newMedicine.php?id=$medicineId" : "../../controllers/medicines/newMedicine.php";?>"
				method="POST"
			>
				<div class="mb-3">
					<label for="typeOfPayment" class="w-100">
            <select name="typeOfPayment" required="required" id="typeOfPayment" class="form-select">
              <option value="">Metodo de pago</option>
              <option <?php echo isset($medicineList) ? $medicineList['tipo'] == "analgesico" ? "selected" : "" : ""?> value="analgesico">Tarjeta de credito</option>
              <option <?php echo isset($medicineList) ? $medicineList['tipo'] == "antigripal" ? "selected" : "" : ""?> value="antigripal">Efectivo</option>
            </select>
					</label>
				</div>
				<div class="mb-3">
					<label for="paymentStatus" class="w-100">
            <select name="paymentStatus" required="required" id="paymentStatus" class="form-select">
              <option value="">Estado de pago</option>
              <option <?php echo isset($medicineList) ? $medicineList['tipo'] == "analgesico" ? "selected" : "" : ""?> value="analgesico">Aprobado</option>
              <option <?php echo isset($medicineList) ? $medicineList['tipo'] == "antigripal" ? "selected" : "" : ""?> value="antigripal">Rechazado</option>
            </select>
					</label>
				</div>
				<div class="mb-3">
					<label for="total" class="w-100">
						<input
							type="number"
							required="required"
							value="<?php echo isset($medicineList) ? $medicineList['codigo'] : ""?>"
							name="total"
							id="total"
							placeholder="Total a pagar"
							class="form-control"
						/>
					</label>
				</div>
				<div class="mb-3">
					<label for="dataOfPayment" class="w-100">
						<input
							type="text"
							value="<?php echo isset($patientList) ? $patientList['fecha_nacimiento'] == "0000-00-00" ? "" : $patientList['fecha_nacimiento'] : ""?>"
							name="dataOfPayment"
							id="dataOfPayment"
							placeholder="Fecha de pago"
							class="form-control"
							onfocus="(this.type='date')"
							onblur="(this.type='text')"
						/>
					</label>
				</div>
				<div class="mb-3">
					<label for="paymentRef" class="w-100">
						<input
							type="text"
							required="required"
							value="<?php echo isset($medicineList) ? $medicineList['nombre'] : ""?>"
							name="paymentRef"
							id="paymentRef"
							placeholder="Referencia de pago"
							class="form-control"
						/>
					</label>
				</div>
				<div class="mb-3">
					<label for="email" class="w-100">
						<input
							type="email"
							value="<?php echo isset($patientList) ? $patientList['correo'] : ""?>"
							name="email"
							id="email"
							placeholder="Correo electrónico"
							class="form-control"
						/>
					</label>
				</div>
        <div class="mb-3">
					<label for="shippingAddress" class="w-100">
						<input
							type="text"
							required="required"
							value="<?php echo isset($medicineList) ? $medicineList['nombre'] : ""?>"
							name="shippingAddress"
							id="shippingAddress"
							placeholder="Direccion de envio"
							class="form-control"
						/>
					</label>
				</div>
				<div class="mb-3">
					<label for="bill" class="w-100">
            <select name="bill" required="required" id="bill" class="form-select">
              <option value="">Factura</option>
              <option <?php echo isset($medicineList) ? $medicineList['tipo'] == "analgesico" ? "selected" : "" : ""?> value="analgesico">Aprobado</option>
              <option <?php echo isset($medicineList) ? $medicineList['tipo'] == "antigripal" ? "selected" : "" : ""?> value="antigripal">Rechazado</option>
            </select>
					</label>
				</div>
				<div class="mb-3 ">
					<label for="active" class="w-100 form-check-label">
						<input
							type="radio"
							value="activo"
							<?php echo isset($medicineList) ? $medicineList['estado'] == "activo" ? "checked" : "" : "checked"?>
							name="state"
							id="active"
							class="form-check-input"
						/>
						Activo
					</label>
					<label for="inactive" class="w-100 form-check-label">
						<input
							type="radio"
							value="inactivo"
							<?php echo isset($medicineList) ? $medicineList['estado'] == "inactivo" ? "checked" : "" : ""?>
							name="state"
							id="inactive"
							class="form-check-input"
						/>
						Inactivo
					</label>
				</div>
				<div class="mb-3">
					<input type="submit" value="Enviar" class="btn btn-success w-100"/>
				</div>
				<div>
					<input type="reset" value="Borrar" class="btn btn-secondary w-100"/>
				</div>
			</form>
		</div>
	</section>
</body>
</html>