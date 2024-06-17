<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title> I R S O H </title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Free Website Template" name="keywords">
        <meta content="Free Website Template" name="description">

        <link rel="apple-touch-icon" href="views/img/icono.png">
        <link rel="shortcut icon" href="views/img/icono.png">

        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400|Nunito:600,700" rel="stylesheet"> 
        
        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="views/lib/animate/animate.min.css" rel="stylesheet">
        <link href="views/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
        <link href="views/lib/flaticon/font/flaticon.css" rel="stylesheet">
        <link href="views/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
        <!-- Template Stylesheet -->
        <link href="views/css/style.css" rel="stylesheet">
        <style>
    #calificacionRange {
      -webkit-appearance: none;
      width: 100%;
      height: 25px;
      border-radius: 5px;  
      background: linear-gradient(to right, #fbd364 0%, #f06d06 100%);
      outline: none;
      opacity: 0.7;
      -webkit-transition: .2s;
      transition: opacity .2s;
    }

    #calificacionRange::-webkit-slider-thumb {
      -webkit-appearance: none;
      appearance: none;
      width: 25px;
      height: 25px;
      border-radius: 50%; 
      background: #ffffff;
      cursor: pointer;
      border: 2px solid #f06d06; /* color del borde del círculo */
      box-shadow: 0px 0px 5px #f06d06; /* sombra del círculo */
    }

    #calificacionRange::-moz-range-thumb {
      width: 25px;
      height: 25px;
      border-radius: 50%;
      background: #ffffff;
      cursor: pointer;
      border: 2px solid #f06d06; /* color del borde del círculo */
      box-shadow: 0px 0px 5px #f06d06; /* sombra del círculo */
    }

    .rating {
      unicode-bidi: bidi-override;
      direction: rtl;
      text-align: left;
    }
    .rating > span {
      display: inline-block;
      position: relative;
      width: 1.1em;
    }
    .rating > span:hover:before,
    .rating > span:hover ~ span:before {
      content: "\2605";
      position: absolute;
    }
    .rating > span:hover:before {
      color: #ffa500; /* Color de la estrella al pasar el ratón */
    }
    .rating > span:hover ~ span:before {
      color: #ccc; /* Color de las estrellas restantes al pasar el ratón */
    }
    
  </style>
    </head>

    <body>
<?php

if (isset($_SESSION["validarSesionBackendUsuario"]) && $_SESSION["validarSesionBackendUsuario"] === "ok") {
    include "seccions/navbar_user.php";

    echo '<div id="right-panel" class="right-panel">';

    if (isset($_GET["ruta"])) {

        if ($_GET["ruta"] == "inicio" ||
              $_GET["ruta"] == "profile" ||
              $_GET["ruta"] == "profile_user"||
              $_GET["ruta"] == "pay_success"||
              $_GET["ruta"] == "borrar"||
              $_GET["ruta"] == "salir") {
              
                include "moduls/" . $_GET["ruta"] . ".php";

        }   

    } else {
        include "moduls/inicio.php";
    }

    include "seccions/footer.php";

    echo "</div>";

} else {
    if (isset($_GET["ruta"])) {
    if ($_GET["ruta"] == "login") {
        include "moduls/" . $_GET["ruta"] . ".php";
    } else {
        include "seccions/navbar.php";
        echo '<div id="right-panel" class="right-panel">';
        

            if ($_GET["ruta"] == "inicio" ||
                $_GET["ruta"] == "recommendations" ||
                $_GET["ruta"] == "cat_medicos" ||
                $_GET["ruta"] == "profile" ||
                $_GET["ruta"] == "products" ||
                $_GET["ruta"] == "perfil_usu") {
                include "moduls/" . $_GET["ruta"] . ".php";

            } else {
                echo '<script>
                        window.location.href = "inicio";
                    </script>';
            }

       


        echo "</div>";
        include "seccions/footer.php";
    }
    } else {
        include "seccions/navbar.php";
        echo '<div id="right-panel" class="right-panel">';
        include "moduls/inicio.php";
        echo "</div>";
        include "seccions/footer.php";
    }

}

?>


<a href="#" class="icon-whatsapp" style="display: inline;"><i class="fab fa-whatsapp"></i></a>
        <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="views/lib/easing/easing.min.js"></script>
        <script src="views/lib/owlcarousel/owl.carousel.min.js"></script>
        <script src="views/lib/tempusdominus/js/moment.min.js"></script>
        <script src="views/lib/tempusdominus/js/moment-timezone.min.js"></script>
        <script src="views/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>
        
        <!-- Contact Javascript File -->
        <script src="views/mail/jqBootstrapValidation.min.js"></script>
        <script src="Vmail/contact.js"></script>

        <!-- Template Javascript -->
        <script src="views/js/main.js"></script>
        <script>
  $(document).ready(function(){
    $('#exampleModal').modal('show');
  });

  // Actualizar el valor de la calificación seleccionada cuando se cambia el rango
  $('#calificacionRange').on('input', function() {
    $('#calificacionValor').text($(this).val());
  });
</script>
    </body>
</html>
