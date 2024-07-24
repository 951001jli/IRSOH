<?php
// Iniciar la sesión
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>IRSOH - Contrátanos</title>
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
    <!-- SCRIPT PAYPAL -->
    <script src="https://www.paypal.com/sdk/js?client-id=AcsfpV_Z8f2917OCqnpNMVZPWv_j9sBjcHkuymvZeipgg4YVJ5b5aU10vHsxzu3trq854YYbWvGoNTMT&currency=MXN"></script>


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
            font-size: 60px;
            /* Tamaño de la letra */
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
            /* Sombra */
            animation: heartbeat 1.2s infinite;
            /* Animación */
            display: inline-block;
            /* Asegura que ocupe solo el espacio necesario */
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
            background-color: #007bff;
            /* Color azul */
            color: white;
            text-decoration: none;
            font-weight: bold;
            border-radius: 25px;
            animation: pulse 1.5s infinite;
            transition: transform 0.2s, box-shadow 0.2s;
            text-align: center;
            /* Centrar el texto dentro del botón */
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


    <style>
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
    </style>


    <!-- Page Header Start -->
    <div class="page-header mb-0">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>Planes de renta</h2>
                </div>

            </div>
        </div>
    </div>
    <!-- Page Header End -->





    <style>
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

    <!-- About Start -->
    <div class="about">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="about-img">
                        <img src="img/pagos.php.webp" alt="Image">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-content">
                        <div class="section-header">
                            <p>Planes de Renta</p>
                            <h2>Opciones flexibles para tus necesidades</h2>
                        </div>

                        <div class="about-text">
                            <p>
                                En IRSOH, ofrecemos la última tecnología en robots equipados con cámaras, diseñados para brindar soluciones efectivas en situaciones críticas como eventos de desastre. Nuestros equipos están diseñados para ser una herramienta indispensable en la búsqueda y rescate de personas en áreas de difícil acceso y condiciones adversas.
                            </p>


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

                                .highlighted-text {
                                    font-size: 200px;
                                    /* Tamaño de la letra ajustado */
                                    text-shadow: 7px 7px 14px rgba(0, 0, 0, 0.3);
                                    /* Sombra */
                                    animation: heartbeat 1.2s infinite;
                                    /* Animación */
                                    display: inline-block;
                                    /* Asegura que ocupe solo el espacio necesario */
                                }
                            </style>

                            <p class="highlighted-text">
                                ¡Conoce nuestros planes!
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




    <!-- Food Start -->

    <div class="food mt-0">
        <div class="container">
            <div class="row align-items-center">

                <style>
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

                    .pulse-button {
                        display: inline-block;
                        padding: 10px 20px;
                        background-color: #007bff;
                        /* Color azul */
                        color: white;
                        text-decoration: none;
                        font-weight: bold;
                        border-radius: 25px;
                        animation: pulse 2s infinite;
                        transition: transform 0.2s, box-shadow 0.2s;
                        text-align: center;
                        /* Centrar el texto dentro del botón */
                        margin: 0 auto;
                        /* Añade margen automático para centrar horizontalmente */
                        display: block;
                        /* Convierte en bloque para ocupar todo el ancho disponible */
                        width: fit-content;
                        /* Ajusta el ancho al contenido */
                    }

                    .pulse-button:hover {
                        transform: scale(1.05);
                        box-shadow: 0 0 0 10px rgba(0, 123, 255, 0.2);
                    }
                </style>

                <!-- PLANAES -->
                <!-- PLAN BASICO  -->
                <div class="col-md-4">
                    <div class="food-item">
                        <h2 style="text-align: center;">Plan Básico</h2>
                        <div style="text-align: left; margin-left: 10px;">
                            <p>
                                <strong>Descripción:</strong>
                                Ideal para usuarios individuales o pequeñas empresas que necesitan monitoreo ocasional.
                            </p>
                            <p>
                                <strong>Características:</strong>
                            <ul>
                                <li>Robot equipado con cámara.</li>
                                <li>Almacenamiento limitado.</li>
                                <li>Soporte técnico básico.</li>
                            </ul>
                            </p>
                            <p>
                                <strong>Precio:</strong> $4000 por día / $10,000 por semana.
                            </p>
                            <!-- Botón que activa el modal -->
                            <button type="button" class="pulse-button" data-toggle="modal" data-target="#basicPlanModal">
                                ¡Lo quiero!
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Modal -->
                <div class="modal fade" id="basicPlanModal" tabindex="-1" role="dialog" aria-labelledby="basicPlanModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="basicPlanModalLabel">Plan Básico</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body" class="food-item ml-3">
                                <p>
                                    <strong>Descripción:</strong>
                                    Ideal para usuarios individuales o pequeñas empresas que necesitan monitoreo ocasional.
                                </p>
                                <p>
                                    <strong>Características:</strong>
                                <ul class="ml-3">
                                    <li>Robot equipado con cámara.</li>
                                    <li>Almacenamiento limitado.</li>
                                    <li>Soporte técnico básico.</li>
                                </ul>
                                </p>
                                <p>
                                    <strong>Precio:</strong> $4000 por día / $10,000 por semana.
                                </p>
                                <!-- PAYPAL -->
                                <div id="paypal-button-container-basico"></div>
                                <!-- Script validacion de actualizacion de plan -->
                                <script>
                                    function updatePlanAndRedirect(plan) {
                                        fetch('update_plan.php', {
                                            method: 'POST',
                                            headers: {
                                                'Content-Type': 'application/json'
                                            },
                                            body: JSON.stringify({
                                                plan: plan
                                            })
                                        }).then(function(response) {
                                            if (response.ok) {
                                                // Redirigir al formulario
                                                window.location.href = 'formPlan.php';
                                            } else {
                                                alert('Error al actualizar el plan.');
                                            }
                                        });
                                    }
                                    //Script de pago a paypal
                                    // Plan Básico
                                    paypal.Buttons({
                                        style: {
                                            color: 'blue',
                                            shape: 'pill',
                                            label: 'pay'
                                        },
                                        createOrder: function(data, actions) {
                                            return actions.order.create({
                                                purchase_units: [{
                                                    amount: {
                                                        value: 4000
                                                    }
                                                }]
                                            });
                                        },
                                        onApprove: function(data, actions) {
                                            return actions.order.capture().then(function(details) {
                                                updatePlanAndRedirect('Plan Básico');
                                            });
                                        },
                                        onCancel: function(data) {
                                            alert("Pago Cancelado");
                                            console.log(data);
                                        }
                                    }).render('#paypal-button-container-basico');
                                </script>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- PLAN ESTANDAR -->
                <div class="col-md-4">
                    <div class="food-item">
                        <h2 style="text-align: center;">Plan Estándar</h2>

                        <div style="text-align: left; margin-left: 10px;">
                            <p>
                                <strong>Descripción:</strong>
                                Recomendado para empresas y organizaciones que requieren monitoreo regular.
                            </p>
                            <p>
                                <strong>Características:</strong>
                            <ul>
                                <li>Robot con capacidades mejoradas.</li>
                                <li>Almacenamiento ampliado.</li>
                                <li>Acceso móvil.</li>
                                <li>Soporte prioritario.</li>
                            </ul>
                            </p>
                            <p>
                                <strong>Precio:</strong> $6000 por día / $15,000 por semana.
                            </p>
                            <!-- Botón que activa el modal -->
                            <button type="button" class="pulse-button" data-toggle="modal" data-target="#planModal">
                                ¡Lo quiero!
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Modal -->
                <div class="modal fade" id="planModal" tabindex="-1" role="dialog" aria-labelledby="planModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="planModalLabel">Plan Estándar</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <p>
                                    <strong>Descripción:</strong>
                                    Recomendado para empresas y organizaciones que requieren monitoreo regular.
                                </p>
                                <p>
                                    <strong>Características:</strong>
                                <ul class="ml-3">
                                    <li>Robot con capacidades mejoradas.</li>
                                    <li>Almacenamiento ampliado.</li>
                                    <li>Acceso móvil.</li>
                                    <li>Soporte prioritario.</li>
                                </ul>
                                </p>
                                <p>
                                    <strong>Precio:</strong> $6000 por día / $15,000 por semana.
                                </p>
                                <!-- PAYPAL  -->
                                <div id="paypal-button-container-estandar"></div>
                                <!-- Script validacion de actualizacion de plan -->
                                <script>
                                    function updatePlanAndRedirect(plan) {
                                        fetch('update_plan.php', {
                                            method: 'POST',
                                            headers: {
                                                'Content-Type': 'application/json'
                                            },
                                            body: JSON.stringify({
                                                plan: plan
                                            })
                                        }).then(function(response) {
                                            if (response.ok) {
                                                // Redirigir al formulario
                                                window.location.href = 'formPlan.php';
                                            } else {
                                                alert('Error al actualizar el plan.');
                                            }
                                        });
                                    }
                                    //Script de pago a paypal
                                    paypal.Buttons({
                                        style: {
                                            color: 'blue',
                                            shape: 'pill',
                                            label: 'pay'
                                        },
                                        createOrder: function(data, actions) {
                                            return actions.order.create({
                                                purchase_units: [{
                                                    amount: {
                                                        value: 6000
                                                    }
                                                }]
                                            });
                                        },
                                        onApprove: function(data, actions) {
                                            return actions.order.capture().then(function(details) {
                                                updatePlanAndRedirect('Plan Estándar');
                                            });
                                        },
                                        onCancel: function(data) {
                                            alert("Pago Cancelado");
                                            console.log(data);
                                        }
                                    }).render('#paypal-button-container-estandar');
                                </script>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- PLAN PREMIUM -->
                <div class="col-md-4">
                    <div class="food-item">

                        <h2 style="text-align: center;">Plan Premium</h2>

                        <div style="text-align: left; margin-left: 10px;">
                            <p>
                                <strong>Descripción:</strong> Diseñado para grandes empresas y proyectos que necesitan un monitoreo continuo.
                            </p>
                            <p>
                                <strong>Características:</strong>
                            <ul>
                                <li>Robot con cámara de alta gama.</li>
                                <li>Almacenamiento ilimitado.</li>
                                <li>Hardware personalizado.</li>
                                <li>Soporte 24/7.</li>
                                <li>Actualizaciones continuas.</li>
                            </ul>
                            </p>
                            <p>
                                <strong>Precio:</strong> $10,000 por día / $20,000 por semana.
                            </p>
                            <!-- Botón que activa el modal -->
                            <button type="button" class="pulse-button" data-toggle="modal" data-target="#premiumPlanModal">
                                ¡Lo quiero!
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Modal -->
                <div class="modal fade" id="premiumPlanModal" tabindex="-1" role="dialog" aria-labelledby="premiumPlanModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="premiumPlanModalLabel">Plan Premium</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <p>
                                    <strong>Descripción:</strong> Diseñado para grandes empresas y proyectos que necesitan un monitoreo continuo.
                                </p>
                                <p>
                                    <strong>Características:</strong>
                                <ul class="ml-3">
                                    <li>Robot con cámara de alta gama.</li>
                                    <li>Almacenamiento ilimitado.</li>
                                    <li>Hardware personalizado.</li>
                                    <li>Soporte 24/7.</li>
                                    <li>Actualizaciones continuas.</li>
                                </ul>
                                </p>
                                <p>
                                    <strong>Precio:</strong> $10,000 por día / $20,000 por semana.
                                </p>
                                <!-- PAYPAL -->
                                <div id="paypal-button-container-premium"></div>
                                <!-- Script validacion de actualizacion de plan -->
                                <script>
                                    function updatePlanAndRedirect(plan) {
                                        fetch('update_plan.php', {
                                            method: 'POST',
                                            headers: {
                                                'Content-Type': 'application/json'
                                            },
                                            body: JSON.stringify({
                                                plan: plan
                                            })
                                        }).then(function(response) {
                                            if (response.ok) {
                                                // Redirigir al formulario
                                                window.location.href = 'formPlan.php';
                                            } else {
                                                alert('Error al actualizar el plan.');
                                            }
                                        });
                                    }
                                    //Script de pago a paypal
                                    paypal.Buttons({
                                        style: {
                                            color: 'blue',
                                            shape: 'pill',
                                            label: 'pay'
                                        },
                                        createOrder: function(data, actions) {
                                            return actions.order.create({
                                                purchase_units: [{
                                                    amount: {
                                                        value: 10000
                                                    }
                                                }]
                                            });
                                        },
                                        onApprove: function(data, actions) {
                                            return actions.order.capture().then(function(details) {
                                                updatePlanAndRedirect('Plan Premium');
                                            });
                                        },
                                        onCancel: function(data) {
                                            alert("Pago Cancelado");
                                            console.log(data);
                                        }
                                    }).render('#paypal-button-container-premium');
                                </script>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Food End -->



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