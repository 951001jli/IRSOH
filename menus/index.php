<?php
  ob_start();
  require_once('includes/load.php');
  if($session->isUserLoggedIn(true)) { redirect('home.php', false);}
?>
<?php include_once('layouts/header.php'); ?>
<div class="login-page">
    <div class="text-center">
       <h1>Bienvenido</h1>
       <p>Iniciar sesión </p>
     </div>
     <?php echo display_msg($msg); ?>
      <form method="post" action="auth.php" class="clearfix">
        <div class="form-group">
              <label for="username" class="control-label">Usario</label>
              <input type="name" class="form-control" name="username" placeholder="Usario">
        </div>
        <div class="form-group">
            <label for="Password" class="control-label">Contraseña</label>
            <input type="password" name= "password" class="form-control" placeholder="Contraseña">
        </div>
        <div class="form-group">
                <button type="submit" class="btn btn-info  pull-right">Entrar</button>
        </div>
    </form>
</div>
<?php include_once('layouts/footer.php'); ?>

////////////////////////////////////////////////


    
 

<link rel="stylesheet" href="menus/libs/css/estilo.css">
</head>
<body>
<style>
  *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    text-decoration: none;
    font-family: 'Roboto', sans-serif;
}

body{
    background-image: url(../img/bg4.jpg);
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center;
    background-attachment: fixed;
}

main{
    width: 100%;
    padding: 20px;
    margin: auto;
    margin-top: 100px;
}

.contenedor__todo{
    width: 100%;
    max-width: 800px;
    margin: auto;
    position: relative;
}

.caja__trasera{
    width: 100%;
    padding: 10px 20px;
    display: flex;
    justify-content: center;
    -webkit-backdrop-filter: blur(10px);
    backdrop-filter: blur(10px);
    background-color: rgba(0, 128, 255, 0.5);

}

.caja__trasera div{
    margin: 100px 40px;
    color: white;
    transition: all 500ms;
}


.caja__trasera div p,
.caja__trasera button{
    margin-top: 30px;
}

.caja__trasera div h3{
    font-weight: 400;
    font-size: 26px;
}

.caja__trasera div p{
    font-size: 16px;
    font-weight: 300;
}

.caja__trasera button{
    padding: 10px 40px;
    border: 2px solid #fff;
    font-size: 14px;
    background: transparent;
    font-weight: 600;
    cursor: pointer;
    color: white;
    outline: none;
    transition: all 300ms;
}

.caja__trasera button:hover{
    background: #fff;
    color: #46A2FD;
}

/*Formularios*/

.contenedor__login-register{
    display: flex;
    align-items: center;
    width: 100%;
    max-width: 380px;
    position: relative;
    top: -185px;
    left: 10px;

    /*La transicion va despues del codigo JS*/
    transition: left 500ms cubic-bezier(0.175, 0.885, 0.320, 1.275);
}

.contenedor__login-register form{
    width: 100%;
    padding: 80px 20px;
    background: white;
    position: absolute;
    border-radius: 20px;
}

.contenedor__login-register form h2{
    font-size: 30px;
    text-align: center;
    margin-bottom: 20px;
    color: #46A2FD;
}

.contenedor__login-register form input{
    width: 100%;
    margin-top: 20px;
    padding: 10px;
    border: none;
    background: #F2F2F2;
    font-size: 16px;
    outline: none;
}

.contenedor__login-register form button{
    padding: 10px 40px;
    margin-top: 40px;
    border: none;
    font-size: 14px;
    background: #46A2FD;
    font-weight: 600;
    cursor: pointer;
    color: white;
    outline: none;
}




.formulario__login{
    opacity: 1;
    display: block;
}
.formulario__register{
    display: none;
}



@media screen and (max-width: 850px){

    main{
        margin-top: 50px;
    }

    .caja__trasera{
        max-width: 350px;
        height: 300px;
        flex-direction: column;
        margin: auto;
    }

    .caja__trasera div{
        margin: 0px;
        position: absolute;
    }


    /*Formularios*/

    .contenedor__login-register{
        top: -10px;
        left: -5px;
        margin: auto;
    }

    .contenedor__login-register form{
        position: relative;
    }
}
</style>
        <main>

            <div class="contenedor__todo">
                <div class="caja__trasera">
                    <div class="caja__trasera-login">
                        <h3>Bienvenido inica ssesion</h3>
                        <p>Inicia sesión</p>
                        <button id="btn__iniciar-sesion">Iniciar Sesión</button>
                    </div>
                    <div class="caja__trasera-register">
                        <h3>Registra tu cuenta</h3>
                        <p>Regístrate para que puedas iniciar sesión</p>
                        <button id="btn__registrarse">Regístrarse</button>
                    </div>
                </div>

                <!--Formulario de Login -->
                <div class="contenedor__login-register">
                    <!--Login-->
                    <form action="php/login_usuario_be.php" method = "POST" class="formulario__login">
                        <h2>Iniciar Sesión</h2>
                        <input type="text" placeholder="Correo Electronico" name = "correo">
                        <input type="password" placeholder="Contraseña" name = "contrasena">
                        <button>Entrar</button>
                    </form>

                    <!--Register-->
                    <form action="php/registro_usuario_be.php" method = "POST" class="formulario__register">
                        <h2>Regístrarse</h2>
                        <input type="text" placeholder="Nombre completo" name="nombre_completo">
                        <input type="text" placeholder="Correo Electronico" name="correo">
                        <input type="text" placeholder="Usuario" name="usuario">
                        <input type="password" placeholder="Contraseña" name="contrasena">
                        <button>Regístrarse</button>
                    </form>
                </div>
            </div>

        </main>
</body>

