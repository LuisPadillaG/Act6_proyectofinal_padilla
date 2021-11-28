<?php 
    include("conexion.php");
    $con=conectar();

    $sql="SELECT *  FROM renta";
    $query=mysqli_query($con,$sql);

    $row=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title> HOTEL MARIO. RENTAS</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
            <div class="container mt-5">
                    <div class="row"> 
                        
                        <div class="col-md-3">
                            <h1>Ingrese la info. de la renta</h1>
                                <form action="insertar.php" method="POST">

                                    <input type="number" class="form-control mb-3" name="Noches" placeholder="Noches">
                                    <input type="number" class="form-control mb-3" name="idhabitacion" placeholder="idhabitacion">
                                    <input type="text" class="form-control mb-3" name="metododepago" placeholder="metododepago">
                                    <input type="number" class="form-control mb-3" name="idcliente" placeholder="idcliente">
                                    <input type="text" class="form-control mb-3" name="tipodehabitacion" placeholder="tipodehabitacion">
                                    <input type="number" class="form-control mb-3" name="idempleado" placeholder="idempleado">
                                    <input type="number" class="form-control mb-3" name="idrenta" placeholder="idrenta">
                                    <input type="submit" class="btn btn-primary">
                                </form>
                        </div>

                        <div class="col-md-8">
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>Noches</th>
                                        <th>idhabitacion</th>
                                        <th>metododepago</th>
                                        <th>idcliente</th>
                                        <th>tipodehabitacion</th>
                                        <th>idempleado</th>
                                        <th>idrenta</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['Noches']?></th>
                                                <th><?php  echo $row['idhabitacion']?></th>
                                                <th><?php  echo $row['metododepago']?></th>
                                                <th><?php  echo $row['idcliente']?></th>    
                                                <th><?php  echo $row['tipodehabitacion']?></th> 
                                                <th><?php  echo $row['idempleado']?></th>
                                                <th><?php  echo $row['idrenta']?></th> 
                                                <th><a href="actualizar.php?id=<?php echo $row['Noches'] ?>" class="btn btn-info">Editar</a></th>
                                                <th><a href="delete.php?id=<?php echo $row['Noches'] ?>" class="btn btn-danger">Eliminar</a></th>                                        
                                            </tr>
                                        <?php 
                                            }
                                        ?>
                                </tbody>
                            </table>
                        </div>
                        <a href="/~ubuntu/index.php">Inicio</a></li>
                    </div>  
            </div>
    </body>
</html>