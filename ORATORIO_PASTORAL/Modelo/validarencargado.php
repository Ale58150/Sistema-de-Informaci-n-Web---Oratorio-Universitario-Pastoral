<?php
include ("conexion.php");
$ci=$_POST['txtci'];
$nombres=$_POST['txtnombres'];
$apellidos=$_POST['txtapellidos'];
$telefono=$_POST['txttelefono'];
$correo=$_POST['txtcorreo'];
$password=$_POST['txtpassword'];
$Rol=$_POST['txtRol'];
$sql="INSERT INTO encargado(ci,nombres,apellidos,telefono,correo,password,Rol) 
VALUES ('$ci','$nombres','$apellidos','$telefono','$correo','$password','$Rol')";
if($conexion->query($sql)=== TRUE) {
    echo"<script>
    alert('Registro Exitoso');
    </script>";
}
else{
    echo"Error de conexion: ".$conexion->error;
}
?> 