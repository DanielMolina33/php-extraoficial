<?php
  include_once "../../models/bills/Bill.php";
  include_once "../../models/billsDetails/BillDetails.php";
  include "../../models/items/Items.php";

  $billDetail = new BillsDetails();
  $bills = new Bill();
  $billsList = $bills->getBills();

  if($billsList){
    echo "<div class='accordion' id='billsAccordion'>";

    foreach($GLOBALS['billsList'] as $bill){
      $profileId = $bill['perfil'];
      $items = new Items("perfiles");
      $profile = $items->getProfiles("idPerfiles=$profileId")[0];
      unset($items);
      $entityId = $bill['entidad'];
      $items = new Items("entidades");
      $entity = $items->getProfiles("idEntidad=$entityId")[0];
      unset($items);
      $billData = "";
      $billId = $bill['idFacturas'];
      $billsDetailData = $billDetail->getBillsDetails("idFactura=$billId")[0];
      $amount = $billsDetailData['cantidad'];
      $productId = $billsDetailData['producto'];
      $items = new Items("productos");
      $product = $items->getProducts("idProductos=$productId")[0];
      $productName = $product['nombre'];
      unset($items);

      foreach($bill as $key => $data){
        if($data){
          $key = str_replace("idFacturas", "Id de factura", $key);
          $key = ucfirst(str_replace("fechaCreacion", "Fecha de creacion", $key));

          if(strtolower($key) == "perfil"){
            $data = $profile["nombres"] . " " . $profile["apellidos"];
          }

          if(strtolower($key) == "entidad"){
            $data = $entity['nombre'];
          }

          $billData .= "
            <li class='list-group-item d-flex justify-content-between'>
              <span class='text-secondary'>$key:</span>
              $data
            </li>
          ";
        }
      }

      $billData .= "
        <li class='list-group-item d-flex justify-content-between'>
          <span class='text-secondary'>Cantidad:</span>
          $amount
        </li>
      ";

      $billData .= "
        <li class='list-group-item d-flex justify-content-between'>
          <span class='text-secondary'>Producto:</span>
          $productName
        </li>
      ";

      echo <<< html
        <div class="accordion-item">
          <h2 class="accordion-header" id="bill-$billId">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-$billId" aria-expanded="false" aria-controls="collapse-$billId">
              Factura #$billId
            </button>
          </h2>
          <div id="collapse-$billId" class="accordion-collapse collapse" aria-labelledby="bill-$billId" data-bs-parent="#billsAccordion">
            <div class="accordion-body">
              <ul class="list-group">
                $billData
              </ul>
              <div class="d-flex justify-content-end mt-3">
                
              </div>
            </div>
          </div>
        </div>
      html;
    }

    echo "</div>";

  } else {
    echo "<h1 class='fs-4 fw-light'>No se encontraron facturas</h1>";
  }
?>