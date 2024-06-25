<?php
class ControladorCarrito {


    public static function ctrAgregarAlCarrito($usuario_id, $producto_id)
    {
            
        $respuesta1 = ModeloCarrito::mdlAgregarAlCarrito($usuario_id, $producto_id);
        if ($respuesta1 == "ok") {
            echo '<script>
                    window.location.href = "products";
                </script>';
        }
                    
    }
    

    public static function ctrMostrarTotalCarrito($usuario_id)
    {
        
        $respuesta = ModeloCarrito::mdlMostrarTotalCarrito($usuario_id);
        return $respuesta;
    }


    public static function ctrActualizarCantidadCarrito($id_producto, $id_usuario, $cantidad)
    {
        
        $respuesta = ModeloCarrito::mdlActualizarCantidadCarrito($id_producto, $id_usuario, $cantidad);
        if ($respuesta == "ok") {
            echo '<script>
                    window.location.href = "shopping";
                </script>';
        }
    }


    
    public static function ctrEliminarProductoCarrito($id_producto, $id_usuario)
    {
        
        $respuesta = ModeloCarrito::mdlEliminarProductoCarrito($id_producto, $id_usuario);
        if ($respuesta == "ok") {
            echo '<script>
                    window.location.href = "shopping";
                </script>';
        }
    }

    public static function ctrPaymentCarrito($email, $direccion, $card_number, $expiry_date, $cvc, $id_usuario, $total)
    {

        $respuesta = ModeloCarrito::mdlPaymentCarrito($email, $direccion, $card_number, $expiry_date, $cvc, $id_usuario, $total);
        if ($respuesta) {
            $respuesta1 = ModeloCarrito::mdlCrearPedido($email, $direccion, $id_usuario, $total, $respuesta);
            if ($respuesta1 == "ok") {
                
                echo '<script>
                        window.location.href = "pay_success";
                    </script>';
                
            }
        }
    }
    



}
?>