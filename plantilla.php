
<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Healthy Admin</title>

    <link rel="apple-touch-icon" href="vistas/img/plantilla/icono.png">
    <link rel="shortcut icon" href="vistas/img/plantilla/icono.png">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.0/normalize.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.2.0/css/flag-icon.min.css">
    <link rel="stylesheet" href="vistas/assets/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="vistas/assets/css/style.css">
    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->
    <link href="https://cdn.jsdelivr.net/npm/chartist@0.11.0/dist/chartist.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/jqvmap@1.5.1/dist/jqvmap.min.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/weathericons@2.1.0/css/weather-icons.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/fullcalendar@3.9.0/dist/fullcalendar.min.css" rel="stylesheet" />


    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">


    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="vistas/plugins/sweetalert2/sweetalert2.all.js"></script>

    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/fixedheader/3.1.7/js/dataTables.fixedHeader.min.js"></script>
    <script src="vistas/assets/js/init/fullcalendar-init.js"></script>
    <script src="vistas/js/gestorAdministrador.js"></script>
    <script src="vistas/js/gestorProductos.js"></script>

</head>
<body>
<?php

if (isset($_SESSION["validarSesionBackend"]) && $_SESSION["validarSesionBackend"] === "ok") {
    include "modulos/menu.php";

    echo '<div id="right-panel" class="right-panel">';

    include "modulos/cabezote.php";
 
    

    
    if (isset($_GET["ruta"])) {

        if ($_GET["ruta"] == "inicio" ||
            $_GET["ruta"] == "perfil" ||
            $_GET["ruta"] == "salir" ||
            $_GET["ruta"] == "reportes" ||
            $_GET["ruta"] == "solNutri" ||
            $_GET["ruta"] == "categorias" ||
            $_GET["ruta"] == "productos" ||
            $_GET["ruta"] == "vercitas" ||
            $_GET["ruta"] == "usuario" ||
            $_GET["ruta"] == "estudiosLab" ||
            $_GET["ruta"] == "borrar" ||
            $_GET["ruta"] == "pedidos" ||
            $_GET["ruta"] == "detalles_pedido" ||
            $_GET["ruta"] == "calificaciones" ||
            $_GET["ruta"] == "perfil") {
            include "modulos/" . $_GET["ruta"] . ".php";

        }

    }

    include "modulos/footer.php";

    echo "</div>";

} else {

    include "modulos/login.php";

}

?>


 <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
    <script src="vistas/assets/js/main.js"></script>

    <!--  Chart js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.7.3/dist/Chart.bundle.min.js"></script>

    <!--Chartist Chart-->
    <script src="https://cdn.jsdelivr.net/npm/chartist@0.11.0/dist/chartist.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chartist-plugin-legend@0.6.2/chartist-plugin-legend.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/jquery.flot@0.8.3/jquery.flot.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flot-pie@1.0.0/src/jquery.flot.pie.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flot-spline@0.0.1/js/jquery.flot.spline.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/simpleweather@3.1.0/jquery.simpleWeather.min.js"></script>
    <script src="assets/js/init/weather-init.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/moment@2.22.2/moment.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@3.9.0/dist/fullcalendar.min.js"></script>
    <script src="vistas/assets/js/init/fullcalendar-init.js"></script>
    <script src="vistas/js/gestorAdministrador.js"></script>
    <script src="vistas/js/gestorProductos.js"></script>
    <script>
    $(document).ready(function () {
        // Cuando se muestra el modal de aceptar
        $('#aceptarModal').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget); // Botón que activó el modal
            var idNutriologo = button.data('id'); // Extraer el ID del nutriólogo del atributo data-id
            $('#idNutriologoAceptadoTexto').text(idNutriologo); // Establecer el valor en el texto del modal
        });

        // Cuando se muestra el modal de eliminar
        $('#eliminarModal').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget); // Botón que activó el modal
            var idNutriologo = button.data('id'); // Extraer el ID del nutriólogo del atributo data-id
            $('#idNutriologoEliminado').val(idNutriologo); // Establecer el valor en el campo oculto
        });
    });
</script>

    <script>
  // Funciones para abrir y cerrar el modal
  function openModal(modalId) {
    document.getElementById(modalId).classList.remove('hidden');
  }

  function closeModal(modalId) {
    document.getElementById(modalId).classList.add('hidden');
  }
</script>
<script>
  document.addEventListener('DOMContentLoaded', function () {
    // Menú para móviles
    const mobileMenuButton = document.querySelector('.md\\:hidden button');
    const mobileSidebar = document.querySelector('.md\\:hidden div[role="dialog"]');



    if (mobileMenuButton && mobileSidebar) {
      mobileMenuButton.addEventListener('click', function () {
        mobileSidebar.classList.toggle('translate-x-0');
      });
    }

    // Menú desplegable de usuario
    const userMenuButton = document.querySelector('.ml-3 > button');
    const userMenu = document.querySelector('.ml-3 > div');


    if (userMenuButton && userMenu) {
      userMenuButton.addEventListener('click', function (event) {
        event.stopPropagation(); // Evitar que el clic se propague y cierre el menú móvil
        userMenu.classList.toggle('hidden');
      });

      // Cierra el menú desplegable de usuario al hacer clic fuera de él
      document.addEventListener('click', function (event) {
        if (!userMenuButton.contains(event.target) && !userMenu.contains(event.target)) {
          userMenu.classList.add('hidden');
        }
      });
    }
  });
</script>

</body>
</html>
