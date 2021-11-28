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

$sql="UPDATE renta SET  Noches='$Noches',idhabitacion='$idhabitacion',metododepago='$metododepago',idcliente='$idcliente',tipodehabitacion='$tipodehabitacion',idempleado='$idempleado',idrenta='$idrenta' WHERE Noches='$Noches'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: renta.php");
    }
?>