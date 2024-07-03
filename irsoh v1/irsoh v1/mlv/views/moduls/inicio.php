        <!-- Carousel Start -->
        <div class="carousel">
            <div class="container-fluid">
                <div class="owl-carousel">
                    <div class="carousel-item">
                        <div class="carousel-img">
                            <img src="views/img/carousel-1.jpg" alt="Image">
                        </div>
                        <div class="carousel-text">
                            <h1>Salva más Vidas.</h1>
                            <div class="carousel-btn">
                    <!--            <a class="btn custom-btn" href="">Ver más</a>
                    -->            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="carousel-img">
                            <img src="views/img/carousel-2.jpg" alt="Image">
                        </div>
                        <div class="carousel-text">
                            <h1>Ayuda Oportuna. </h1>
                            <div class="carousel-btn">
                        <!--        <a class="btn custom-btn" href="">Ver más</a>
                    -->        </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="carousel-img">
                            <img src="views/img/carousel-3.jpg" alt="Image">
                        </div>
                        <div class="carousel-text">
                            <h1>Acción Rapida.</h1>
                            <div class="carousel-btn">
                      <!--          <a class="btn custom-btn" href="">Leer más</a>
                        -->    </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Carousel End -->
               

        <!-- About Start -->
        <div class="about">
            <div class="container">
                <div class="row align-items-center">
                    
                    <div class="col-lg-6">
                        <div class="about-content">
                            <div class="section-header">
                                <!-- <p>About Us</p> -->
                                <h2>¿Quienes Somos?</h2>
                            </div>
                            <div class="about-text">
                                <p>
                                    
                                Lorem ipsum dolor sit amet elit. Phasel nec preti mi. Curabit facilis ornare velit non vulput
                                      
                                </p>
                                <p>
                                    
                                Lorem ipsum dolor sit amet elit. Phasel nec preti mi. Curabit facilis ornare velit non vulput
                                    
                                </p>
                                <a class="btn custom-btn" href="">Comenzar</a>
                            </div>

                            <div class="section-header">
                                <h2>Acerca de</h2>
                            </div>
                            <div class="about-text">
                                <p>
                                    
                                Lorem ipsum dolor sit amet elit. Phasel nec preti mi. Curabit facilis ornare velit non vulput
                                      
                                </p>
                                <p>
                                    
                                Lorem ipsum dolor sit amet elit. Phasel nec preti mi. Curabit facilis ornare velit non vulput
                                    
                                </p>
                                <a class="btn custom-btn" href="">Comenzar</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about-img">
                            <img src="views/img/workbot.jpeg" alt="Image">
                            <!-- <button type="button" class="btn-play" data-toggle="modal" data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-target="#videoModal">
                                <span></span>
                            </button> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
          
        
<!--        <div class="bg-white">
  <div class="max-w-2xl mx-auto py-16 px-4 sm:py-24 sm:px-6 lg:max-w-7xl lg:px-8">
    <h2 class="text-2xl font-extrabold tracking-tight text-gray-900">Recomendaciones</h2>

    <div class="mt-6 grid grid-cols-1 gap-y-10 gap-x-6 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8">
            <?php 
        $listarNutri = new ControladorNutriologo();
            $lista = $listarNutri->ctrMostrarTotalNutriRe();
            foreach ($lista as $nutri) {
        ?>

         <div class="group relative">
        <div class="w-full min-h-80 bg-gray-200 aspect-w-1 aspect-h-1 rounded-md overflow-hidden group-hover:opacity-75 lg:h-80 lg:aspect-none">
          <img src="<?php echo $nutri['FOTO_PERFIL']; ?>" alt="Front of men's Basic Tee in black." class="w-full h-full object-center object-cover lg:w-full lg:h-full">
        </div>
        <div class="mt-4 flex justify-between">
          <div>
            <h3 class="text-sm text-black-700">
              <a href="profile?medico=<?php echo $nutri['ID_USUARIO']; ?>">
                <span aria-hidden="true" class="absolute inset-0"></span>
                <p class="mt-1 text-sm text-green-500"><?php echo $nutri['NOMBRE_USUARIO'] . " " . $nutri['APELLIDOS_USUARIO'] ?></p>
              </a>
            </h3>
            <p class="mt-1 text-sm text-gray-500"><?php echo $nutri['ESPECIALIDAD']; ?></p>
          </div>
          <p class="text-sm font-medium">
            <div class="star-rating-rec">
            <?php
          $listarNutri = new ControladorNutriologo();
          
          $calificacion = $listarNutri->ctrMostrarCalNutr($nutri['ID_NUTRIOLOGO']);
          $calificacion_medico = $calificacion['promedio_calificacion']; // Ejemplo de calificación
      // Mostrar las estrellas según la calificación
            for ($i = 1; $i <= 5; $i++) {
                if ($i <= $calificacion_medico) {
                echo '<span class="star">&#9733;</span>'; // Estrella llena
                } else {
                echo '<span>&#x2606;</span>'; // Estrella vacía
                }
            }
      ?>
                
            </div>
          </p>
        </div>
      </div>

      <?php
            }
      ?>

    </div>
  </div>
