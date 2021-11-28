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

$sql="INSERT INTO habitacion VALUES('$idhabitacion','$disponibilidad','$tipodehabitacion','$precio','$huespedesmax','$tipodeplan','$ganancias')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: habitacion.php");
    
}else {
}
?>