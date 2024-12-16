<div class="background-menu" style="height: 90px; width: 100%; background-color: #1ebf60;"></div>
  <br><a href="index.php" style="color: black; margin-left: 35px;"> Inicio </a> / <a href="" style="color: black;"> Editar perfil</a>
        
<div class="max-w-4xl mx-auto mt-10 bg-white p-6 rounded-md shadow-md">
  <h2 class="text-2xl font-semibold text-gray-900 mb-6">Editar Perfil</h2>

  <form action="#" method="post" enctype="multipart/form-data">
     <!-- Foto de Perfil -->
     <div class="mb-4">
      <label for="foto" class="block text-gray-700 text-sm font-medium mb-2">Foto de Perfil</label>
      <input type="file" id="foto" name="foto" accept="image/*" class="w-full p-2 border rounded-md" >
    </div>

    <!-- Nombre -->
    <div class="mb-4">
      <label for="nombre" class="block text-gray-700 text-sm font-medium mb-2">Nombre</label>
      <input type="text" id="nombre" name="nombre" class="w-full p-2 border rounded-md" value="Fernanda Fernandez Perez">
    </div>

    <!-- Correo Electrónico -->
    <div class="mb-4">
      <label for="correo" class="block text-gray-700 text-sm font-medium mb-2">Correo Electrónico</label>
      <input type="email" id="correo" name="correo" class="w-full p-2 border rounded-md" value="fernanda@gmail.com" >
    </div>

    <!-- Teléfono -->
    <div class="mb-4">
      <label for="telefono" class="block text-gray-700 text-sm font-medium mb-2">Teléfono</label>
      <input type="tel" id="telefono" name="telefono" class="w-full p-2 border rounded-md" value="+52 5545454545" >
    </div>

    <!-- Otras campos de edición de perfil -->
    <!-- ...

    -->

    <!-- Botón de Envío -->
    <div class="flex items-center justify-end">
      <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600 focus:outline-none focus:shadow-outline-blue active:bg-blue-800">
        Guardar Cambios
      </button>
    </div>
  </form>
</div>
