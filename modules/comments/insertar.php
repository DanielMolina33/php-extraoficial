<?php
include("conexion.php");
$con=conectar();


$comenomb=$_POST['comenomb'];
$comedesc=$_POST['comedesc'];
$comefech=$_POST['comefech'];

$sql="INSERT INTO comentarios VALUES ('$comenomb','$comedesc','$comefech')";
$query= mysqli_query($con,$sql);

if($query){
    header("Location: index.php");
}else{
    
}

?>