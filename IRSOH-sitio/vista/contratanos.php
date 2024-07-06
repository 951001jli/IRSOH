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
                        <img src="vista/recursos/img/equipo.jpg" alt="Image">
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
        font-size: 200px; /* Tamaño de la letra ajustado */
        text-shadow: 7px 7px 14px rgba(0, 0, 0, 0.3); /* Sombra */
        animation: heartbeat 1.2s infinite; /* Animación */
        display: inline-block; /* Asegura que ocupe solo el espacio necesario */
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
                <div class="col-md-4">
    <div class="food-item">
        <img src="vista/recursos/img/icono1.png" alt="Icono de rescate" style="width: 90px; height: 90px;">
        <br>
        <br>
 
        <h2 style="text-align: center;">Plan Básico</h2>
        
        <div style="text-align: left; margin-left: 10px;">
            <p>
                <strong>Descripción:</strong> 
               
                Ideal para usuarios individuales o pequeñas empresas que necesitan monitoreo ocasional.
 
            </p>
            <p>
                <strong>Características:</strong>
                <ul>
                    <li>Robot con equipado con cámara.</li>
                    <li>Almacenamiento de fotografías.</li>
                    <li>Soporte técnico básico.</li>
                </ul>
            </p>
            <p>
                <strong>Precio:</strong> $X por día / $Y por semana.
            </p>
        </div>
    </div>
</div>


<div class="col-md-4">
    <div class="food-item">
        <img src="vista/recursos/img/icono2.png" alt="Icono de rescate" style="width: 90px; height: 90px;">
        <br>
        <br>
 
        <h2 style="text-align: center;">Plan Estándar</h2>
        
        <div style="text-align: left; margin-left: 10px;">
            <p>
                <strong>Descripción:</strong>
                Recomendado para empresas y organizaciones que requieren monitoreo regular y funcionalidades adicionales.
            
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
                <strong>Precio:</strong> $A por día / $B por semana.
            </p>
        </div>
    </div>
</div>



<div class="col-md-4">
    <div class="food-item">
        <img src="vista/recursos/img/icono3.png" alt="Icono de rescate" style="width: 90px; height: 90px;">
        <br>
        <br>
 
        <h2 style="text-align: center;">Plan Premium</h2>
        
        <div style="text-align: left; margin-left: 10px;">
            <p>
                <strong>Descripción:</strong> Diseñado para grandes empresas y proyectos que necesitan un monitoreo continuo y personalizado.
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
                <strong>Precio:</strong> $C por día / $D por semana.
            </p>
        </div>
    </div>
</div>

                </div>
            </div>
        </div>

        <!-- Food End -->
 

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
                        <img src="vista/recursos/img/perfil-img.jpg" alt="Image">
                        <div class="team-social">
                            <a href=""><i class="fab fa-twitter"></i></a>
                            <a href=""><i class="fab fa-facebook-f"></i></a> 
                            <a href=""><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                    <div class="team-text">
                        <h2>Yolibet</h2>
                        <p>Programadora</p>
                    </div>
                </div>
            </div>
 
            <div class="col-md-2">
                <div class="team-item">
                    <div class="team-img">
                        <img src="vista/recursos/img/perfil-img.jpg" alt="Image">
                        <div class="team-social">
                            <a href=""><i class="fab fa-twitter"></i></a>
                            <a href=""><i class="fab fa-facebook-f"></i></a> 
                            <a href=""><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                    <div class="team-text">
                        <h2>Lizet</h2>
                        <p>Programadora</p>
                    </div>
                </div>
            </div>
            <div class="col-md-2">
                <div class="team-item">
                    <div class="team-img">
                        <img src="vista/recursos/img/perfil-img.jpg" alt="Image">
                        <div class="team-social">
                            <a href=""><i class="fab fa-twitter"></i></a>
                            <a href=""><i class="fab fa-facebook-f"></i></a> 
                            <a href=""><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                    <div class="team-text">
                        <h2>Luis</h2>
                        <p>Programador</p>
                    </div>
                </div>
            </div>
            <div class="col-md-2">
                <div class="team-item">
                    <div class="team-img">
                        <img src="vista/recursos/img/perfil-img.jpg" alt="Image">
                        <div class="team-social">
                            <a href=""><i class="fab fa-twitter"></i></a>
                            <a href=""><i class="fab fa-facebook-f"></i></a> 
                            <a href=""><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                    <div class="team-text">
                        <h2>Brandon</h2>
                        <p>Programador</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
