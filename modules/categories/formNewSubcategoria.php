<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Nueva categoria</title>
	<link rel="stylesheet" href="../../css/contentBackground.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"/>
	<script type="text/javascript">
		function volver() {
			window.history.back();
		}
	</script>
</head>
<body class="bg-secondary-custom">             
	


			<!--formulario bueno-->

            
			<section class="row h-100 w-100 d-flex flex-column align-items-center m-0 mt-5">
      <div class="col-12 col-lg-6 mb-4">
        <h3 class="display-4 text-center">Formulario subcategoría</h3>
      </div>
      <div class="col-12 col-lg-6">
        <form
        action="cod/newsubcategorias.php"
        method="POST">

          <div class="mb-3">
            <label for="total" class="w-100">
            <input
              type="text"
              required="required"
              name="nombre"
              id="nombre"
              placeholder="Nombre subcategoria"
              class="form-control"
            />
            </label>
          </div>
		  
          <div class="mb-3">
            <label for="categoria" class="w-100">
				<?php
					require'cod/categoria_sub.php';
					$cat = new Categorias();
					$result = $cat->consulta();
					$result = $cat->consultacategorias();
					echo"<select class='form-select' name='categoria'>";
					echo"<option selected value='0'> Elige una categoria</option>";
					while ($datos = mysqli_fetch_assoc($result)){
							echo "<option value=".$datos['idTipos'].">".$datos['descripcion']."</option>" ;
						
					}
					echo"</select>";      
				?>
			</label>
          </div>

          <div class="mb-3">
            <label for="product" class="w-100">
			  <select  required="required" id="estado" class="form-select" name="estado">
				<option selected value="0"> Elige un estado </option>
				<option value="8">Activo</option> 
				<option value="9">Inactivo</option>
				</select>
            </label>
          </div>

		  <div class="mb-3">
            <label for="amount" class="w-100">
            <input
              type="text"
              required="required"
              name="fechaCreacion"
			  placeholder="Fecha creación"
              id="fechaCreacion"
              class="form-control"
			  onfocus="this.type='date'"
			  onblur="this.type='text'"
            />
            </label>
          </div>

          <div class="mb-3">
            <input type="submit" value="Enviar" class="btn bg-dark text-white w-100"/>
          </div>
          <div>
            <input type="reset" value="Borrar" class="btn bg-dark text-white w-100"/>
          </div>
        </form>
      </div>  
    </section>
	
</body>
</html