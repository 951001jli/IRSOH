<?php

require_once "conexion.php";

class ModeloDetallesPedido
{


    public static function mdlMostrarDetallesPedido($id_perfil)
    {
        try {
            $stmt = Conexion::conectar()->prepare("SELECT P.*, PG.* FROM tb_pedidos P JOIN TB_PAGOS PG ON P.FK_PAGO = PG.ID_PAGO WHERE FK_USUARIO = $id_perfil ORDER BY ID_PEDIDO DESC");
            $stmt->execute();
            return $stmt->fetchAll();
        } catch (PDOException $e) {
            return [];
        }
    }



    public static function mdlMostrarDetallesPedidoProductos($id_pedido)
    {
        try {
            $stmt = Conexion::conectar()->prepare("SELECT P.*, DP.*, E.*, PR.* FROM tb_pedidos P JOIN tb_detalles_pedido DP ON DP.FK_PEDIDO = P.ID_PEDIDO JOIN tb_estatus E ON P.FK_ESTATUS_PEDIDO = E.ID_ESTATUS JOIN tb_productos PR ON PR.ID_PRODUCTO = DP.FK_PRODUCTO WHERE P.ID_PEDIDO = $id_pedido");
            $stmt->execute();
            return $stmt->fetchAll();
        } catch (PDOException $e) {
            return [];
        }
    }



    
}
