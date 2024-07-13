<?php
session_start();

if(!isset($_SESSION['usuario'])){                          //si no existe la sesion usuario ,  muestra lo siguiente
    echo'
    <script>
    alert("por favor debes iniciar sesión");
    window.location = "index.php";
    </script>
    ';
    
    session_destroy();               
    die();                                                  //detiene el codigo
   
} 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Holaaa</title>
</head>
<body>
    <h1>Bienvenido a mi mundo!</h1>
<a href="php/cerrar_sesion.php">Cerrar sesion</a>

</body>
</html>