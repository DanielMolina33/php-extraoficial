<?php
  include "../../models/bills/Bill.php";

  $bill = new Bill();
  $data = $_REQUEST;

  $msg = $bill->create($data);

  header("Location: ../../../products/consultaProductos.php?msn=$msg&esFactura=1");
?>