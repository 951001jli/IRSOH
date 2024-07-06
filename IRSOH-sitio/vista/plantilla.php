<?php

class Pages {
    
    public function plantilla($page) {
         
        $header = include 'vista/modulos/header.php';
        $navbar = include 'vista/modulos/navbar.php';
 
        $vistas = [
            'about'    => 'vista/about.php',
            'contact'  => 'vista/contact.php',
            'sesion'     => 'vista/inicioSesion.php',
            'default'  => 'vista/inicio.php',  
            'contrato'  => 'vista/contratanos.php' 
        ];
 
        echo include $vistas[$page] ?? $vistas['default'];
 
        $footer = include 'vista/modulos/footer.php';
    }
}



?>
