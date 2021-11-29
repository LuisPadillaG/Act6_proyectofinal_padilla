<?php 
    include("conexion.php");
    $con=conectar();

$id=$_GET['id'];

$sql="SELECT * FROM habitacion WHERE idhabitacion='$id'";
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
                    
                                <input type="hidden" name="idhabitacion" value="<?php echo $row['idhabitacion']  ?>">
                                
                                <input type="text" class="form-control mb-3" name="disponibilidad" placeholder="disponibilidad" value="<?php echo $row['disponibilidad']  ?>">
                                <input type="text" class="form-control mb-3" name="tipodehabitacion" placeholder="tipodehabitacion" value="<?php echo $row['tipodehabitacion']  ?>">
                                <input type="number" class="form-control mb-3" name="precio" placeholder="precio" value="<?php echo $row['precio']  ?>">
                                <input type="number" class="form-control mb-3" name="huespedesmax" placeholder="huespedesmax" value="<?php echo $row['huespedesmax']  ?>">
                                <input type="text" class="form-control mb-3" name="tipodeplan" placeholder="tipodeplan" value="<?php echo $row['tipodeplan']  ?>">
                                <input type="number" class="form-control mb-3" name="ganancias" placeholder="ganancias" value="<?php echo $row['ganancias']  ?>">
                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                    
                </div>
    </body>
</html>