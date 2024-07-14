<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>IRSOH - Nosotros</title>
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

        @keyframes slideInUp {
                0% {
                    opacity: 0;
                    transform: translateY(100%);
                }
                100% {
                    opacity: 1;
                    transform: translateY(0);
                }
            }
    
            .page-header h2 {
                animation: slideInUp 1s ease-out;
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
            <div class="page-header mb-0">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h2>Sobre nosotros</h2>
                        </div>
                         
                    </div>
                </div>
            </div>
            <!-- Page Header End -->
            
            
            <!-- Food Start -->
            <div class="food mt-0">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-4">
                            <div class="food-item">
                            <img src="img/icono1.png" alt="Icono de rescate" style="width: 90px; height: 90px;">
                          <br>
                          <br>
                                <h2>Nuestra Misión</h2>
                                <p>
                            Nos dedicamos a la creación de robots equipados con cámaras para buscar y rescatar personas en escombros o lugares de difícil acceso.
                        </p>
                               
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="food-item">
                            <img src="img/tecnologia.png" alt="Icono de rescate" style="width: 90px; height: 90px;">
                          <br>
                          <br>
                                <h2>Tecnología</h2>
                                <p>
                            Utilizamos la última tecnología en robótica y cámaras de alta definición para asegurar que nuestros robots sean eficaces en situaciones de emergencia.
                        </p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="food-item">
                            <img src="img/compromiso.png" alt="Icono de rescate" style="width: 90px; height: 90px;">
                          <br>
                          <br>
                                <h2>Compromiso</h2>
                                <p>
                            Estamos comprometidos con salvar vidas y mejorar la eficiencia de los equipos de rescate mediante el uso de nuestros innovadores robots.
                        </p>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Food End -->
            

        <!-- About Start -->
        <div class="about">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="about-img">
                            <img src="img/equipo.jpg" alt="Image">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about-content">
                            <div class="section-header">
                                <p>Sobre nosotros</p>
                                <h2>Innovación y compromiso</h2>
                            </div>
                            <div class="about-text">
                                <p>
                                    Nuestra empresa se dedica a la creación y desarrollo de robots equipados con cámaras, diseñados específicamente para la búsqueda y rescate de personas en escombros o lugares de difícil acceso.
                                </p>
                                <p>
                                    Comprometidos con la seguridad y la excelencia, nuestro equipo de ingenieros y desarrolladores trabaja constantemente en la mejora y evolución de nuestros productos. Creemos en la importancia de la colaboración con los profesionales de rescate y las organizaciones de emergencia para adaptar nuestras soluciones a sus necesidades específicas.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->
    
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
     
    
     
    
            <!-- Team Start -->
            
    <div class="team">
        <div class="container">
            <div class="section-header text-center">
                <p>WorkBots</p>
                <h2>Nuestro equipo</h2>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-2">
                    <div class="team-item">
                        <div class="team-img">
                            <img src="img/perfil-img.jpg" alt="Image">
                            <div class="team-social">
                                <a href=""><i class="fab fa-twitter"></i></a>
                                <a href=""><i class="fab fa-facebook-f"></i></a> 
                                <a href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="team-text">
                            <h2>Yolibet Águilar</h2>
                            <p>Programadora</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-2">
                    <div class="team-item">
                        <div class="team-img">
                            <img src="img/perfil-img.jpg" alt="Image">
                            <div class="team-social">
                                <a href=""><i class="fab fa-twitter"></i></a>
                                <a href=""><i class="fab fa-facebook-f"></i></a> 
                                <a href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="team-text">
                            <h2>Joseph Alarcón</h2>
                            <p>Programador</p>
                        </div>
                    </div>
                </div>
     
                <div class="col-md-2">
                    <div class="team-item">
                        <div class="team-img">
                            <img src="img/perfil-img.jpg" alt="Image">
                            <div class="team-social">
                                <a href=""><i class="fab fa-twitter"></i></a>
                                <a href=""><i class="fab fa-facebook-f"></i></a> 
                                <a href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="team-text">
                            <h2>Lizet Garduño</h2>
                            <p>Programadora</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="team-item">
                        <div class="team-img">
                            <img src="img/perfil-img.jpg" alt="Image">
                            <div class="team-social">
                                <a href=""><i class="fab fa-twitter"></i></a>
                                <a href=""><i class="fab fa-facebook-f"></i></a> 
                                <a href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="team-text">
                            <h2>Luis Izquierdo</h2>
                            <p>Programador</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="team-item">
                        <div class="team-img">
                            <img src="img/perfil-img.jpg" alt="Image">
                            <div class="team-social">
                                <a href=""><i class="fab fa-twitter"></i></a>
                                <a href=""><i class="fab fa-facebook-f"></i></a> 
                                <a href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="team-text">
                            <h2>Brandon Hernández</h2>
                            <p>Programador</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


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
                                    <a href="">Terminos de uso</a>
                                    <a href="">Politica de privacidad</a>
                                    
                                    
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