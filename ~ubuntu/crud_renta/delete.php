<?php

include("conexion.php");
$con=conectar();

$Noches=$_GET['id'];

$sql="DELETE FROM renta  WHERE Noches='$Noches'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: renta.php");
    }
?>
