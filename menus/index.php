<?php
ob_start();
require_once('includes/load.php');
if($session->isUserLoggedIn(true)) { redirect('admin.php', false);}
?>
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

<style>
  body {
    background-image: url(../img/sismo4.jpg);
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center;
    background-attachment: fixed;
    font-family: 'Arial', sans-serif;
    margin: 0;
  }

  .navbar {
    margin-bottom: 10px; /* Space between navbar and content */
  }

  .login-page {
    background-color: #ffffff95;
    padding: 20px;
    border-radius: 25px;
    box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
    width: 300px;
    margin: auto; /* Center the login box */
    text-align: center;
  }

  .login-page h1 {
    color: #007bff;
    font-size: 30px;
    margin-bottom: 5px;
  }

  .login-page p {
    color: #007bff;
    margin-bottom: 20px;
  }

  .form-control {
    width: 100%;
    padding: 10px; 
    border-radius: 40px;
    margin-bottom: 20px;
  }

  .btn-info {
    background-color: #007bff;
    border: none;
    padding: 10px 20px;
    color: #fff;
    border-radius: 25px;
    cursor: pointer;
  }

  .btn-info:hover {
    background-color: #0056b3;
  }


  

          

</style>

<body>

    <!-- Nav Bar Start -->
    <div class="navbar navbar-expand-lg bg-light navbar-light fixed-top">
        <div class="container-fluid">
            <a href="#" class="navbar-brand">IR<span>SOH</span></a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                <div class="navbar-nav ml-auto">
                <a href="http://localhost/irsoh/index.php" class="nav-item nav-link">Inicio</a>


                    <a href="http://localhost/irsoh/about.php" class="nav-item nav-link">Nosotros</a>
                    <a href="http://localhost/irsoh/contact.php" class="nav-item nav-link">Contacto</a>
                    <a href="http://localhost/irsoh/contratanos.php" class="nav-item nav-link highlighted-link">Quiero el servicio</a>
                
                </div>
            </div>
        </div>
    </div>

    <div class="login-page" style="margin-top: 100px;"> <!-- Add margin to avoid overlap with navbar -->
        <div class="text-center">
            <h1>Bienvenido</h1>
            <p>Iniciar sesión</p>
        </div>

        <?php echo display_msg($msg); ?>

        <form method="post" action="auth.php" class="clearfix">
            <div class="form-group">
                <label for="username" class="control-label">Usuario</label>
                <input type="text" class="form-control" name="username" placeholder="Usuario">
            </div>

            <div class="form-group">
                <label for="Password" class="control-label">Contraseña</label>
                <input type="password" name="password" class="form-control" placeholder="Contraseña">
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-info pull-right">Entrar</button>
            </div>
        </form>
    </div>

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