<?php

include("conexion1.php");
$con=conectar();

$Nombre=$_GET['id'];

$sql="DELETE FROM clientes  WHERE Nombre='$Nombre'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: cliente.php");
    }
?>
