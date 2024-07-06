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
        background-color: #007bff; /* Color azul */
        color: white;
        text-decoration: none;
        font-weight: bold;
        border-radius: 25px;
        animation: pulse 2s infinite;
        transition: transform 0.2s, box-shadow 0.2s;
        text-align: center; /* Centrar el texto dentro del botón */
        margin: 0 auto; /* Añade margen automático para centrar horizontalmente */
        display: block; /* Convierte en bloque para ocupar todo el ancho disponible */
        width: fit-content; /* Ajusta el ancho al contenido */
    }

    .pulse-button:hover {
        transform: scale(1.05);
        box-shadow: 0 0 0 10px rgba(0, 123, 255, 0.2);
    }
</style>


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

            <!-- Botón palpitante -->
            <a href="#" class="pulse-button">¡Lo quiero!</a>
        </div>
    </div>
</div>


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
             <!-- Botón palpitante -->
             <a href="#" class="pulse-button">¡Lo quiero!</a>
        </div>
    </div>
</div>



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
             <!-- Botón palpitante -->
             <a href="#" class="pulse-button">¡Lo quiero!</a>
        </div>
    </div>
</div>

                </div>
            </div>
        </div>

        <!-- Food End -->
 

    