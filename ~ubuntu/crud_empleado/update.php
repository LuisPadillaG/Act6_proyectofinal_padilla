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

$sql="UPDATE empleados SET  Nombre='$Nombre',Apellido='$Apellido',FecNac='$FecNac',sueldo='$sueldo',CURP='$CURP',Direccion='$Direccion',idempleado='$idempleado' WHERE Nombre='$Nombre'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: empleado.php");
    }
?>