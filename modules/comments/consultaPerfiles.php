<?php
  require_once "./profiles/Perfiles.php";

  $perfiles = new Perfiles();
  $res = $perfiles->consultar();

  while($perfil = mysqli_fetch_assoc($res)){
    $perfilId = $perfil["idPerfiles"];
    $perfilNombres = $perfil["nombres"] . " " . $perfil['apellidos'];
    echo "<option value='$perfilId'>$perfilNombres</option>";
  }
?>