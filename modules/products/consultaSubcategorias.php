<?php
  require_once "./subcategories/Subcategorias.php";

  $subcategorias = new Subcategorias();
  $res = $subcategorias->consultar();

  function obtenerSubcategoria($subcategoriaId, $subcategoriaIdForm){
    return $subcategoriaId == $subcategoriaIdForm ? "selected" : "";
  }

  function obtenerSubcategorias($subcategoriaIdForm = ""){
    while($subcategoria = mysqli_fetch_assoc($GLOBALS['res'])){
      $subcategoriaId = $subcategoria["idSubcategorias"];
      $subcategoriaNombre = $subcategoria["nombre"];
      $isSelected = obtenerSubcategoria($subcategoriaId, $subcategoriaIdForm);
      echo "<option value='$subcategoriaId' $isSelected>$subcategoriaNombre</option>";
    }
  }
?>