<?php
  require "../countries/Paises.php";

  $pte = new Paises();
  $resultado = $pte->consultar();
  
  while($datos = mysqli_fetch_assoc($resultado)){
    $paisId = $datos['idPaises']; 
    $nombrePais = $datos['nombre']; 

    echo "<option value='$paisId'>$nombrePais</option>";
  }
?>