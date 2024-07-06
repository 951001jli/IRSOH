
    <!-- Carousel Start -->
    <div class="carousel" style="margin: 0; padding:0;">
        <div class="container-fluid">
            <div class="owl-carousel">
                <div class="carousel-item">
                    <div class="carousel-img">
                        <img src="vista/recursos/img/sismo3.jpg" alt="Image">
                    </div>
                    <div class="carousel-text">
                        <h1>Salva <span>más</span> vidas</h1>
                        <p>
                            En cada escombro, una esperanza: descubre cómo nuestro robot devuelve la luz en los momentos más oscuros.
                        </p>
                        <button class="btn-contratanos">Contrátanos</button>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="carousel-img">
                        <img src="vista/recursos/img/wall-e.jpg" alt="Image">
                    </div>
                    <div class="carousel-text">
                        <h1>Esperanza <span>entre</span> escombros</h1>
                        <p>
                            Un rayo de esperanza en medio del caos: nuestro robot busca entre los escombros para salvar vidas y traer alivio a los corazones desesperados.
                        </p>
                        <button class="btn-contratanos">Contrátanos</button>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="carousel-img">
                        <img src="vista/recursos/img/sismo2.jpg" alt="Image">
                    </div>
                    <div class="carousel-text">
                        <h1>Esperanza <span>emergente</span></h1>
                        <p>
                            Un rayo de esperanza en medio del caos, buscando incansablemente en los escombros para salvar vidas.
                        </p>
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
</style>

<a href="../vista/inicioSesion.php" class="btn-contratanos">Contrátanos</a>

                    </div>
                </div>
            </div>
        </div>
    </div>
 


        
 
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
                        <img src="vista/recursos/img/videosismo.jpg" alt="Image">
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

        .food-item.scrolled-up {
            animation: slide-up 1s forwards;
        }
    </style>
 
    <!-- Food Start -->
    <div class="food">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-4">
                    <div class="food-item">
                        <img src="vista/recursos/img/icono1.png" alt="Icono de rescate" style="width: 90px; height: 90px;">
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
                        <img src="vista/recursos/img/icono2.png" alt="Icono de rescate" style="width: 90px; height: 90px;">
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
                        <img src="vista/recursos/img/icono3.png" alt="Icono de rescate" style="width: 90px; height: 90px;">
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
 

        
        
       
        


        </div>

        
        
       
