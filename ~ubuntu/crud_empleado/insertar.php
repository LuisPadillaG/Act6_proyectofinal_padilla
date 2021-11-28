<?php
include("conexion.php");
$con=conectar();

$Nombre=$_POST['Nombre'];
$Apellido=$_POST['Apellido'];
$FecNac=$_POST['FecNac'];
$sueldo=$_POST['sueldo'];
$CURP=$_POST['CURP'];
$Direccion=$_POST['Direccion'];
$idempleado=$_POST['idempleado'];

$sql="INSERT INTO empleados VALUES('$Nombre','$Apellido','$FecNac','$sueldo','$CURP','$Direccion','$idempleado')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: empleado.php");
    
}else {
}
?>