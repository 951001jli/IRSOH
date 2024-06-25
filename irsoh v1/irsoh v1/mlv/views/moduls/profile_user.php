<?php
    $listarPerfil = new ControladorPerfil();
    $lista = $listarPerfil->ctrMostrarPerfil($_SESSION["id"]);
?>

<div class="background-menu" style="height: 90px; width: 100%; background-color: #1ebf60;"></div>
<br>
<a href="index.php" style="color: black; margin-left: 35px;"> Inicio </a> / <a href="" style="color: black;"> Mi perfil</a>
  
<br/>


<div class="max-w-4xl mx-auto mt-10 bg-white p-6 rounded-md shadow-md">
  <div class="flex items-center justify-between mb-6">
  <a href="salir">
    <button  class="bg-green-500 text-white px-4 py-2 rounded-md hover:bg-green-600 focus:outline-none focus:shadow-outline-green active:bg-blue-800">
      Cerrar sesión
    </button>
  </a>
      <button class="bg-green-500 text-white px-4 py-2 rounded-md hover:bg-green-600 focus:outline-none focus:shadow-outline-green active:bg-blue-800" data-toggle="modal" data-target="#modalEditarPerfil">
        Editar Perfil
      </button>
</div>
<!--
  <div class="flex items-center">
    <!-- Foto de perfil 
    <?php if(isset($lista["FOTO_PERFIL"])): ?>
      <img src="<?php echo $lista["FOTO_PERFIL"]; ?>"
         alt="Foto de perfil" class="w-20 h-20 rounded-full mr-4">
    <?php else: ?>
      <img src="views/img/perfil/default/anonymous.png"
         alt="Foto de perfil estática" class="w-20 h-20 rounded-full mr-4">
    <?php endif; ?>

    <!-- Información del perfil 
    <div>
      <h3 class="text-lg font-semibold text-gray-800"><?php echo $lista["NOMBRE_USUARIO"] . " " . $lista["APELLIDOS_USUARIO"]?></h3>
      <p class="text-gray-600">Correo Electrónico: <?php echo $lista["CORREO"]; ?></p>
      <p class="text-gray-600">Teléfono: <?php echo $lista["TELEFONO"]; ?></p>
      <p class="text-gray-600">Ocupación: <?php echo $lista["OCUPACION"]; ?></p>
      <p class="text-gray-600">Género: <?php echo $lista["GENERO"]; ?></p>
      <?php
        $fechaNacimiento = $lista["FECHA_NACIMIENTO"];
        $fechaFormateada = date("d/m/Y", strtotime($fechaNacimiento));
      ?>
      <p class="text-gray-600">Fecha de nacimiento: <?php echo $fechaFormateada; ?></p>
      <!-- Otras informaciones del perfil 
    </div>

    <?php 
    if($lista["ESTUDIOS_LABORATORIO"]) {
    
    ?>
      <a href="<?php echo $lista['ESTUDIOS_LABORATORIO']; ?>" style="color: black;" class="bg-green-100 max-w-4xl mx-auto mt-10 p-6 rounded-md shadow-md">
      <ul class="list-unstyled">
              <li>
                  <i class="menu-icon fas fa-file-pdf fa-2x"></i>
              </li>
          </ul>
      </a>
      <?php
    } else {

      ?>
      <button class="bg-green-100 max-w-4xl mx-auto mt-10 p-6 rounded-md shadow-md" data-toggle="modal" data-target="#modalAgregarEstudios">
        <i class="fas"></i> Agregar estudios de laboratorio
      </button>
    <?php

    } 
    ?>
     
  </div>
--> 

                  <div align="center">
                        
                        <img src="views/img/camara.jpg" alt="Image" width=200 height="200">
                        
                  </div>

<div>
      <div align="center">
        <button class="bg-blue-100 max-w-4xl mx-auto mt-10 p-6 rounded-md shadow-md">Adelante</button>
      </div>
  <br>
      <div align="center">
        <button class="bg-green-100 max-w-4xl mx-auto mt-10 p-6 rounded-md shadow-md">Izquierda</button>
        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        <button class="bg-green-100 max-w-4xl mx-auto mt-10 p-6 rounded-md shadow-md">Derecha</button>
      </div> 
  <br> 
      <div align="center">
        <button class="bg-blue-100 max-w-4xl mx-auto mt-10 p-6 rounded-md shadow-md">Atras</button>
      </div>  

  </div>


<div class="modal fade" id="modalAgregarEstudios" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                              <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Agrega tus estudios de laboratorio</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                  <span aria-hidden="true">&times;</span>
                                                </button>
                                              </div>
                                              <div class="modal-body">
                                              <form method="post" enctype="multipart/form-data">
                                              <input type="hidden" id="id_perfil" name="id_perfil" value="<?php echo $_SESSION['id']; ?>">

                                            <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                              <span class="input-group-text">Archivo PDF</span>
                                            </div>
                                            <div class="custom-file">
                                              <input type="file" class="custom-file-input foto" id="pdf" name="pdf" onchange="actualizarNombreArchivo(this)">
                                              <label class="custom-file-label" for="foto">Elige archivo</label>
                                            </div>

                                            <input type="hidden" class="antiguaFoto">
                                          </div>
                                              <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                                <input type="submit" class="btn btn-primary" value="Guardar Cambios" name="agregar-estudios">
                                              </div>
                                                </form>
                                              </div>
                                              
                                            </div>
                                          </div>
                                        </div>




