<?php

class DetallesPedido
{
    /*=============================================
    MOSTRAR PerfilS
    =============================================*/
    public static function ctrMostrarDetallesPedido($id_perfil)
    {
        $respuesta = ModeloDetallesPedido::mdlMostrarDetallesPedido($id_perfil);
        return $respuesta;
    }


    public static function ctrMostrarDetallesPedidoProductos($id_pedido)
    {
        $respuesta = ModeloDetallesPedido::mdlMostrarDetallesPedidoProductos($id_pedido);
        return $respuesta;
    }


}



