<?php

include("conexion.php");
$con=conectar();

$idhabitacion=$_GET['id'];

$sql="DELETE FROM habitacion  WHERE Nombre='$idhabitacion'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: habitacion.php");
    }
?>
