<?php 
    include("conexion.php");
    $con=conectar();

    $sql="SELECT *  FROM comentarios";
    $query=mysqli_query($con,$sql);

    $row=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title> COMENTARIOS</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
            <div class="container mt-5">
                    <div class="row"> 
                        
                        <!-- <div class="col-md-3">
                            <h1>Ingrese comentarios</h1>
                                <form action="insertar.php" method="POST">

                                    <input type="text" class="form-control mb-3" name="comenomb" placeholder="comenomb">
                                    <input type="text" class="form-control mb-3" name="comedesc" placeholder="comedesc">
                                    <input type="text" class="form-control mb-3" name="comefech" placeholder="comefech">

                                    <input type="submit" class="btn btn-primary">
                                </form>
                        </div> -->

                        <a href="formComments.php">Crear comentario aquí</a>

                        <div class="col-md-8">
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>comeid</th>
                                        <th>comemid</th>
                                        <th>comenomb</th>
                                        <th>comedesc</th>
                                        <th>comefech</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['comeid']?></th>
                                                <th><?php  echo $row['comenid']?></th>
                                                <th><?php  echo $row['comenomb']?></th>
                                                <th><?php  echo $row['comedesc']?></th> 
                                                <th><?php  echo $row['comefech']?></th>  
                                                <th><a href="actualizar.php?id=<?php echo $row['comeid'] ?>" class="btn btn-info">Editar</a></th>
                                                <th><a href="delete.php?id=<?php echo $row['comeid'] ?>" class="btn btn-danger">Eliminar</a></th>                                        
                                            </tr>
                                        <?php 
                                            }
                                        ?>
                                </tbody>
                            </table>
                        </div>
                    </div>  
            </div>
    </body>
</html>