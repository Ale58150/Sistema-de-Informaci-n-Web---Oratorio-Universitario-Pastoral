<!DOCTYPE html>
<html lang="es">

<head>

    <title>Login de Acceso</title>
    <link rel="stylesheet" href="../Librerias//bootstrap.min.css">
    <link rel="stylesheet" href="../Librerias/bootstrap.bundle.min.js">
    <link rel="stylesheet" href="../css/LoginAcceso.css">
</head>

<body>
    <center>
        <br><br><br><br>
        <div class="contenedor-login col-md-4 border border-dark p-4 rounded">
            <form action="../Modelo/validarLogin.php" method="POST">
                <h2><img src="../imagenes/Logo_Pastoral.jpg" width="150"></h2>

                <div class="mb-3">
                    <input type="email" name="txtemail" class="form-control border border-dark" id="correo" size="50" placeholder="Correo electrónico">
                    <span class="form-control-feedback email-icon"></span>
                </div>

                <div class="mb-3">
                    <input type="password" name="txtpassword" class="form-control border border-dark" id="contraseña" size="50" placeholder="Password">
                    <span class="form-control-feedback pass-icon"></span>
                </div>
                
                <a href="#" data-toggle="modal" data-target="#olvidoContraseña">Olvidó su contraseña</a>

                <div class="modal fade" id="olvidoContraseña" tabindex="-1" role="dialog">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5>Restablecer contraseña</h5>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>
                            <div class="modal-body">
                                <input type="email" class="form-control" placeholder="Correo electrónico">
                                <button class="btn btn-primary">Enviar enlace</button>
                            </div>
                        </div>
                    </div>
                </div>
                <br><br>
                <button type="submit" class="btn btn-primary">Ingresar al sistema</button>
            </form>
        </div>
    </center>





</body>

</html>




</body>

</html>