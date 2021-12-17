<?php

include("conexion.php");
$con=conectar();

$comeid=$_GET['id'];

$sql="DELETE FROM comentarios WHERE comeid='$comeid'";
$query=mysqli_query($con<$sql);

    if($query){
        haeader("Location: index.php");
    }
?>