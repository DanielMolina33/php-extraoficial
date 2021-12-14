<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../../css/contentBackground.css" rel="stylesheet"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"/>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Formulario productos</title>
  </head>
  <body class="bg-secondary-custom">
    <section class="row h-100 w-100 d-flex flex-column align-items-center m-0 mt-5">
      <div class="col-12 col-lg-6 mb-4">
        <h3 class="display-4 text-center">Formulario factura</h3>
      </div>
      <div class="col-12 col-lg-6">
        <form
        action=""
        method="POST">
          <div class="mb-3">
            <label for="total" class="w-100">
            <input
              type="number"
              required="required"
              name="total"
              id="total"
              placeholder="Total a pagar"
              class="form-control"
            />
            </label>
          </div>
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
            <label for="product" class="w-100">
              <select name="product" required="required" id="product" class="form-select">
                <option value="">Producto</option>
              </select>
            </label>
          </div>
          <div class="mb-3">
            <label for="profile" class="w-100">
              <select name="profile" required="required" id="profile" class="form-select">
                <option value="">Perfiles</option>
              </select>
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
</html>