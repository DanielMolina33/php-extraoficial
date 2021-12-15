<?php
  require "../departments/Departamentos.php";

  $pte = new Departamentos();
  $resultado = $pte->consultar();
  
  while($datos = mysqli_fetch_assoc($resultado)){
    $departamentoId = $datos['idDepartamentos']; 
    $nombreDepartamento = $datos['nombre']; 

    echo "<option value='$departamentoId'>$nombreDepartamento</option>";
  }
?>