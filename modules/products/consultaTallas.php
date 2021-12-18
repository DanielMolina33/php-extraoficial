<?php
  require_once "./sizes/Tallas.php";

  $tallas = new Tallas();
  $res = $tallas->consultar();

  function obtenertalla($talla, $tallaIdForm){
    return $talla == $tallaIdForm ? "selected" : "";
  }

  function obtenerTallas($tallaIdForm = ""){
    while($talla = mysqli_fetch_assoc($GLOBALS['res'])){
      $tallaId = $talla["idTipos"];
      $tallaNombre = $talla["descripcion"];
      $isSelected = obtenerTalla($tallaId, $tallaIdForm);
      echo "<option value='$tallaId' $isSelected>$tallaNombre</option>";
    }
  }
?>