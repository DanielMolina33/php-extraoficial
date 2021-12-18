<?php
  function dbConnect(){
    $server = "localhost";
    $user = "root";
    $password = "";
    $db = "ecommerce";

    $db = mysqli_connect($server, $user, $password, $db);

    if(!$db){
      echo "Hubo un error al conectar a la base de datos";
      exit;
    }

    return $db;
  }
?>