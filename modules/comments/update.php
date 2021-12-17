<?php

include("conexion.php");
$con=conectar();

$comeid=$_POST['comeid'];
$comemid=$_POST['comemid'];
$comenomb=$_POST['comenomb'];
$comedesc=$_POST['comedesc'];
$comefech=$_POST['comefech']

$sql="UPDATE comentarioos SET  comenomb='$comenomb',comedesc='$comedesc',comefech='$comefech' WHERE comeid='$comeid'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: index.php");
    }
?>