<?php

class ControladorHistorial
{
    /*=============================================
    MOSTRAR HISTORIAL CLINICO DE USUARIO
    =============================================*/

    public static function ctrMostrarHistorial($id_usuario)
    {

        $tabla = "TB_HISTORIAL_CLINICO";

        $respuesta = ModeloHistorial::mdlMostrarHistorial($tabla, $id_usuario);

        return $respuesta;
        

    }

    /*=============================================
    AGREGAR ROLES
    =============================================*/

    public static function ctrAgregarHistorial($id_usuario, $peso, $talla, $cintura, $abdomen, $cadera, $brazo, $espalda, $icm, $objetivo, $fecha, $observaciones)
    {

        $tabla = "TB_HISTORIAL_CLINICO";

        $respuesta = ModeloHistorial::mdlAgregarHistorial($tabla, $id_usuario,  $peso, $talla, $cintura, $abdomen, $cadera, $brazo, $espalda, $icm, $objetivo, $fecha, $observaciones);

        if ($respuesta == "ok") {
                            echo '<script>
                                    window.location.href = "historialC";
                                </script>';
                        }

    }

    /*=============================================
    ELIMINAR HISTORIAL CLINICO DE USUARIO
    =============================================*/

    public static function ctrEliminarHistorial ($id_historial)
    {

        $tabla = "TB_HISTORIAL_CLINICO";

        $respuesta = ModeloHistorial::mdlEliminarHistorial($tabla, $id_historial);

        if ($respuesta == "ok") {
                            echo '<script>
                                    window.location.href = "historialC";
                                </script>';
                        }
    }
    
    /*=============================================
    MODIFICAR HISTORIAL CLINICO DE USUARIO
    =============================================*/
    
    public static function ctrActualizarHistorial($id_historial, $peso, $talla, $cintura, $abdomen, $cadera, $brazo, $espalda, $icm, $objetivo, $fecha, $observaciones)
    {
        $tabla = "TB_HISTORIAL_CLINICO";
        $respuesta = ModeloHistorial::mdlActualizarHistorial($tabla, $id_historial, $peso, $talla, $cintura, $abdomen, $cadera, $brazo, $espalda, $icm, $objetivo, $fecha, $observaciones);
        if ($respuesta == "ok") {
                echo '<script>
                                    window.location.href = "historialC";
                                </script>';
        }
    }
    
        
   
}
















