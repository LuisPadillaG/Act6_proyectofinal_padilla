<?php

include("conexion.php");
$con=conectar();

$idhabitacion=$_POST['idhabitacion'];
$disponibilidad=$_POST['disponibilidad'];
$tipodehabitacion=$_POST['tipodehabitacion'];
$precio=$_POST['precio'];
$huespedesmax=$_POST['huespedesmax'];
$tipodeplan=$_POST['tipodeplan'];
$ganancias=$_POST['ganancias'];

$sql="UPDATE habitacion SET  idhabitacion='$idhabitacion',disponibilidad='$disponibilidad',tipodehabitacion='$tipodehabitacion',precio='$precio',huespedesmax='$huespedesmax',tipodeplan='$tipodeplan',ganancias='$ganancias' WHERE idhabitacion='$idhabitacion'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: habitacion.php");
    }
?>