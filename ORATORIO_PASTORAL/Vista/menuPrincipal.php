<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> ORATORIO UNIVERSITARIO PASTORAL</title>
    <link rel="stylesheet" href="../css/index.css">
    <link rel="stylesheet" href="../css/estilosform.css">
    <link rel="stylesheet" href="../Librerias/bootstrap.min.css">
    <link rel="stylesheet" href="../Librerias/bootstrap.bundle.min.js">
    <!---Incluimos la Biblioteca de Bootstrap-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <style>

        body{
            background-color:darkcyan;
        }
        .bi {
            font-size: 24px;
            color: black;
            margin-left: 20px;
        }

        .bi-facebook {
            color: beige;
        }

        .bi-facebook:hover {
            color: black;
        }

        .bi-instagram {
            color: beige;
        }

        .bi-instagram:hover {
            color: deeppink;
        }

        .bi-tiktok {
            color: beige;
        }

        .bi-tiktok:hover {
            color: darkorange;
        }

        h3 {
            font-size: 24px;
            font-weight: bold;
            color: #333;
            text-align: center;
            margin-bottom: 20px;
            text-transform: uppercase;
            letter-spacing: 1px;
            word-spacing: 2px;
            font-family: Arial, sans-serif;
            text-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
            border-bottom: 1px solid #ccc;
            padding: 10px;
            background-color: #f9f9f9;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>

<body>
    <header>
        <input type="checkbox" id="btn-menu">
        <label for="btn-menu"><img src="../imagenes/imagen_menu.png" alt=""></label>

        <nav class="menu">
            <ul>
                <li>
                    <img src="../imagenes/Logo_USB.jpeg" height="64" width="100%" alt="Imagen Oratorio">
                </li>

                <li class="Item"><a href="#"> Encargado <span class="icono_abajo"></span></a>
                    <ul class="desple">
                        <li><a href="encargado.php">Formulario de encargado</a></li>
                        <li><a href="eventos.php">Formulario de eventos</a></li>
                    </ul>
                </li>

                <li class="Item"><a href="#">Inscripción Sacramental</a>
                    <ul class="desple">
                        <li><a href="inscripcion_sacramental.php">Formulario de Inscripción Sacramental</a></li>
                        <li><a href="#">Bautizo</a></li>
                        <li><a href="#">Primera Comunión</a></li>
                        <li><a href="#">Confirmación</a></li>

                    </ul>
                </li>

                <li class="Item"><a href="#">Calendario</a>
                    <ul class="desple">
                        <li><a href="#">Eventos</a>
                            <ul class="desple">
                                <li><a href="#">Académica</a></li>
                                <li><a href="#">Cultural</a></li>
                                <li><a href="#">Artística</a></li>
                                <li><a href="#">Litúrgica</a></li>
                                <li><a href="#">Social</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Actividades</a></li>

                    </ul>
                </li>

        </nav>

    </header>
    <main>
        <section>

        </section>
        <aside>

        </aside>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy"
        crossorigin="anonymous"></script>
</body>
<br><br><br><br><br><br><br><br>
<footer>
    <!--Iconos de Redes Sociales--->
    <h3> <b> Redes Sociales</b></h3>
    <div class="redes sociales d-flex justify-content-left mb-5">
        <a href="https://www.facebook.com/PastoralUSB" target="_blank"><i class="bi bi-facebook"></i></a>

        <a href="https://www.instagram.com/pastoraluniversitariausb?igsh=YzVlcW9uNDM3aHJm" target="_blank"><i class="bi bi-instagram"></i></a>

        <a href="https://www.tiktok.com/@pastoraluniversitariausb?_t=8r9SvpwVM4k&_r=1" target="_blank"><i class="bi bi-tiktok"></i></a>
    </div>
</footer>

</html>