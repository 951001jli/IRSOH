<?php

require_once "conexion.php";

class ModeloCarrito
{


    public static function mdlAgregarAlCarrito($usuario_id, $producto_id)
    {
        try {
            $fecha_actual = date('Y-m-d');
            
            // Verificar si el producto ya está en el carrito
            $stmt = Conexion::conectar()->prepare("SELECT CANTIDAD FROM tb_carrito_compras WHERE FK_PRODUCTO = :ID_PRODUCTO AND FK_USUARIO = :ID_USUARIO");
            $stmt->bindParam(":ID_PRODUCTO", $producto_id, PDO::PARAM_STR);
            $stmt->bindParam(":ID_USUARIO", $usuario_id, PDO::PARAM_STR);
            $stmt->execute();
            $resultado = $stmt->fetch(PDO::FETCH_ASSOC);
    
            if ($resultado) {
                // Si el producto ya existe, actualizar la cantidad
                $cantidad_actual = $resultado['CANTIDAD'];
                $nueva_cantidad = $cantidad_actual + 1;
                $stmt = Conexion::conectar()->prepare("UPDATE tb_carrito_compras SET CANTIDAD = :NUEVA_CANTIDAD WHERE FK_PRODUCTO = :ID_PRODUCTO AND FK_USUARIO = :ID_USUARIO");
                $stmt->bindParam(":ID_PRODUCTO", $producto_id, PDO::PARAM_STR);
                $stmt->bindParam(":ID_USUARIO", $usuario_id, PDO::PARAM_STR);
                $stmt->bindParam(":NUEVA_CANTIDAD", $nueva_cantidad, PDO::PARAM_INT);
                $stmt->execute();
            } else {
                // Si el producto no existe, insertar un nuevo registro
                $stmt = Conexion::conectar()->prepare("INSERT INTO tb_carrito_compras (FECHA, CANTIDAD, FK_PRODUCTO, FK_USUARIO) VALUES (:FECHA, 1, :ID_PRODUCTO, :ID_USUARIO)");
                $stmt->bindParam(":ID_PRODUCTO", $producto_id, PDO::PARAM_STR);
                $stmt->bindParam(":ID_USUARIO", $usuario_id, PDO::PARAM_STR);
                $stmt->bindParam(":FECHA", $fecha_actual, PDO::PARAM_STR);
                $stmt->execute();
            }
    
            return "ok";
        } catch (PDOException $e) {
            return $e->getMessage(); // Devuelve el mensaje de error
        }
    }

    
    public static function mdlMostrarTotalCarrito($usuario_id)
    {
        try {
            $stmt = Conexion::conectar()->prepare("SELECT P.*, C.*, CC.CANTIDAD, (P.PRECIO * CC.CANTIDAD) AS PRECIO_TOTAL_PRODUCTO, 
                                                            T.TOTAL_COMPRA
                                                    FROM TB_PRODUCTOS P
                                                    JOIN TB_CATEGORIAS C ON P.FK_CATEGORIA = C.ID_CATEGORIA 
                                                    JOIN TB_CARRITO_COMPRAS CC ON P.ID_PRODUCTO = CC.FK_PRODUCTO
                                                    JOIN (
                                                        SELECT CC2.FK_USUARIO, SUM(P2.PRECIO * CC2.CANTIDAD) AS TOTAL_COMPRA
                                                        FROM TB_PRODUCTOS P2
                                                        JOIN TB_CARRITO_COMPRAS CC2 ON P2.ID_PRODUCTO = CC2.FK_PRODUCTO
                                                        WHERE P2.FK_ESTATUS_PRODUCTO = 1 AND CC2.FK_USUARIO = :ID_USUARIO
                                                        GROUP BY CC2.FK_USUARIO
                                                    ) T ON CC.FK_USUARIO = T.FK_USUARIO
                                                    WHERE CC.FK_USUARIO = :ID_USUARIO 
                                                    ORDER BY P.ID_PRODUCTO DESC;
                                                    ");
            $stmt->bindParam(":ID_USUARIO", $usuario_id, PDO::PARAM_STR);
            $stmt->execute();
            return $stmt->fetchAll();
        } catch (PDOException $e) {
            return [];
        }
    }




    public static function mdlActualizarCantidadCarrito($id_producto, $id_usuario, $cantidad)
    {
        try {
            $stmt = Conexion::conectar()->prepare("UPDATE TB_CARRITO_COMPRAS SET CANTIDAD = :CANTIDAD WHERE FK_PRODUCTO = :ID_PRODUCTO AND FK_USUARIO = :ID_USUARIO");

            $stmt->bindParam(":ID_PRODUCTO", $id_producto, PDO::PARAM_STR);
            $stmt->bindParam(":ID_USUARIO", $id_usuario, PDO::PARAM_STR);
            $stmt->bindParam(":CANTIDAD", $cantidad, PDO::PARAM_STR);
            if ($stmt->execute()) {
                return "ok";
            } else {
                return "error";
            }
        } catch (PDOException $e) {
            return "error";
        }
    }


    public static function mdlEliminarProductoCarrito($id_producto, $id_usuario)
    {
        try {
            $stmt = Conexion::conectar()->prepare("DELETE FROM TB_CARRITO_COMPRAS WHERE FK_PRODUCTO = :ID_PRODUCTO AND FK_USUARIO = :ID_USUARIO");
            $stmt->bindParam(":ID_PRODUCTO", $id_producto, PDO::PARAM_INT);
            $stmt->bindParam(":ID_USUARIO", $id_usuario, PDO::PARAM_INT);

            if ($stmt->execute()) {
                return "ok";
            } else {
                return "error";
            }
        } catch (PDOException $e) {
            return "error";
        }
    }


    public static function mdlPaymentCarrito($email, $direccion, $card_number, $expiry_date, $cvc, $id_usuario, $total)
    {
        try {

            $folio = mt_rand(1000000000, 9999999999);

            date_default_timezone_set('America/Mexico_City');
            $hora_actual = date("H:i:s");
            $fecha_actual = date('Y-m-d');
            
            $stmt = Conexion::conectar()->prepare("INSERT INTO TB_PAGOS (FECHA, HORA, FOLIO, METODO_PAGO, FK_ESTATUS_PAGO) 
                                                   VALUES (:FECHA, :HORA, :FOLIO, 'Tarjeta', 6)");
            $stmt->bindParam(":FECHA", $fecha_actual, PDO::PARAM_STR);
            $stmt->bindParam(":HORA", $hora_actual, PDO::PARAM_STR);
            $stmt->bindParam(":FOLIO", $folio, PDO::PARAM_STR);
            
            if ($stmt->execute()) {
                $id_pago = Conexion::conectar()->query("SELECT MAX(ID_PAGO) FROM TB_PAGOS;")->fetchColumn();

                // Llama a la función mdlCleanCarrito para limpiar el carrito
                return $id_pago;

            } else {
                return false;
            }
        } catch (PDOException $e) {
            return false; // Devuelve el mensaje de error
        }
    }

    public static function mdlCrearPedido($email, $direccion, $id_usuario, $total, $id_pago)
{
    try {
        date_default_timezone_set('America/Mexico_City');
        $hora_actual = date("H:i:s");
        $fecha_actual = date('Y-m-d');
        
        $stmt = Conexion::conectar()->prepare("INSERT INTO TB_PEDIDOS ( DIRECCION_ENVIO, TOTAL, FK_ESTATUS_PEDIDO, FK_USUARIO, FK_PAGO) 
                                               VALUES (:DIRECCION_ENVIO, :TOTAL, 3, :FK_USUARIO, :PAGO)");
        $stmt->bindParam(":DIRECCION_ENVIO", $direccion, PDO::PARAM_STR);
        $stmt->bindParam(":TOTAL", $total, PDO::PARAM_STR);
        $stmt->bindParam(":FK_USUARIO", $id_usuario, PDO::PARAM_STR);
        $stmt->bindParam(":PAGO", $id_pago, PDO::PARAM_STR);
        
        if ($stmt->execute()) {
            $id_pedido = Conexion::conectar()->query("SELECT MAX(ID_PEDIDO) FROM TB_PEDIDOS;")->fetchColumn();

            // Llama a la función mdlCleanCarrito para limpiar el carrito
            return self::mdlCleanCarrito($id_pedido, $id_usuario);
            
        } else {
            return "error";
        }
    } catch (PDOException $e) {
        return $e;
    }
}

public static function mdlCleanCarrito($id_pedido, $id_usuario)
{
    try {
        $stmt = Conexion::conectar()->prepare("SELECT CC.FK_PRODUCTO, CC.CANTIDAD, P.STOCK, P.FK_ESTATUS_PRODUCTO FROM TB_CARRITO_COMPRAS CC JOIN TB_PRODUCTOS P ON P.ID_PRODUCTO = CC.FK_PRODUCTO WHERE FK_USUARIO = :FK_USUARIO");
        $stmt->bindParam(":FK_USUARIO", $id_usuario, PDO::PARAM_INT);
        $stmt->execute();
        $carrito = $stmt->fetchAll(PDO::FETCH_ASSOC);
        
        // Inserta los detalles del pedido en TB_DETALLES_PEDIDO
        foreach ($carrito as $item) {
            $fk_producto = $item['FK_PRODUCTO'];
            $cantidad_producto = $item['CANTIDAD'];
            $stock = $item['STOCK'];
            $estatus = $item['FK_ESTATUS_PRODUCTO'];
            if($stock > 0 && $estatus == 1) {
                $stmt = Conexion::conectar()->prepare("INSERT INTO TB_DETALLES_PEDIDO (FK_PRODUCTO, NUMERO_PRODUCTOS, FK_PEDIDO) 
                                                   VALUES (:FK_PRODUCTO, :CANTIDAD_PRODUCTO, :FK_PEDIDO)");
                $stmt->bindParam(":FK_PRODUCTO", $fk_producto, PDO::PARAM_INT);
                $stmt->bindParam(":CANTIDAD_PRODUCTO", $cantidad_producto, PDO::PARAM_INT);
                $stmt->bindParam(":FK_PEDIDO", $id_pedido, PDO::PARAM_INT);
                $stmt->execute();
            }
        }
        
        // Limpia el carrito eliminando los registros asociados al usuario
        $stmt = Conexion::conectar()->prepare("DELETE FROM TB_CARRITO_COMPRAS WHERE FK_USUARIO = :FK_USUARIO");
        $stmt->bindParam(":FK_USUARIO", $id_usuario, PDO::PARAM_INT);
        if($stmt->execute()) {
            return "ok";
        } else {
            return "Error";
        }
        
        
    } catch (PDOException $e) {
        return $e;
    }
}

}



?>