<div class="modal fade" id="modalEditarPerfil" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                              <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Editar perfil</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                  <span aria-hidden="true">&times;</span>
                                                </button>
                                              </div>
                                              <div class="modal-body">
                                              <form method="post" enctype="multipart/form-data">
                                              <input type="hidden" id="id_perfil" name="id_perfil" value="<?php echo $_SESSION['id']; ?>">
                                            <div class="input-group mb-3">
                                              <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon1">Nombre</span>
                                              </div>
                                              <input type="text" class="form-control" placeholder="Nombre" id="nombre" name="nombre" aria-label="Username" aria-describedby="basic-addon1" id="NOMBRE" value="<?php echo $lista["NOMBRE_USUARIO"]; ?>">
                                            </div>


                                            <div class="input-group mb-3">
                                              <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon1">Apellidos</span>
                                              </div>
                                              <input type="text" class="form-control" id="apellidos" name="apellidos" placeholder="Descripción" aria-label="Username" aria-describedby="basic-addon1" value="<?php echo $lista["APELLIDOS_USUARIO"]; ?>">
                                            </div>

                                            <div class="input-group mb-3">
                                              <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon1">Correo eléctronico</span>
                                              </div>
                                              <input type="text" class="form-control" id="correo" name="correo" placeholder="Descripción" aria-label="Username" aria-describedby="basic-addon1" value="<?php echo $lista["CORREO"]; ?>">
                                            </div>

                                            <div class="input-group mb-3">
                                              <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon1">Fecha Nacimiento</span>
                                              </div>
                                              <input type="date" class="form-control" id="nacimiento" name="nacimiento" aria-label="Username" aria-describedby="basic-addon1" value="<?php echo $lista["FECHA_NACIMIENTO"]; ?>">
                                            </div>

                                            <div class="input-group mb-3">
                                              <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon1">Telefono</span>
                                              </div>
                                              <input type="text" class="form-control" id="telefono" name="telefono" placeholder="Teléfono" aria-label="Username" aria-describedby="basic-addon1" value="<?php echo $lista["TELEFONO"]; ?>">
                                            </div>

                                            <div class="input-group mb-3">
                                              <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon1">Ocupación</span>
                                              </div>
                                              <input type="text" class="form-control" id="ocupacion" name="ocupacion" placeholder="Ocupación" aria-label="Username" aria-describedby="basic-addon1" value="<?php echo $lista["OCUPACION"]; ?>">
                                            </div>


                                            <div class="input-group mb-3">
                                              <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon1">Género</span>
                                              </div>
                                              <input type="text" class="form-control" name="genero" id="genero" aria-describedby="basic-addon3" value="<?php echo $lista["GENERO"]; ?>">
                                            </div>

                                            <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                              <span class="input-group-text">Imagen</span>
                                            </div>
                                            <div class="custom-file">
                                              <input type="file" class="custom-file-input foto" id="foto" name="foto" onchange="actualizarNombreArchivo(this)">
                                              <label class="custom-file-label" for="foto">Elige archivo</label>
                                            </div>

                                            <input type="hidden" class="antiguaFoto">
                                          </div>
                                          <p class="help-block">Tamaño recomendado 400px * 450px <br> Peso máximo de la foto 2MB</p>

                                          <img src="<?php echo $lista['FOTO_PERFIL']; ?>" class="img-thumbnail previsualizar" width="200px">

                                          <script>
                                            function actualizarNombreArchivo(input) {
                                              var nombreArchivo = input.files[0].name;
                                              var label = input.nextElementSibling; // Obtener el elemento de la etiqueta siguiente

                                              // Actualizar el texto de la etiqueta con el nombre del archivo
                                              label.innerHTML = nombreArchivo;
                                            }
                                          </script>
                                              <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                                <input type="submit" class="btn btn-primary" value="Guardar Cambios" name="editar-perfil">
                                              </div>
                                                </form>
                                              </div>
                                              
                                            </div>
                                          </div>
                                        </div>



  <br>

  <?php
if(isset($_POST['editar-perfil'])) { 
  $editarPerfil = new ControladorPerfil();
  $editarPerfil->ctrEditarPerfil(
    $_POST['id_perfil'],
    $_POST['nombre'],
    $_POST['apellidos'],
    $_POST['correo'],
    $_POST['nacimiento'],
    $_POST['telefono'],
    $_POST['ocupacion'],
    $_POST['genero'],
    $_FILES['foto']
  );
}

if(isset($_POST['agregar-estudios'])) { 
  $editarPerfil = new ControladorPerfil();
  $editarPerfil->ctrAgregarEstudios(
    $_SESSION['id'],
    $_FILES['pdf']
  );
}

?>
  
</div>


