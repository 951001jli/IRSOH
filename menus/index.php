
<?php
  ob_start();
  require_once('includes/load.php');
  if($session->isUserLoggedIn(true)) { redirect('home.php', false);}
?>
 

 <style>
  body {

    background-image: url(../img/bg4.jpg);
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center;
    background-attachment: fixed;
    font-family: 'Arial', sans-serif;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
  }
  
  .login-page {
    background-color: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
    width: 300px;
    text-align: center;
  }

  .login-page h1 {
    color: #007bff;
    font-size: 24px;
    margin-bottom: 10px;
  }

  .login-page p {
    color: #007bff;
    margin-bottom: 20px;
  }

  .form-group {
    margin-bottom: 15px;
  }

  .form-control {
    width: 100%;
    padding: 10px;
    border: 1px solid #007bff;
    border-radius: 4px;
    margin-bottom: 10px;
  }

  .btn-info {
    background-color: #007bff;
    border: none;
    padding: 10px 20px;
    color: #fff;
    border-radius: 4px;
    cursor: pointer;
  }

  .btn-info:hover {
    background-color: #0056b3;
  }
</style>


<div  >
<div class="login-page">
    <div class="text-center">
       <h1>Bienvenidos</h1>
       <p>Iniciar sesión</p>
     </div>

     
     <?php echo display_msg($msg); ?>


    <form method="post" action="auth.php" class="clearfix">
    <div class="form-group">
              <label for="username" class="control-label"> Usuario </label>
              <input type="name" class="form-control" name="username" placeholder="Usuario">
        </div>

        <div class="form-group">
            <label for="Password" class="control-label">Contraseña</label>
            <input type="password" name= "password" class="form-control" placeholder="Contraseña">
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-info pull-right">Entrar</button>
        </div>
    </form>
</div>

</div>
</div>