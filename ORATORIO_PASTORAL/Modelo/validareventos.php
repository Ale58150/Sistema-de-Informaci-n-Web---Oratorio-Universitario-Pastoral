<?php
include ("conexion.php");
$cod_evento=$_POST['txtcod_evento'];
$nombre_evento=$_POST['txtnombre_evento'];
$sql="INSERT INTO eventos(cod_evento,nombre_evento)
VALUES ('$cod_evento','$nombre_evento')";
if($conexion->query($sql)=== TRUE) {
    echo"<script>
    alert('Registro Exitoso');
    </script>";
}
else{
    echo"Error de conexion: ".$conexion->error;
}
?> 