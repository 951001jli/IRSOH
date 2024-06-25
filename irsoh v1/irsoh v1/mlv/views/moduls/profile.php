<?php
          $id_nutriologo = $_GET["medico"];
          $listarNutri = new ControladorNutriologo();
          $lista = $listarNutri->ctrMostrarSolNutr($id_nutriologo);
                               
          $id_usuario = $_SESSION["id"];

          $revisarCalUsuario = $listarNutri->ctrRevisarCalNutr($id_nutriologo, $id_usuario);
          $calificacion = $listarNutri->ctrMostrarCalNutr($id_nutriologo);
      ?>

<?php if($revisarCalUsuario) { ?>
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">¡Califica este médico!</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post">
          <p>Por favor, selecciona una calificación:</p>
          <input type="range" class="form-range" min="1" max="5" id="calificacionRange" name="calificacion">
          <p>Calificación seleccionada: <span id="calificacionValor">3</span></p>
          <button type="submit" name="send-cal" class="btn btn-primary">Guardar</button>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>

<?php  }


if(isset($_POST['send-cal'])) { 
  $listarNutri->ctrAgregarCalNutri(
    $_GET["medico"],
    $_POST['calificacion'],
    $_SESSION["id"],
    $revisarCalUsuario
  );
}



?>


<div class="background-menu" style="height: 90px; width: 100%; background-color: #1ebf60;"></div>
  <br><a href="index.php" style="color: black; margin-left: 35px;"> Inicio </a> / <a href="" style="color: black;"> Perfil</a>
        
<div class="bg-white">
  <div class="max-w-7xl mx-auto px-4 py-16 sm:px-6 sm:py-24 lg:px-8">
    <h1 class="text-3xl font-extrabold tracking-tight text-gray-900"><?php echo $lista['NOMBRE_USUARIO'] . " " . $lista['APELLIDOS_USUARIO'] ?></h1>

    <div class="text-sm border-b border-gray-200 mt-2 pb-5 sm:flex sm:justify-between">
      <dl class="flex">
        <dt class="text-gray-500">Numero de médico: &nbsp;</dt>
        <dd class="font-medium text-gray-900"><?php echo $lista['ID_NUTRIOLOGO']; ?></dd>
        <dt>
          <span class="sr-only">Date</span>
          <span class="text-gray-400 mx-2" aria-hidden="true">&middot;</span>
        </dt>
        
      </dl>
      <div class="star-rating">
      <?php
      // Supongamos que $calificacion_medico contiene la calificación del médico obtenida de la base de datos
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


                                    <!-- <span class="star">&#9733;</span>
                                    <span class="star">&#9733;</span>
                                    <span class="star">&#9733;</span>
                                    <span class="star">&#9734;</span>
                                    <span class="star">&#9734;</span> -->
                                </div>
      <!-- <div class="mt-4 sm:mt-0">
        <a href="#" class="font-medium text-indigo-600 hover:text-indigo-500">
          View invoice<span aria-hidden="true"> &rarr;</span>
        </a>
      </div> -->
    </div>

    <div class="mt-8">
      <h2 class="sr-only">Products purchased</h2>

      <div class="space-y-24">
        <!-- Product Loop -->
        <div class="grid grid-cols-1 text-sm sm:grid-rows-1 sm:grid-cols-12 sm:gap-x-6 md:gap-x-8 lg:gap-x-8">
          <!-- Product Image -->
          <div class="sm:col-span-4 md:col-span-5 md:row-end-2 md:row-span-2">
            <div class="aspect-w-1 aspect-h-1 bg-gray-50 rounded-lg overflow-hidden">
              <img src="<?php echo $lista['FOTO_PERFIL']; ?>" alt="Off-white t-shirt with circular dot illustration on the front of mountain ridges that fade." class="object-center object-cover">
            </div>
          </div>
          <!-- Product Details -->
          <div class="mt-6 sm:col-span-7 sm:mt-0 md:row-end-1">
            <h3 class="text-lg font-medium text-gray-900">
              <a href="#" style="color: black;">Descripción</a>
            </h3>
            <p class="text-gray-500 mt-3"><?php echo $lista['DESCRIPCION']; ?></p>
            <br>
            <h3 class="text-lg font-medium text-gray-900">
              <a href="#" style="color: black;">Especialidad</a>
            </h3>
            <p class="text-gray-500 mt-3"><?php echo $lista['ESPECIALIDAD']; ?></p>
            <!-- Additional Details -->
            <br>
            <p class="font-medium text-gray-900 mt-1">Costo de consulta: $ <?php echo $lista['COSTO_CONSULTA']; ?></p>
            <dl class="grid grid-cols-1 gap-y-8 border-b py-8 border-gray-200 sm:grid-cols-2 sm:gap-x-6 sm:py-6 md:py-10">
              <!-- Delivery Address -->
              <div>
                <dt class="font-medium text-gray-900">Dirección</dt>
                <dd class="mt-3 text-gray-500">
                  <span class="block"><?php echo $lista['UBICACION']; ?></span>
                </dd>
              </div>
              <!-- Shipping Updates -->
              <div>
                <dt class="font-medium text-gray-900">Contacto</dt>
                <dd class="mt-3 text-gray-500 space-y-3">
                  <p>Correo: <?php echo $lista['CORREO']; ?></p>
                  <p>Numero de teléfono: <?php echo $lista['TELEFONO']; ?></p>
                  <!-- <button type="button" class="font-medium text-indigo-600 hover:text-indigo-500">Edit</button> -->
                </dd>
              </div>
            </dl>
            <!-- Order Status -->
            <!-- <p class="font-medium text-gray-900 mt-6 md:mt-10">
              Processing on <time datetime="2021-03-24">March 24, 2021</time>
            </p>
            <div class="mt-6">
              <div class="bg-gray-200 rounded-full overflow-hidden">
                <div class="h-2 bg-indigo-600 rounded-full" style="width: calc((1 * 2 + 1) / 8 * 100%)"></div>
              </div>
              <div class="hidden sm:grid grid-cols-4 font-medium text-gray-600 mt-6">
                <div class="text-indigo-600">Order placed</div>
                <div class="text-center">Processing</div>
                <div class="text-center">Shipped</div>
                <div class="text-right">Delivered</div>
              </div>
            </div> -->
            <div class="mt-6">
            <a href="agendar?medico=<?php echo $lista['ID_NUTRIOLOGO']; ?>"><button type="submit" class="w-auto bg-green-600 border border-transparent rounded-md shadow-sm py-3 px-4 text-base font-medium text-white hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-50 focus:ring-green-500">
              Agendar cita
            </button></a>
          </div>
          </div>
          
        </div>
        
      </div>
    </div>
    </div>


    <div class="bg-white">
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


