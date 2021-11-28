<?php 
    include("conexion.php");
    $con=conectar();

    $sql="SELECT *  FROM empleados";
    $query=mysqli_query($con,$sql);

    $row=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title> HOTEL MARIO. ALTA DE EMPLEADOS</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
            <div class="container mt-5">
                    <div class="row"> 
                        
                        <div class="col-md-3">
                            <h1>Alta de empleados, ingrese su información</h1>
                                <form action="insertar.php" method="POST">

                                    <input type="text" class="form-control mb-3" name="Nombre" placeholder="Nombre">
                                    <input type="text" class="form-control mb-3" name="Apellido" placeholder="Apellido">
                                    <input type="date" class="form-control mb-3" name="FecNac" placeholder="FecNac">
                                    <input type="number" class="form-control mb-3" name="sueldo" placeholder="sueldo">
                                    <input type="text" class="form-control mb-3" name="CURP" placeholder="CURP">
                                    <input type="text" class="form-control mb-3" name="Direccion" placeholder="Direccion">
                                    <input type="number" class="form-control mb-3" name="idempleado" placeholder="idempleado">
                                    <input type="submit" class="btn btn-primary">
                                </form>
                        </div>

                        <div class="col-md-8">
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>Nombres</th>
                                        <th>Apellidos</th>
                                        <th>FecNac</th>
                                        <th>Sueldo</th>
                                        <th>CURP</th>
                                        <th>Direccion</th>
                                        <th>idempleado</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['Nombre']?></th>
                                                <th><?php  echo $row['Apellido']?></th>
                                                <th><?php  echo $row['FecNac']?></th>
                                                <th><?php  echo $row['sueldo']?></th>    
                                                <th><?php  echo $row['CURP']?></th> 
                                                <th><?php  echo $row['Direccion']?></th>
                                                <th><?php  echo $row['idempleado']?></th> 
                                                <th><a href="actualizar.php?id=<?php echo $row['Nombre'] ?>" class="btn btn-info">Editar</a></th>
                                                <th><a href="delete.php?id=<?php echo $row['Nombre'] ?>" class="btn btn-danger">Eliminar</a></th>                                        
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