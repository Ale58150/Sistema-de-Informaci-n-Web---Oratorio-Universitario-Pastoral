<?php
// Iniciar sesión para guardar los datos del usuario si el login es exitoso
session_start();
include("conexion.php");
// Obtener las variables del formulario Login
$email=$_POST['txtemail'];
$password=$_POST['txtpassword'];
// Consulta la base de datos
$sql="SELECT*FROM encargado WHERE correo='$email' AND password='$password'";
//Ejecutar consulta
$resultado=mysqli_query($conexion,$sql);
if($resultado=1){
    header("location:../Vista/menuPrincipal.php");
}
else{
    echo'error en la base de datos: '.mysqli_error($conexion);
}
?>