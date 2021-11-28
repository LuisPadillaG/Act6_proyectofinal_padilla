<?php 
    include("conexion.php");
    $con=conectar();

    $sql="SELECT *  FROM habitacion";
    $query=mysqli_query($con,$sql);

    $row=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title> HOTEL MARIO. HABITACIONES</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
            <div class="container mt-5">
                    <div class="row"> 
                        
                        <div class="col-md-3">
                            <h1>Ingrese la info. de su habitación</h1>
                                <form action="insertar.php" method="POST">

                                    <input type="number" class="form-control mb-3" name="idhabitacion" placeholder="idhabitacion">
                                    <input type="text" class="form-control mb-3" name="disponibilidad" placeholder="disponibilidad">
                                    <input type="text" class="form-control mb-3" name="tipodehabitacion" placeholder="tipodehabitacion">
                                    <input type="number" class="form-control mb-3" name="precio" placeholder="precio">
                                    <input type="" class="form-control mb-3" name="huespedesmax" placeholder="huespedesmax">
                                    <input type="text" class="form-control mb-3" name="tipodeplan" placeholder="tipodeplan">
                                    <input type="number" class="form-control mb-3" name="ganancias" placeholder="ganancias">
                                    <input type="submit" class="btn btn-primary">
                                </form>
                        </div>

                        <div class="col-md-8">
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>idhabitacion</th>
                                        <th>disponibilidad</th>
                                        <th>tipodehabitacion</th>
                                        <th>precio</th>
                                        <th>huespedesmax</th>
                                        <th>tipodeplan</th>
                                        <th>ganancias</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['idhabitacion']?></th>
                                                <th><?php  echo $row['disponibilidad']?></th>
                                                <th><?php  echo $row['tipodehabitacion']?></th>
                                                <th><?php  echo $row['precio']?></th>    
                                                <th><?php  echo $row['huespedesmax']?></th> 
                                                <th><?php  echo $row['tipodeplan']?></th>
                                                <th><?php  echo $row['ganancias']?></th> 
                                                <th><a href="actualizar.php?id=<?php echo $row['idhabitacion'] ?>" class="btn btn-info">Editar</a></th>
                                                <th><a href="delete.php?id=<?php echo $row['idhabitacion'] ?>" class="btn btn-danger">Eliminar</a></th>                                        
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