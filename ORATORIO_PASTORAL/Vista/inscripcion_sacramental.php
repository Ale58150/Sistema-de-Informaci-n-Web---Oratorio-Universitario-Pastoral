
<!DOCTYPE html>  
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>InscripcionSacramental</title>
    <link rel="stylesheet" href="../css/estilosform.css">
    <link rel="stylesheet" href="../css/estilosform.css">
    <script src="validar.js"></script>
</head>
<body>
    <h1>INSCRIPCION SACRAMENTAL</h1>

    <form action="./Modelo/validarEventos.php"method="post"
    class="form-register"onsubmit="return validar();">

        <h2 class="form__titulo">Registrate</h2>
        <div class="Contenedor-inputs">

          <input type="text"id="nombre"name="nombre"
          placeholder="cod_incripcion"class="input-48"required>

          <input type="text"id="apellido"name="apellido"
          placeholder="ci_interesado"class="input-48"required >

          <input type="text"id="apellido"name="apellido"
          placeholder="nombres_interesado"class="input-48"required >

          <input type="text"id="apellido"name="apellido"
          placeholder="apellidos_interesado"class="input-48"required >

          <input type="text"id="apellido"name="apellido"
          placeholder="celular_interesado"class="input-48"required >

          <input type="email"id="correo"name="correo"
          placeholder="correo_intereado"class="input-100" required>

          <input type="text"id="usuario"name="usuario"
          placeholder="Dias"class="input-48"required>

          <input type="text"id="clave"name="clave"
          placeholder="Horario"class="input-48"required>

          <input type="text"id="telefono"name="telefono"
          placeholder="Costo"class="input-100"required>

          <input type="text"id="telefono"name="telefono"
          placeholder="Requisitos"class="input-100"required>

          <center><input type="submit" value="registrarse"class="btn-enviar"></center>
          <br>
         

        </div>
    </form>
</body>
</html>