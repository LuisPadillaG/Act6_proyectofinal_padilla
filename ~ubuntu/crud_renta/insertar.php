<?php
include("conexion.php");
$con=conectar();

$Noches=$_POST['Noches'];
$idhabitacion=$_POST['idhabitacion'];
$metododepago=$_POST['metododepago'];
$idcliente=$_POST['idcliente'];
$tipodehabitacion=$_POST['tipodehabitacion'];
$idempleado=$_POST['idempleado'];
$idrenta=$_POST['idrenta'];

$sql="INSERT INTO renta VALUES('$Noches','$idhabitacion','$metododepago','$idcliente','$tipodehabitacion','$idempleado','$idrenta')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: renta.php");
    
}else {
}
?>