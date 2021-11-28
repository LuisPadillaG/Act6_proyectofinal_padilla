<?php 
    include("conexion1.php");
    $con=conectar();

    $sql="SELECT *  FROM clientes";
    $query=mysqli_query($con,$sql);

    $row=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title> Registro de Clientes HOTEL MARIO</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
            <div class="container mt-5">
                    <div class="row"> 
                        
                        <div class="col-md-3">
                            <h1>ingrese su información querido cliente</h1>
                                <form action="insertar1.php" method="POST">

                                    <input type="text" class="form-control mb-3" name="Nombre" placeholder="Nombre">
                                    <input type="number" class="form-control mb-3" name="idcliente" placeholder="idcliente">
                                    <input type="text" class="form-control mb-3" name="Apellido" placeholder="Apellido">
                                    <input type="text" class="form-control mb-3" name="Tipodepiso" placeholder="Tipodepiso">
                                    <input type="text" class="form-control mb-3" name="Direccion" placeholder="Direccion">
                                    <input type="text" class="form-control mb-3" name="Correo" placeholder="Correo">
                                    <input type="number" class="form-control mb-3" name="Telefono" placeholder="Telefono">
                                    <input type="submit" class="btn btn-primary">
                                </form>
                        </div>

                        <div class="col-md-8">
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>Nombre</th>
                                        <th>idcliente</th>
                                        <th>Apellido</th>
                                        <th>Tipodepiso</th>
                                        <th>Direccion</th>
                                        <th>Correo</th>
                                        <th>Telefono</th>
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
                                                <th><?php  echo $row['idcliente']?></th>
                                                <th><?php  echo $row['Apellido']?></th>
                                                <th><?php  echo $row['Tipodepiso']?></th>    
                                                <th><?php  echo $row['Direccion']?></th> 
                                                <th><?php  echo $row['Correo']?></th>
                                                <th><?php  echo $row['Telefono']?></th>
                                                <th><a href="actualizar1.php?id=<?php echo $row['Nombre'] ?>" class="btn btn-info">Editar</a></th>
                                                <th><a href="delete1.php?id=<?php echo $row['Nombre'] ?>" class="btn btn-danger">Eliminar</a></th>                                        
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