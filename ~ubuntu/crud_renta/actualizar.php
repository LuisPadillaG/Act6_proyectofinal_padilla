<?php 
    include("conexion.php");
    $con=conectar();

$id=$_GET['id'];

$sql="SELECT * FROM renta WHERE Noches='$id'";
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
                    <form action="update.php" method="POST">
                    
                                <input type="hidden" name="Noches" value="<?php echo $row['Noches']  ?>">
                                
                                <input type="number" class="form-control mb-3" name="Noches" placeholder="Noches" value="<?php echo $row['Noches']  ?>">
                                <input type="number" class="form-control mb-3" name="idhabitacion" placeholder="idhabitacion" value="<?php echo $row['idhabitacion']  ?>">
                                <input type="text" class="form-control mb-3" name="metododepago" placeholder="metododepago" value="<?php echo $row['metododepago']  ?>">
                                <input type="number" class="form-control mb-3" name="idcliente" placeholder="idcliente" value="<?php echo $row['idcliente']  ?>">
                                <input type="text" class="form-control mb-3" name="tipodehabitacion" placeholder="tipodehabitacion" value="<?php echo $row['tipodehabitacion']  ?>">
                                <input type="number" class="form-control mb-3" name="idempleado" placeholder="idempleado" value="<?php echo $row['idempleado']  ?>">
                                <input type="number" class="form-control mb-3" name="idrenta" placeholder="idrenta" value="<?php echo $row['idrenta']  ?>">
                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                    
                </div>
    </body>
</html>