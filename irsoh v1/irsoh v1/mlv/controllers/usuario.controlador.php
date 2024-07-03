<?php

class ControladorUsuario
{

    public function ctrIngresoUsuario()
    {
        if (isset($_POST["ingemail"])) {

            if (preg_match('/^[^0-9][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[@][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{2,4}$/', $_POST["ingemail"]) &&
                preg_match('/^[a-zA-Z0-9]+$/', $_POST["ingpassword"])) {

                // $encriptar = crypt($_POST["ingpassword"], '$2a$07$asxx54ahjppf45sd87a5a4dDDGsystemdev$');
                $encriptar = $_POST["ingpassword"];
                $tabla = "tb_usuarios";
                $item  = "CORREO";
                $valor = $_POST["ingemail"];

                $respuesta = ModeloUsuario::mdlMostrarUsuario($tabla, $item, $valor);
                
                if ($respuesta["CORREO"] == $_POST["ingemail"] && $respuesta["CONTRASENA"] == $encriptar) {
                    if ($respuesta["FK_ESTATUS"] == 1) {

                        $_SESSION["validarSesionBackendUsuario"] = "ok";
                        $_SESSION["id"]                   = $respuesta["ID_USUARIO"];
                        $_SESSION["nombre"]               = $respuesta["NOMBRE_USUARIO"] . " " . $respuesta["APELLIDOS_USUARIO"];
                        $_SESSION["foto"]                 = $respuesta["FOTO_PERFIL"];
                        $_SESSION["email"]                = $respuesta["CORREO"];
                        $_SESSION["password"]             = $respuesta["CONTRASENA"];
                        $_SESSION["perfil"]               = $respuesta["FK_ROL"];


                        echo '<script>

                            window.location = "inicio";

                        </script>';

                    } else {

                        echo '<br>
                        <div class="alert alert-warning">Este usuario aún no está activado</div>';

                    }

                } else {

                    echo '<br>
                    <div class="alert alert-danger">Error al ingresar vuelva a intentarlo</div>';

                }

            }
        }
    }



    public function ctrRegistrarUsuario()
    {
        if (isset($_POST["email"])) {

            if (preg_match('/^[^0-9][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[@][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{2,4}$/', $_POST["email"]) &&
                preg_match('/^[a-zA-Z0-9]+$/', $_POST["password"])) {

                // $encriptar = crypt($_POST["ingpassword"], '$2a$07$asxx54ahjppf45sd87a5a4dDDGsystemdev$');
                $encriptar = $_POST["password"];
                $valor = $_POST["email"];
                $nombre = $_POST["name"];
                $apellidos = $_POST["last_name"];
                $tabla = "tb_usuarios";

                $respuesta = ModeloUsuario::mdlRegistrarUsuario($tabla, $valor, $encriptar, $nombre, $apellidos);
                
                if ($respuesta["CORREO"] == $_POST["email"] && $respuesta["CONTRASENA"] == $encriptar) {
                    if ($respuesta["FK_ESTATUS"] == 1) {

                        $_SESSION["validarSesionBackend"] = "ok";
                        $_SESSION["id"]                   = $respuesta["ID_USUARIO"];
                        $_SESSION["nombre"]               = $respuesta["NOMBRE_USUARIO"] . " " . $respuesta["APELLIDOS_USUARIO"];
                        $_SESSION["foto"]                 = $respuesta["FOTO_PERFIL"];
                        $_SESSION["email"]                = $respuesta["CORREO"];
                        $_SESSION["password"]             = $respuesta["CONTRASENA"];
                        $_SESSION["perfil"]               = $respuesta["FK_ROL"];


                        echo '<script>

                            window.location = "inicio";

                        </script>';

                    } else {

                        echo '<br>
                        <div class="alert alert-warning">Este usuario aún no está activado</div>';

                    }

                } else {

                    echo '<br>
                    <div class="alert alert-danger">Error al ingresar vuelva a intentarlo</div>';

                }

            }
        }
    }

    /*=============================================
    MOSTRAR Usuario
    =============================================*/

    public static function ctrMostrarUsuario($item, $valor)
    {

        $tabla = "administrador";

        $respuesta = ModeloUsuario::mdlMostrarUsuario($tabla, $item, $valor);

        return $respuesta;
    }

/*=============================================
REGISTRO DE NUEVO ADMINISTRADOR
=============================================*/

