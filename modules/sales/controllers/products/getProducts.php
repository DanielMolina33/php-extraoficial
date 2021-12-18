<?php
  include_once "../../models/items/Items.php";

  $items = new Items("productos");
  $productsList = $items->getProducts($condition);

  foreach($productsList as $products){
    $productId = $products['idProductos'];
    $productName = $products['nombre'] . " - " . $products['precio'];

    echo <<< html
      <option value="$productId">$productName</option>
    html;
  }
?>