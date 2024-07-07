<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>IRSOH</title>
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


        <!-- Carousel Start -->
        <div class="carousel" style="margin: 0; padding:0;">
            <div class="container-fluid">
                <div class="owl-carousel">
                    <div class="carousel-item">
                        <div class="carousel-img">
                            <img src="img/sismo3.jpg" alt="Image">
                        </div>
                        <div class="carousel-text">
                            <h1>Salva <span>más</span> vidas</h1>
                            <p>
                                En cada escombro, una esperanza: descubre cómo nuestro robot devuelve la luz en los momentos más oscuros.
                            </p>
                            <a href="/irsoh/menus/index.php" class="btn-contratanos">Contrátanos</a>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="carousel-img">
                            <img src="img/wall-e.jpg" alt="Image">
                        </div>
                        <div class="carousel-text">
                            <h1>Esperanza <span>entre</span> escombros</h1>
                            <p>
                                Un rayo de esperanza en medio del caos: nuestro robot busca entre los escombros para salvar vidas y traer alivio a los corazones desesperados.
                            </p>
                            <a href="/irsoh/menus/index.php" class="btn-contratanos">Contrátanos</a>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="carousel-img">
                            <img src="img/sismo2.jpg" alt="Image">
                        </div>
                        <div class="carousel-text">
                            <h1>Esperanza <span>emergente</span></h1>
                            <p>
                                Un rayo de esperanza en medio del caos, buscando incansablemente en los escombros para salvar vidas.
                            </p>
                   
    
                            <a href="/irsoh/menus/index.php" class="btn-contratanos">Contrátanos</a>

    
                        </div>
                    </div>
                </div>
            </div>
        </div>
     
    
    
            
     
        <!-- About Start -->
        <div class="about">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="about-img">
                            <img src="img/videosismo.jpg" alt="Image">
                            <button type="button" class="btn-play" data-toggle="modal" data-src="https://www.youtube.com/embed/zB3wKUOaSWI?si=k3W6Tnk8UHCEz89g"  data-target="#videoModal">
                                <span></span>
                            </button>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about-content">
                            <div class="section-header">
                                <p>Espíritu solidario</p>
                                <h2>Unidos por la resiliencia</h2>
                            </div>
                            <div class="about-text">
                                <p>
                                Nuestro proyecto va dedicado a la memoria de los sismos en México. Con corazones solidarios y un compromiso inquebrantable, estamos aquí para reconstruir y recordar juntos.
                                </p>
                                <p>
                                Tenemos como objetivo honrar a quienes perdieron sus vidas, apoyar a los afectados y fortalecer nuestro espíritu de resiliencia. Unidos, demostramos que la esperanza y el amor superan cualquier desafío.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Carousel End -->
        
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const aboutContent = document.querySelector('.about-content');
        
                window.addEventListener('scroll', function() {
                    const scrollPosition = window.scrollY + window.innerHeight;
                    const aboutPosition = aboutContent.getBoundingClientRect().top + window.scrollY;
        
                    if (scrollPosition > aboutPosition) {
                        aboutContent.classList.add('scrolled-up');
                    }
                });
            });
            </script>

  <!-- Video Modal Start-->
  <div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>        
                <!-- 16:9 aspect ratio -->
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="" id="video"  allowscriptaccess="always" allow="autoplay"></iframe>
                </div>
            </div>
        </div>
    </div>
</div> 
<!-- Video Modal End -->
        
        
        
        
        
         <!-- Food Start -->
    <div class="food">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-4">
                    <div class="food-item">
                        <img src="img/icono1.png" alt="Icono de rescate" style="width: 90px; height: 90px;">
                        <br>
                        <br>
                        <h2>Rescate</h2>
                        <p>
                            Utilización de tecnología avanzada para localizar y salvar personas atrapadas en situaciones de desastre como sismos.
                        </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="food-item">
                        <img src="img/icono2.png" alt="Icono de rescate" style="width: 90px; height: 90px;">
                        <br>
                        <br>
                        <h2>Innovación</h2>
                        <p>
                            Desarrollo continuo de soluciones tecnológicas para mejorar la eficiencia y efectividad en operaciones de rescate.
                        </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="food-item">
                        <img src="img/icono3.png" alt="Icono de rescate" style="width: 90px; height: 90px;">
                        <br>
                        <br>
                        <h2>Solidaridad</h2>
                        <p>
                            Cooperación entre equipos de rescate y comunidades afectadas para enfrentar desafíos durante desastres naturales.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Food End -->
        
        
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const foodItems = document.querySelectorAll('.food-item');
    
            window.addEventListener('scroll', function() {
                foodItems.forEach(function(item) {
                    const scrollPosition = window.scrollY + window.innerHeight;
                    const itemPosition = item.getBoundingClientRect().top + window.scrollY;
    
                    if (scrollPosition > itemPosition) {
                        item.classList.add('scrolled-up');
                    }
                });
            });
        });
        </script>


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
                                    <div class="footer-social">
                                        <a href=""><i class="fab fa-twitter"></i></a>
                                        <a href=""><i class="fab fa-facebook-f"></i></a>
                                        <a href=""><i class="fab fa-instagram"></i></a>
                               
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="footer-link">
                                    <h2>Enlaces</h2>
                                    <a href="">Terminos de uso</a>
                                    <a href="">Politica de privacidad</a>
                                    
                                    <a href="">Ayuda</a>
                             
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="footer-newsletter">
                            <h2>Newsletter</h2>
                            <p>
                            Descubre cómo la tecnología de vanguardia salva vidas y mejora las operaciones de emergencia. ¡Únete a nuestra misión de hacer del mundo un lugar más seguro!
                            </p>
                            <div class="form">
                                <input class="form-control" placeholder="Escribe tu email">
                                <button class="btn custom-btn">Enviar</button>
                            </div>
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