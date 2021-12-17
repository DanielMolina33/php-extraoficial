<?php 
    include("conexion.php");
    $con=conectar();

$id=$_GET['comeid'];

$sql="SELECT * FROM comentarios WHERE comeid='$id'";
$query=mysqli_query($con,$sql);

$row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <title>Actualizar</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
                <div class="container mt-5">
                    <form action="actualizar.php" method="POST">
                    
                                <input type="hidden" name="comeid" value="<?php echo $row['comeid']  ?>">
                                
                                <input type="text" class="form-control mb-3" name="comenomb" placeholder="comenomb" value="<?php echo $row['comenomb']  ?>">
                                <input type="text" class="form-control mb-3" name="comedesc" placeholder="comedesc" value="<?php echo $row['comedesc']  ?>">
                                <input type="text" class="form-control mb-3" name="comefech" placeholder="comefech" value="<?php echo $row['comefech']  ?>">
                                
                            <input type="submit" class="btn btn-primary btn-block" value="actualizar">
                    </form>
                    
                </div>
    </body>
</html>