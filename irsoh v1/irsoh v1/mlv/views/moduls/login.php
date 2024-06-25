<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="views/css/login.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <title>Iniciar sesión</title>
</head>

<body>
    <div class="container-form sign-in">
        <div>
            <a href="inicio">
                <button type="submit" style="color: black;"class="btn btn-success btn-flat m-b-30 m-t-30">Regresar</button>
            </a>
        </div>
        <div class="welcome-back">
            
            <div class="message">
                <h2 style="color: white;">Bienvenido.</h2>
                <p>Ingresa tu Correo Electrónico y Contraseña para poder acceder</p>
                <button class="sign-up-btn">Iniciar Sesion</button>
            </div>
        </div>
        <form class="formulario" method="POST">
            <p class="cuenta-gratis" style="color: white;">Crear Cuenta</p>
            <?php
                $login = new ControladorUsuario();
                $login->ctrRegistrarUsuario();
            ?>
            <input type="text" name="name" placeholder="Nombre">
            <input type="text" name="last_name" placeholder="Apellidos">
            <input type="email" name="email" placeholder="Correo electrónico">
            <input type="password" name="password" placeholder="Contraseña">
            <button type="submit" class="btn btn-success btn-flat m-b-30 m-t-30">Registrarse</button>
            

        </form>
    </div>
    <div class="container-form sign-up">

        <div class="message">
            <a href="inicio">
                <button type="submit" style="color: yellow;" class="btn btn-success btn-flat m-b-30 m-t-30">Regresar</button>
            </a>
        </div>

        <form class="formulario" method="POST">
            <h2 class="create-account" style="color: white;">Iniciar Sesion</h2>
            
            <p class="cuenta-gratis">¿Aun no tienes una Cuenta?</p>
            <?php
                $login->ctrIngresoUsuario();
            ?>
            <input type="email"id="ingemail" name="ingemail" placeholder="Correo electrónico">
            <input type="password" id="ingpassword" name="ingpassword"  placeholder="Contraseña">
            <button type="submit" class="btn btn-success btn-flat m-b-30 m-t-30">Ingresar</button>
            <!-- <input type="submit" value="Iniciar Sesion"> -->
            
        </form>
        <div class="welcome-back">
            <div class="message">
                <h2 style="color: white;">Bienvenido</h2>
                <p>Si aun no tienes cuenta, por favor registrese aquí</p>
                <button class="sign-in-btn" style="color: white;">Registrarse</button>
            </div>
        </div>
    </div>
    <script src="views/js/script.js"></script>
</body>

</html>