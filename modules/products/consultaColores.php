<?php
  require_once "./colors/Colores.php";

  $colores = new Colores();
  $res = $colores->consultar();

  function obtenerColor($colorId, $colorIdForm){
    return $colorId == $colorIdForm ? "selected" : "";
  }

  function obtenerColores($colorIdForm = ""){
    while($color = mysqli_fetch_assoc($GLOBALS['res'])){
      $colorId = $color["idTipos"];
      $colorNombre = $color["descripcion"];
      $isSelected = obtenerColor($colorId, $colorIdForm);
      echo "<option value='$colorId' $isSelected>$colorNombre</option>";
    }
  }
?>