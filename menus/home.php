<?php
  $page_title = 'Home Page';
  require_once('includes/load.php');
  if (!$session->isUserLoggedIn(true)) { redirect('index.php', false);}
?>
<?php include_once('layouts/header.php'); ?>

<body>

<section id="hero" class="hero section dark-background">
    <img src="../menus/libs/images/hero-bg.jpg" alt="" data-aos="fade-in" class="">
    <div class="container" data-aos="fade-up" data-aos-delay="100">
        <h2>IRSOH</h2>
        <p>Salvando...<span class="typed" data-typed-items="vidas, animales, familias, historias">vidas!!</span><span class="typed-cursor typed-cursor--blink" aria-hidden="true"></span><span class="typed-cursor typed-cursor--blink" aria-hidden="true"></span></p>
    </div>
</section>


</body>
<?php include_once('layouts/footer.php'); ?>
