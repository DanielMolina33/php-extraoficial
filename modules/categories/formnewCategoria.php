<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Nueva categoria</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"/>
	<link rel="stylesheet" href="../../css/contentBackground.css">
	<script type="text/javascript">
		function volver() {
			window.history.back();
		}
	</script>
</head>
<body class="bg-secondary-custom">             
	<section class="row h-100 w-100 d-flex flex-column align-items-center m-0 mt-5">
      <div class="col-12 col-lg-6 mb-4">
        <h3 class="display-4 text-center">Formulario categoria</h3>
      </div>
      <div class="col-12 col-lg-6">
        <form
        action="cod/newcategoria.php"
        method="POST">
          <div class="mb-3">
            <label for="total" class="w-100">
            <input
              type="text"
              required="required"
              name="descripcion"
              id="descripcion"
              placeholder="Descripcion Categoria"
              class="form-control"
            />
            </label>
          </div>
          
          <div class="mb-3">
            <label for="product" class="w-100">
			  <select  required="required" id="estado" class="form-select" name="estado">
				<option selected value="0"> Elige una opción </option>
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