    public static function ctrCrearPerfil()
    {

        if (isset($_POST["nuevoPerfil"])) {

            if (preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["nuevoNombre"]) &&
                preg_match('/^[a-zA-Z0-9]+$/', $_POST["nuevoPassword"])) {

                /*=============================================
                VALIDAR IMAGEN
                =============================================*/

                $ruta = "";

                if (isset($_FILES["nuevaFoto"]["tmp_name"]) && !empty($_FILES["nuevaFoto"]["tmp_name"])) {

                    list($ancho, $alto) = getimagesize($_FILES["nuevaFoto"]["tmp_name"]);

                    $nuevoAncho = 500;
                    $nuevoAlto  = 500;

                    /*=============================================
                    DE ACUERDO AL TIPO DE IMAGEN APLICAMOS LAS FUNCIONES POR DEFECTO DE PHP
                    =============================================*/

                    if ($_FILES["nuevaFoto"]["type"] == "image/jpeg") {

                        /*=============================================
                        GUARDAMOS LA IMAGEN EN EL DIRECTORIO
                        =============================================*/

                        $aleatorio = mt_rand(100, 999);

                        $ruta = "vistas/img/perfil/" . $aleatorio . ".jpg";

                        $origen = imagecreatefromjpeg($_FILES["nuevaFoto"]["tmp_name"]);

                        $destino = imagecreatetruecolor($nuevoAncho, $nuevoAlto);

                        imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevoAncho, $nuevoAlto, $ancho, $alto);

                        imagejpeg($destino, $ruta);

                    }

                    if ($_FILES["nuevaFoto"]["type"] == "image/png") {

                        /*=============================================
                        GUARDAMOS LA IMAGEN EN EL DIRECTORIO
                        =============================================*/

                        $aleatorio = mt_rand(100, 999);

                        $ruta = "vistas/img/perfil/" . $aleatorio . ".png";

                        $origen = imagecreatefrompng($_FILES["nuevaFoto"]["tmp_name"]);

                        $destino = imagecreatetruecolor($nuevoAncho, $nuevoAlto);

                        imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevoAncho, $nuevoAlto, $ancho, $alto);

                        imagepng($destino, $ruta);

                    }

                }

                $tabla = "administrador";

                $encriptar = crypt($_POST["nuevoPassword"], '$2a$07$asxx54ahjppf45sd87a5a4dDDGsystemdev$');

                $datos = array("nombre" => $_POST["nuevoNombre"],
                    "email"                 => $_POST["nuevoEmail"],
                    "password"              => $encriptar,
                    "perfil"                => $_POST["nuevoPerfil"],
                    "foto"                  => $ruta,
                    "estado"                => 1);

                $respuesta = ModeloUsuario::mdlIngresarPerfil($tabla, $datos);

                if ($respuesta == "ok") {

                    echo '<script>

                    swal({

                        type: "success",
                        title: "¡El perfil ha sido guardado correctamente!",
                        showConfirmButton: true,
                        confirmButtonText: "Cerrar"

                    }).then(function(result){

                        if(result.value){

                            window.location = "perfil";

                        }

                    });


                    </script>';

                }

            } else {

                echo '<script>

                    swal({

                        type: "error",
                        title: "¡El perfil no puede ir vacío o llevar caracteres especiales!",
                        showConfirmButton: true,
                        confirmButtonText: "Cerrar"

                    }).then(function(result){

                        if(result.value){

                            window.location = "perfiles";

                        }

                    });


                </script>';

            }

        }

    }

