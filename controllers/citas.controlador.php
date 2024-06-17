<?php

class ControladorDetallesCita
{
    /*=============================================
    MOSTRAR TOTAL CITAS DE USUARIOS
    =============================================*/

    public static function ctrMostrarDetallesCita($id_cita)
    {

        $tabla = "TB_CITAS";

        $respuesta = ModelDetallesCita::mdlMostrarDestallesCita($tabla, $id_cita);

        return $respuesta;

    }
}