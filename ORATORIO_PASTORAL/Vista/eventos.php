<!DOCTYPE html>  
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORMULARIO DE REGISTRO</title>
    <link rel="stylesheet" href="../css/estilosform.css">
    <link rel="stylesheet" href="../css/estilosform.css">
    <script src="validar.js"></script>
</head>
<body>
    <h1>REGISTRAR ACTIVIDADES</h1>

    <form action="./Modelo/validarEventos.php"method="post"
    class="form-register"onsubmit="return validar();">

        <h2 class="form__titulo">Actividades</h2>
        <div class="Contenedor-inputs">

          <input type="text"id="nombre"name="nombre"
          placeholder="cod_actividad"class="input-48"required>

          <input type="text"id="apellido"name="apellido"
          placeholder="nombre_actividad"class="input-48"required >

          <input type="text"id="correo"name="correo"
          placeholder="Hora"class="input-100" required>

          <input type="text"id="usuario"name="usuario"
          placeholder="Ubicaciion"class="input-48"required>

          <input type="text"id="clave"name="clave"
          placeholder="cod_evento"class="input-48"required>

          <input type="text"id="telefono"name="telefono"
          placeholder="ci_encargado"class="input-100"required>

          <center><input type="submit" value="registrar"class="btn-enviar"></center>
          <br>
         

        </div>
    </form>
</body>
</html>