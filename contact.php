<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>IRSOH - Contacto</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Free Website Template" name="keywords">
        <meta content="Free Website Template" name="description">

        <!-- Favicon -->
        <link href="img/favicon.ico" rel="icon">

        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400|Nunito:600,700" rel="stylesheet"> 
        
        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="lib/animate/animate.min.css" rel="stylesheet">
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
        <link href="lib/flaticon/font/flaticon.css" rel="stylesheet">
        <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">



        <style>
            @keyframes heartbeat {
                0% {
                    transform: scale(1);
                }
                50% {
                    transform: scale(1.1);
                }
                100% {
                    transform: scale(1);
                }
            }
        
            .highlighted-link {
                font-size: 60px; /* Tamaño de la letra */
                text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3); /* Sombra */
                animation: heartbeat 1.2s infinite; /* Animación */
                display: inline-block; /* Asegura que ocupe solo el espacio necesario */
            }

            @keyframes pulse {
        0% {
            transform: scale(1);
            box-shadow: 0 0 0 0 rgba(0, 123, 255, 0.7);
        }
        70% {
            transform: scale(1.1);
            box-shadow: 0 0 0 10px rgba(0, 123, 255, 0);
        }
        100% {
            transform: scale(1);
            box-shadow: 0 0 0 0 rgba(0, 123, 255, 0);
        }
    }

    .btn-contratanos {
        padding: 10px 20px;
        background-color: #007bff; /* Color azul */
        color: white;
        text-decoration: none;
        font-weight: bold;
        border-radius: 25px;
        animation: pulse 1.5s infinite;
        transition: transform 0.2s, box-shadow 0.2s;
        text-align: center; /* Centrar el texto dentro del botón */
        display: inline-block;
        cursor: pointer;
        border: none;
        outline: none;
    }

    .btn-contratanos:hover {
        transform: scale(1.05);
        box-shadow: 0 0 0 10px rgba(0, 123, 255, 0.2);
    }
  /* Añade esto a tu archivo CSS */
  @keyframes slide-up {
            from {
                transform: translateY(100%);
                opacity: 0;
            }
            to {
                transform: translateY(0);
                opacity: 1;
            }
        }

        .about-content.scrolled-up {
            animation: slide-up 1s forwards;
        }

        </style>




    </head>

    <body>
        <!-- Nav Bar Start -->
        <div class="navbar navbar-expand-lg bg-light navbar-light">
            <div class="container-fluid">
                <a href="#" class="navbar-brand">IR<span>SOH</span></a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
        
                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                    <div class="navbar-nav ml-auto">
                    <a href="index.php" class="nav-item nav-link">Inicio</a>
                        <a href="about.php" class="nav-item nav-link">Nosotros</a>
                        <a href="contact.php" class="nav-item nav-link">Contacto</a>
                        <a href="contratanos.php" class="nav-item nav-link highlighted-link">
                            Quiero el servicio
                        </a>
                        
                                        <a href="/irsoh/menus/index.php" class="nav-item nav-link">Iniciar sesión</a>
                                    </div>
                                </div>
                            </div>
                        </div>


        <!-- Nav Bar End -->



  <!-- Page Header Start -->
  <div class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>Contáctanos</h2>
            </div>
        </div>
    </div>
</div>
<!-- Page Header End -->


<!-- Contact Start -->
<div class="contact">
    <div class="container">
        <div class="section-header text-center">
        
            <h2>Contáctanos para cualquier consulta</h2>
        </div>
        <div class="row align-items-center contact-information">
            <div class="col-md-6 col-lg-3">
                <div class="contact-info">
                    <div class="contact-icon">
                        <i class="fa fa-map-marker-alt"></i>
                    </div>
                    <div class="contact-text">
                        <h3>Dirección</h3>
                        <p>Av. Insurgentes 2046, CDMX</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="contact-info">
                    <div class="contact-icon">
                        <i class="fa fa-phone-alt"></i>
                    </div>
                    <div class="contact-text">
                        <h3>Llámanos</h3>
                        <p>55 786 7093</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="contact-info">
                    <div class="contact-icon">
                        <i class="fa fa-envelope"></i>
                    </div>
                    <div class="contact-text">
                        <h3>Email</h3>
                        <p>workbots9@gmail.com</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="contact-info">
                    <div class="contact-icon">
                        <i class="fa fa-share"></i>
                    </div>
                    <div class="contact-text">
                        <h3>Síguenos</h3>
                        <div class="contact-social">
                            <a href=""><i class="fab fa-twitter"></i></a>
                            <a href=""><i class="fab fa-facebook-f"></i></a>
                            <a href=""><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
 

 
