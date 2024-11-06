<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> ORATORIO UNIVERSITARIO PASTORAL</title>
    <link rel="stylesheet" href="../css/index.css">
    <link rel="stylesheet" href="../Librerias/bootstrap.min.css">
    <link rel="stylesheet" href="../Librerias/bootstrap.bundle.min.js">
    <link rel="stylesheet" href="../css/Slaider.css">
    <!---Incluimos la Biblioteca de Bootstrap-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <style>
        .bi {
            font-size: 24px;
            color: black;
            margin-left: 20px;
        }

        .bi-facebook {
            color: blue;
        }

        .bi-facebook:hover {
            color: black;
        }

        .bi-instagram {
            color: darkmagenta;
        }

        .bi-instagram:hover {
            color: black;
        }

        .bi-tiktok {
            color: black;
        }

        .bi-tiktok:hover {
            color: blanchedalmond;
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
                <img src="../imagenes/Logo_USB.jpeg" height="64" width="100%" alt="Imagen-USB"></label>
                </li>
                
                <li class="Item"><a href="#"><em>QUIÉNES SOMOS</em><span class="icono_abajo"></span></a>
                    <ul class="desple">
                        <li><a href="Identidad_Institucional.html">Identidad Institucional</a></li>
                        <li><a href="Autoridades.html">Autoridades</a></li>
                    </ul>
                </li>

                <li class="Item"><a href="#"><em>INFORMACIÓN ORATORIO</em></a>
                    <ul class="desple">
                        <li><a href="#">Académica</a></li>
                        <li><a href="#">Cultural</a></li>
                        <li><a href="#">Artística</a></li>
                        <li><a href="#">Litúrgica</a></li>
                        <li><a href="#">Social</a></li>
                    </ul>
                </li>



                <li class="Item"><a href="#"><em>SERVICIOS</em></a>
                    <ul class="desple">
                        <li><a href="#">Comvocatoria De Personal</a></li>

                    </ul>
                </li>

                <li class="Item"><a href="#"><em>CONTACTO</em></a>
                    <ul class="desple">
                        <li><a href="#">Medios De Contacto</a></li>
                        <li><a href="#">Google Maps</a></li>
                    </ul>
                </li>

                <li class="Item"><a href="LoginAcceso.php"><em>Iniciar Sesion</em></a></li>

            </ul>

        </nav>

    </header>

    <main>
        <section>
            <article>

                <head>
            </article>
            <link rel="stylesheet" href="../css/Slaider.css">
            </head>

            <body>
                <article>
                    <div class="slider">
                        <ul>
                            <li><img src="../imagenes/portada-1.jpeg" alt="imagen"></li>
                            <li><img src="../imagenes/portada-2.jpg" alt="imagen"></li>
                            <li><img src="../imagenes/portada-3.jpg" alt="imagen"></li>
                            <li><img src="../imagenes/portada-4.jpg" alt="imagen"></li>
                            <li><img src="../imagenes/portada-5.jpg" alt="imagen"></li>
                        </ul>
                    </div>
            </body>
            </article>
        </section>
    </main>

    <br><br><br>
    <!--Noticias del Oratorio-->
    <style>
        h1 {
            font-size: 24px;
            /* Tamaño de fuente */
            font-weight: bold;
            /* peso de fuente negrita*/
            color: #333;
            /* color */
            text-align: center;
            /* Alineación de texto centro*/
            margin-bottom: 20px;
            /* Margen inferior */
            text-transform: uppercase;
            /* tra */
            letter-spacing: 1px;
            word-spacing: 2px;
            font-family: Arial, sans-serif;
            text-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
            border-bottom: 1px solid #ccc;
            padding: 10px;
            background-color: #f9f9f9;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }


        .container {
            background-color: #f9f9f9;
            padding: 20px;
            border-radius: 55px;
            box-shadow: 0 0 5px rgba(0, 0, 1, 0.0);
        }

        .row {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .col {
            background-color: #fff;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 10px;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
            width: calc(33.33% - 20px);
            margin: 10px;
        }

        .col:first-child {
            background-color: #4CAF50;
            color: #fff;
            font-weight: bold;
        }

        .col:hover {
            transform: scale(1.1);
            transition: all 0.3s ease-in-out;
        }

        @media (max-width: 768px) {
            .col {
                width: 100%;
                margin-bottom: 20px;
            }
        }
    </style>

    <h1><b>Nuestras Noticias</b></h1>


    <div class="container text-center">
        <div class="p-3">
            <div class="row align-items-center justify-content-center">
                <div class=" container">
                    <img src="../imagenes/img-1.jpeg" width="280" height="180" class="mb-4">
                    <p><b>Todos Santos</p>
                    <p><em> EUCARISTÍA DE TODOS LOS SANTOS Y MEMORIA DE FIELES DIFUNTOS - 2024 </em></p>

                    El Vicerrectorado de Pastoral y Oratorio Universitario, INVITA a toda la Comunidad Universitaria a participar de la Eucaristía de Todos los Santos y Memoria de fieles difuntos, a realizarse el día jueves 31 de octubre del presente.
                    Lugar: Capilla "Cristo Resucitado"-USB / Hrs. 11:30
                    Los esperamos!
                </div>

                <div class="row align-items-center justify-content-center">
                    <div class="container">
                        <img src="../imagenes/img-2.jpg" width="280" height="180" class="mb-4">
                        <p><em>Actividades Deportivas</em></p>
                        <p>
                            Universidad Salesiana de Bolivia
                            Club Atlético Pastoral - Voley Damas
                            Campeonado USB 2-2024
                        </p>
                    </div>
                    <div class="row align-items-center justify-content-center">
                        <div class="container">
                            <img src="../imagenes/img-3.jpg" width="280" height="180" class="mb-4">
                            <p><b>RETIRO PARA UNIVERSITARIOS 2-2024 "HACIA UN PROYECTO DE VIDA"</b></p>

                            La Pastoral Universitaria invita a los jóvenes universitarios que se están preparándose a los Sacramentos al RETIRO SEMESTRAL "HACIA UN PROYECTO DE VIDA"
                            <p> <i>Fecha: Sabado 19 de octubre de 2024 De Hrs.10 a.m. a 17:00 p.m. </i></p>
                            Los voluntarios a participar podrán ayudar en equipo de apoyo, logística y alimentación.
                            También tendrán la oportunidad de Confesarse y participar de las actividades de reflexión y de trabajo.
                            El porte para el almuerzo es de 10 Bs.
                            Los esperamos!
                        </div>

                        <div class="row align-items-center justify-content-center">
                            <div class="container">
                                <img src="../imagenes/img-4.jpg" width="280" height="180" class="mb-4">
                                <p><em>FORMACIÓN SACRAMENTAL</em></p>
                                <p>Universidad Salesiana de Bolivia</p>
                                <b>BAUTIZO, PRIMERA COMUNIÓN Y CONFIRMACIÓN PARA UNIVERSITARIOS</b>
                                <p>¿Quieres completar tu formación sacramental? Inscríbete!</p>
                                <p>- Debes elegir solo un dia a la semana.</p>
                                <p>- Tiempo de duración: Agosto, septiembre, octubre y noviembre</p>
                                Si estas interesado/a llena el siguiente formulario y únete al grupo Wap de Formación Sacramental USB.
                                https://forms.office.com/r/6QNPDN8gY2

                            </div>
                        </div>
                    </div>
                </div>

                <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
                    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
                    crossorigin="anonymous"></script>
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
                    integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy"
                    crossorigin="anonymous"></script>
</body>
<hr><br><br>

<footer>
    <!--Iconos de Redes Sociales--->
    <h3> <b> Redes Sociales</b></h3>

    <div class="redes sociales d-flex justify-content-center mb-5">
        <a href="https://www.facebook.com/PastoralUSB" target="_blank"><i class="bi bi-facebook"></i></a>

        <a href="https://www.instagram.com/pastoraluniversitariausb?igsh=YzVlcW9uNDM3aHJm" target="_blank"><i class="bi bi-instagram"></i></a>

        <a href="https://www.tiktok.com/@pastoraluniversitariausb?_t=8r9SvpwVM4k&_r=1" target="_blank"><i class="bi bi-tiktok"></i></a>
    </div>

    <em> Mayor Información: Lic. Erik Mamani - 70639589 Responsable de Oratorio Universitario</em>

</footer>

</html>