</div>

        
    
        <!-- Menu Start -->
 <!--       <div class="menu">
            <div class="container">
                <div class="section-header text-center">
                    <p>Productos</p>
                    <h2>Categorias</h2>
                </div>
                <div class="menu-tab">
                    <ul class="nav nav-pills justify-content-center">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="pill" href="#burgers">Suplementos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="pill" href="#snacks">Proteinas</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="pill" href="#beverages">Recetas saludables</a>
                        </li>
                    </ul>
                    <div class="tab-content testimonial">
                        <div id="burgers" class="container tab-pane active">
                            <div class="owl-carousel testimonials-carousel">
                                <div class="testimonial-item">
                                    <div class="testimonial-img">
                                        <img src="views/img/product-1.jpg" alt="Image">
                                    </div>
                                    <!-- <p>
                                        Lorem ipsum dolor sit amet elit. Phasel nec preti mi. Curabit facilis ornare velit non vulput
                                    </p> -->
         <!--                           <h2>Producto</h2>
                                    <h3>$500.00</h3><br>
                                    <ul class="nav nav-pills justify-content-center">
                                        <li class="nav-item">
                                            <a class="nav-link active" data-toggle="pill" href="#">Ver producto</a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="testimonial-item">
                                    <div class="testimonial-img">
                                        <img src="views/img/product-2.jpg" alt="Image">
                                    </div>
                                    <!-- <p>
                                        Lorem ipsum dolor sit amet elit. Phasel nec preti mi. Curabit facilis ornare velit non vulput
                                    </p> -->
        <!--                            <h2>Producto</h2>
                                    <h3>$500.00</h3><br>
                                    <ul class="nav nav-pills justify-content-center">
                                        <li class="nav-item">
                                            <a class="nav-link active" data-toggle="pill" href="#">Ver producto</a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="testimonial-item">
                                    <div class="testimonial-img">
                                        <img src="views/img/product-3.png" alt="Image">
                                    </div>
                                    <!-- <p>
                                        Lorem ipsum dolor sit amet elit. Phasel nec preti mi. Curabit facilis ornare velit non vulput
                                    </p> -->
        <!--                            <h2>Producto</h2>
                                    <h3>$500.00</h3><br>
                                    <ul class="nav nav-pills justify-content-center">
                                        <li class="nav-item">
                                            <a class="nav-link active" data-toggle="pill" href="#">Ver producto</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div id="snacks" class="container tab-pane fade">
                           
                            <div class="owl-carousel testimonials-carousel">
                                <div class="testimonial-item">
                                    <div class="testimonial-img">
                                        <img src="views/img/product-4.jpg" alt="Image">
                                    </div>
                                    <!-- <p>
                                        Lorem ipsum dolor sit amet elit. Phasel nec preti mi. Curabit facilis ornare velit non vulput
                                    </p> -->
        <!--                            <h2>Producto</h2>
                                    <h3>$500.00</h3><br>
                                    <ul class="nav nav-pills justify-content-center">
                                        <li class="nav-item">
                                            <a class="nav-link active" data-toggle="pill" href="#">Ver producto</a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="testimonial-item">
                                    <div class="testimonial-img">
                                        <img src="views/img/product-5.jpg" alt="Image">
                                    </div>
                                    <!-- <p>
                                        Lorem ipsum dolor sit amet elit. Phasel nec preti mi. Curabit facilis ornare velit non vulput
                                    </p> -->
        <!--                            <h2>Producto</h2>
                                    <h3>$500.00</h3><br>
                                    <ul class="nav nav-pills justify-content-center">
                                        <li class="nav-item">
                                            <a class="nav-link active" data-toggle="pill" href="#">Ver producto</a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="testimonial-item">
                                    <div class="testimonial-img">
                                        <img src="views/img/product-6.jpg" alt="Image">
                                    </div>
                                    <!-- <p>
                                        Lorem ipsum dolor sit amet elit. Phasel nec preti mi. Curabit facilis ornare velit non vulput
                                    </p> -->
        <!--                            <h2>Producto</h2>
                                    <h3>$500.00</h3><br>
                                    <ul class="nav nav-pills justify-content-center">
                                        <li class="nav-item">
                                            <a class="nav-link active" data-toggle="pill" href="#">Ver producto</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div id="beverages" class="container tab-pane fade">
                           
                            <div class="owl-carousel testimonials-carousel">
                                <div class="testimonial-item">
                                    <div class="testimonial-img">
                                        <img src="views/img/product-7.jpg" alt="Image">
                                    </div>
                                    <!-- <p>
                                        Lorem ipsum dolor sit amet elit. Phasel nec preti mi. Curabit facilis ornare velit non vulput
                                    </p> -->
        <!--                            <h2>Producto</h2>
                                    <h3>$500.00</h3><br>
                                    <ul class="nav nav-pills justify-content-center">
                                        <li class="nav-item">
                                            <a class="nav-link active" data-toggle="pill" href="#">Ver producto</a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="testimonial-item">
                                    <div class="testimonial-img">
                                        <img src="views/img/product-8.jpg" alt="Image">
                                    </div>
                                    <!-- <p>
                                        Lorem ipsum dolor sit amet elit. Phasel nec preti mi. Curabit facilis ornare velit non vulput
                                    </p> -->
        <!--                            <h2>Producto</h2>
                                    <h3>$500.00</h3><br>
                                    <ul class="nav nav-pills justify-content-center">
                                        <li class="nav-item">
                                            <a class="nav-link active" data-toggle="pill" href="#">Ver producto</a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="testimonial-item">
                                    <div class="testimonial-img">
                                        <img src="views/img/product-9.jpg" alt="Image">
                                    </div>
                                    <!-- <p>
                                        Lorem ipsum dolor sit amet elit. Phasel nec preti mi. Curabit facilis ornare velit non vulput
                                    </p> -->
    <!--                                <h2>Producto</h2>
                                    <h3>$500.00</h3><br>
                                    <ul class="nav nav-pills justify-content-center">
                                        <li class="nav-item">
                                            <a class="nav-link active" data-toggle="pill" href="#">Ver producto</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Menu End -->
        