<?php
// Verificar si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Variables de conexión a la base de datos
    $servername = "localhost";
    $username = "root"; // Reemplaza con tu usuario de MySQL
    $password = ""; // Reemplaza con tu contraseña de MySQL
    $database = "oswa_inv"; // Reemplaza con el nombre de tu base de datos

    // Recoge los datos del formulario
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $asunto = $_POST['asunto'];
    $mensaje = $_POST['mensaje'];

    // Conexión a la base de datos
    $conn = new mysqli($servername, $username, $password, $database);

    // Verifica la conexión
    if ($conn->connect_error) {
        die("Conexión fallida: " . $conn->connect_error);
    }

    // Escapar caracteres especiales para evitar inyección SQL
    $nombre = $conn->real_escape_string($nombre);
    $email = $conn->real_escape_string($email);
    $asunto = $conn->real_escape_string($asunto);
    $mensaje = $conn->real_escape_string($mensaje);

    // Prepara la consulta SQL para insertar los datos
    $sql = "INSERT INTO contactanos (nombre, email, asunto, mensaje) VALUES ('$nombre', '$email', '$asunto', '$mensaje')";

    if ($conn->query($sql) === TRUE) {
        $mensaje_respuesta = "Datos guardados correctamente en la base de datos.";
    } else {
        $mensaje_respuesta = "Error al guardar los datos: " . $conn->error;
    }

    // Cierra la conexión
    $conn->close();
}
?>
 

 <div class="row contact-form">
    <div class="col-md-6">
        
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d240864.1946632267!2d-99.30842710059825!3d19.390659362026867!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85ce0026db097507%3A0x54061076265ee841!2sCiudad%20de%20M%C3%A9xico%2C%20CDMX!5e0!3m2!1ses-419!2smx!4v1718600487162!5m2!1ses-419!2smx" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <div class="col-md-6">
        <div id="success"></div>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
            <div class="control-group">
                <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre" required="required" data-validation-required-message="Ingresa tu nombre" />
                <p class="help-block text-danger"></p>
            </div>
            <div class="control-group">
                <input type="email" class="form-control" id="email" name="email" placeholder="Email" required="required" data-validation-required-message="Ingresa tu correo" />
                <p class="help-block text-danger"></p>
            </div>
            <div class="control-group">
                <input type="text" class="form-control" id="asunto" name="asunto" placeholder="Asunto" required="required" data-validation-required-message="Ingresa un asunto" />
                <p class="help-block text-danger"></p>
            </div>
            <div class="control-group">
                <textarea class="form-control" id="mensaje" name="mensaje" placeholder="Mensaje" required="required" data-validation-required-message="Ingresa un mensaje"></textarea>
                <p class="help-block text-danger"></p>
            </div>
            <div>
                <button class="btn custom-btn" type="submit" id="enviar">Enviar mensaje</button>
            </div>
        </form>

<br>
<?php if (isset($mensaje_respuesta)) { ?>
    <p><?php echo $mensaje_respuesta; ?></p>
<?php } ?>


    </div>
</div>
</div>
<!-- Contact End -->



         


       <!-- Footer Start -->
       <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="footer-contact">
                                    <h2>Datos de contacto</h2>
                            
                                    <p><i class="fa fa-phone-alt"></i>55 3232 3232</p>
                                    <p><i class="fa fa-envelope"></i>workbots@workbots.com</p>
                                   
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="footer-link">
                                    <h2>Enlaces</h2>
                                    <a href="pdf/terminos.pdf" target="_blank">Términos de uso</a>
                                    <a href="pdf/politicas.pdf" target="_blank">Política de privacidad</a>
                                    
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                    <div class="footer-social">
                                        <a href=""><i class="fab fa-twitter"></i></a>
                                        <a href=""><i class="fab fa-facebook-f"></i></a>
                                        <a href=""><i class="fab fa-instagram"></i></a>
                               
                                    </div>
                    </div>
                </div>
            </div>
            <div class="copyright">
                <div class="container">
                    <p>Copyright &copy; <a href="#">WorkBots</a>, Todos los derechos reservados.</p>
                   
                </div>
            </div>
        </div>
        <!-- Footer End -->

    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>
    
    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>
</html>