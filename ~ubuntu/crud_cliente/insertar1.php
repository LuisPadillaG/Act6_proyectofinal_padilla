<?php
include("conexion1.php");
$con=conectar();

$Nombre=$_POST['Nombre'];
$idcliente=$_POST['idcliente'];
$Apellido=$_POST['Apellido'];
$Tipodepiso=$_POST['Tipodepiso'];
$Direccion=$_POST['Direccion'];
$Correo=$_POST['Correo'];
$Telefono=$_POST['Telefono'];

$sql="INSERT INTO clientes VALUES('$Nombre','$idcliente','$Apellido','$Tipodepiso','$Direccion','$Correo','$Telefono')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: cliente.php");
    
}else {
}
?>