/*=============================================
EDITAR PERFIL
=============================================*/

    public static function ctrEditarPerfil()
    {

        if (isset($_POST["idPerfil"])) {

            if (preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["editarNombre"])) {

                /*=============================================
                VALIDAR IMAGEN
                =============================================*/

                $ruta = $_POST["fotoActual"];

                if (isset($_FILES["editarFoto"]["tmp_name"]) && !empty($_FILES["editarFoto"]["tmp_name"])) {

                    list($ancho, $alto) = getimagesize($_FILES["editarFoto"]["tmp_name"]);

                    $nuevoAncho = 500;
                    $nuevoAlto  = 500;

                    /*=============================================
                    PRIMERO PREGUNTAMOS SI EXISTE OTRA IMAGEN EN LA BD
                    =============================================*/

                    if (!empty($_POST["fotoActual"])) {

                        unlink($_POST["fotoActual"]);

                    } else {

                        mkdir($directorio, 0755);

                    }

                    /*=============================================
                    DE ACUERDO AL TIPO DE IMAGEN APLICAMOS LAS FUNCIONES POR DEFECTO DE PHP
                    =============================================*/

                    if ($_FILES["editarFoto"]["type"] == "image/jpeg") {

                        /*=============================================
                        GUARDAMOS LA IMAGEN EN EL DIRECTORIO
                        =============================================*/

                        $aleatorio = mt_rand(100, 999);

                        $ruta = "vistas/img/perfil/" . $aleatorio . ".jpg";

                        $origen = imagecreatefromjpeg($_FILES["editarFoto"]["tmp_name"]);

                        $destino = imagecreatetruecolor($nuevoAncho, $nuevoAlto);

                        imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevoAncho, $nuevoAlto, $ancho, $alto);

                        imagejpeg($destino, $ruta);

                    }

                    if ($_FILES["editarFoto"]["type"] == "image/png") {

                        /*=============================================
                        GUARDAMOS LA IMAGEN EN EL DIRECTORIO
                        =============================================*/

                        $aleatorio = mt_rand(100, 999);

                        $ruta = "vistas/img/perfil/" . $aleatorio . ".png";

                        $origen = imagecreatefrompng($_FILES["editarFoto"]["tmp_name"]);

                        $destino = imagecreatetruecolor($nuevoAncho, $nuevoAlto);

                        imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevoAncho, $nuevoAlto, $ancho, $alto);

                        imagepng($destino, $ruta);

                    }

                }

                $tabla = "administrador";

                if ($_POST["editarPassword"] != "") {

                    if (preg_match('/^[a-zA-Z0-9]+$/', $_POST["editarPassword"])) {

                        $encriptar = crypt($_POST["editarPassword"], '$2a$07$asxx54ahjppf45sd87a5a4dDDGsystemdev$');

                    } else {

                        echo '<script>

                                swal({
                                      type: "error",
                                      title: "¡La contraseña no puede ir vacía o llevar caracteres especiales!",
                                      showConfirmButton: true,
                                      confirmButtonText: "Cerrar"
                                      }).then(function(result) {
                                        if (result.value) {

                                        window.location = "administrador";

                                        }
                                    })

                            </script>';

                    }

                } else {

                    $encriptar = $_POST["passwordActual"];

                }

                $datos = array("id" => $_POST["idPerfil"],
                    "nombre"            => $_POST["editarNombre"],
                    "email"             => $_POST["editarEmail"],
                    "password"          => $encriptar,
                    "perfil"            => $_POST["editarPerfil"],
                    "foto"              => $ruta);

                $respuesta = ModeloUsuario::mdlEditarPerfil($tabla, $datos);

                if ($respuesta == "ok") {

                    echo '<script>

                    swal({
                          type: "success",
                          title: "El perfil ha sido editado correctamente",
                          showConfirmButton: true,
                          confirmButtonText: "Cerrar"
                          }).then(function(result) {
                                    if (result.value) {

                                    window.location = "perfil";

                                    }
                                })

                    </script>';

                }

            } else {

                echo '<script>

                    swal({
                          type: "error",
                          title: "¡El nombre no puede ir vacío o llevar caracteres especiales!",
                          showConfirmButton: true,
                          confirmButtonText: "Cerrar"
                          }).then(function(result) {
                            if (result.value) {

                            window.location = "administrador";

                            }
                        })

                </script>';

            }

        }

    }

    /*=============================================
    ELIMINAR PERFIL
    =============================================*/

    public static function ctrEliminarPerfil()
    {

        if (isset($_GET["idPerfil"])) {

            $tabla = "administrador";
            $datos = $_GET["idPerfil"];

            if ($_GET["fotoPerfil"] != "") {

                unlink($_GET["fotoPerfil"]);

            }

            $respuesta = ModeloUsuario::mdlEliminarPerfil($tabla, $datos);

            if ($respuesta == "ok") {

                echo '<script>

                swal({
                      type: "success",
                      title: "El perfil ha sido borrado correctamente",
                      showConfirmButton: true,
                      confirmButtonText: "Cerrar",
                      closeOnConfirm: false
                      }).then(function(result) {
                                if (result.value) {

                                window.location = "perfil";

                                }
                            })

                </script>';

            }

        }

    }

}
