<?php
  $page_title = 'Home Page';
  require_once('includes/load.php');
  if (!$session->isUserLoggedIn(true)) { redirect('index.php', false);}
?>
<?php include_once('layouts/header.php'); ?>
<body>
<div class="row">
  <div class="col-md-12">
</div>
<div class="col-md-12 mb-4">
  <div class="panel panel-default">
    <div class="panel-heading">
      <div class="panel-heading clearfix">
      <span style="display: block; text-align: center; color:#49708a; font-size: 24px; font-weight: bold;"><br>
    Comienza a disfrutar los beneficios de tu plan
        </span>
        </div>
      </div>
      <div class="panel-body">
        <div class="table-responsive"> <!-- Añadir esta línea -->
          <table class="table table-bordered">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h4 class="custom-text"> Gracias por elegirnos y adquirir uno de nuestros planes de renta. <br><br> Estamos comprometidos en ofrecerte una experiencia excepcional y asegurarnos de que <br> obtengas el máximo provecho de nuestro servicio.
                     <br> <br>Te invitamos a explorar todas las ventajas que te ofrecemos y a disfrutar de una experiencia <br>sin preocupaciones.
                     <span style="display: block; text-align: center; color: #49708a; font-size: 20px; font-weight: bold;"><br>
                     ¡Estamos emocionados de acompañarte en este nuevo viaje!
        </span>
                     
                    </h4>
                  </div>
                  <img src="../img/plan.jpeg" alt="" width="216" height="189" style="object-fit: cover; border-radius: 5px;">   
               </div>
              </div>
 </body>

 
<?php include_once('layouts/footer.php'); ?>
