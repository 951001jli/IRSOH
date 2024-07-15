<?php
  $page_title = 'Home Page';
  require_once('includes/load.php');
  if (!$session->isUserLoggedIn(true)) { redirect('index.php', false);}
?>
<?php include_once('layouts/header.php'); ?>

<body>

<section id="hero" class="hero section dark-background">
 
    <div class="container" data-aos="fade-up" data-aos-delay="100">
   
<h1> 

Aquí se debe mostrar el plan contratado por el cliente y lo que se les ocurra
para que no se vea tan vacío.

</h1>
      </div>
</section>


</body>
<?php include_once('layouts/footer.php'); ?>
