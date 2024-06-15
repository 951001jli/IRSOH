<?php

class ControladorPerfil
{
    /*=============================================
    MOSTRAR PerfilS
    =============================================*/
    public static function ctrMostrarPerfil($id_perfil)
    {
        $tabla = "TB_USUARIOS";
        $respuesta = ModeloPerfil::mdlMostrarPerfil($tabla, $id_perfil);
        return $respuesta;
    }


    public static function ctrAgregarEstudios($id_perfil, $pdf)
    {
    
        if ($id_perfil) {
    
        if(($pdf["tmp_name"]) && !empty($pdf["tmp_name"])) {
            $directorio = "../ADMINISTRADOR/vistas/img/perfil/";
    
            // Nombre de archivo y ruta de almacenamiento
            $nombreArchivo = basename($pdf["name"]);
            $rutaAlmacenamiento = $directorio . $nombreArchivo;
        
            // Guardar la imagen en el directorio de almacenamiento
            if (move_uploaded_file($pdf["tmp_name"], $rutaAlmacenamiento)) {
                $respuesta = ModeloPerfil::mdlAgregarEstudios("TB_USUARIOS", $id_perfil, $rutaAlmacenamiento);
                if ($respuesta == "ok") {
                   
                        echo '<script>
                                window.location.href = "profile_user";
                            </script>';
                    
                }
    
            }
        } 
        
            }
    
        }


public static function ctrEditarPerfil($id_perfil, $nombre, $apellidos, $correo, $nacimiento, $telefono, $ocupacion, $genero, $foto)
{

    if ($id_perfil) {

    if(($foto["tmp_name"]) && !empty($foto["tmp_name"])) {
        $directorio = "../ADMINISTRADOR/vistas/img/perfil/";

        // Nombre de archivo y ruta de almacenamiento
        $nombreArchivo = basename($foto["name"]);
        $rutaAlmacenamiento = $directorio . $nombreArchivo;
    
        // Guardar la imagen en el directorio de almacenamiento
        if (move_uploaded_file($foto["tmp_name"], $rutaAlmacenamiento)) {
            $respuesta = ModeloPerfil::mdlEditarPerfilFoto("TB_USUARIOS", $id_perfil, $rutaAlmacenamiento);
            if ($respuesta == "ok") {
               
                $respuesta1 = ModeloPerfil::mdlEditarPerfil("TB_USUARIOS", $id_perfil, $nombre, $apellidos, $correo, $nacimiento, $telefono, $ocupacion, $genero);
                if ($respuesta1 == "ok") {
                    echo '<script>
                            window.location.href = "profile_user";
                        </script>';
                }
            }

            
            // echo "<a href=" . $rutaAlmacenamiento . ">Ir allá</a>";
        }
    } else {
        $respuesta1 = ModeloPerfil::mdlEditarPerfil("TB_USUARIOS", $id_perfil, $nombre, $apellidos, $correo, $nacimiento, $telefono, $ocupacion, $genero);
        if ($respuesta1 == "ok") {
            echo '<script>
                    window.location.href = "profile_user";
                </script>';
        }
    }
    
        }

    }


}



