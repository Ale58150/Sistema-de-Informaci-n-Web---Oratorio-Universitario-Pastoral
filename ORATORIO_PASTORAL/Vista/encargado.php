<!DOCTYPE html>  
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORMULARIO ENCARGADO</title>
    <link rel="stylesheet" href="../css/estilosform.css">
    <link rel="stylesheet" href="../css/estilos.css">
    <script src="validar.js"></script>
</head>
<body>
    <h1>REGISTRAR ENCARGADO</h1>

    <form action="../Modelo/validarencargado.php"method="post"
    class="form-register"onsubmit="return validar();">

        <h2 class="form__titulo">Usuario</h2>
        <div class="Contenedor-inputs">

          <input type="text"id="nombre"name="txtci"
          placeholder="ci"class="input-48"required>

          <input type="text"id="apellido"name="txtnombres"
          placeholder="nombres"class="input-48"required >

          <input type="text"id="correo"name="txtapellidos"
          placeholder="Apellidos"class="input-100" required>

          <input type="text"id="usuario"name="txttelefono"
          placeholder="Telefono"class="input-48"required>

          <input type="text"id="clave"name="txtcorreo"
          placeholder="Correo"class="input-48"required>

          <input type="text"id="telefono"name="txtpassword"
          placeholder="password"class="input-100"required>

          <input type="combox"id="telefono"name="txtRol"
          placeholder="Rol"class="input-100"required>

          <center><input type="submit" value="registrar"class="btn-enviar"></center>
          <br>
         

        </div>
    </form>
</body>
</html>