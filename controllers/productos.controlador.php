<?php

class ControladorProductos
{
    /*=============================================
    MOSTRAR PRODUCTOS
    =============================================*/
    public static function ctrMostrarProductos($item, $valor)
    {
        $tabla = "tb_productos";
        $respuesta = ModeloProductos::mdlMostrarProductos($tabla, $item, $valor);
        return $respuesta;
    }

    /*=============================================
    MOSTRAR TOTAL PRODUCTOS
    =============================================*/
    public static function ctrMostrarTotalProductos()
    {
        $tabla = "tb_productos";
        $respuesta = ModeloProductos::mdlMostrarTotalProductos($tabla);
        return $respuesta;
    }

    public static function ctrCrearProducto($nombre, $categoria, $descripcion, $tamano, $stock, $precio, $foto)
    {
        if ($nombre) {

            if(($foto["tmp_name"]) && !empty($foto["tmp_name"])) {
                $directorio = "vistas/img/productos/";
        
                // Nombre de archivo y ruta de almacenamiento
                $nombreArchivo = basename($foto["name"]);
                $rutaAlmacenamiento = $directorio . $nombreArchivo;
            
                // Guardar la imagen en el directorio de almacenamiento
                if (move_uploaded_file($foto["tmp_name"], $rutaAlmacenamiento)) {
                    
                       
                        $respuesta1 = ModeloProductos::mdlIngresarProducto("tb_productos", $nombre, $categoria, $descripcion, $tamano, $stock, $precio, $rutaAlmacenamiento);
                        if ($respuesta1 == "ok") {
                            echo '<script>
                                    window.location.href = "productos";
                                </script>';
                        }
                    
        
                    
                    // echo "<a href=" . $rutaAlmacenamiento . ">Ir allá</a>";
                }
            } else {
                echo '<script>
                            window.location.href = "productos";
                    </script>';
            }
        
        }

    }

public static function ctrEditarProducto($id_producto, $nombre, $categoria, $descripcion, $tamano, $stock, $precio, $foto)
{

    if ($id_producto) {

    if(($foto["tmp_name"]) && !empty($foto["tmp_name"])) {
        $directorio = "vistas/img/productos/";

        // Nombre de archivo y ruta de almacenamiento
        $nombreArchivo = basename($foto["name"]);
        $rutaAlmacenamiento = $directorio . $nombreArchivo;
    
        // Guardar la imagen en el directorio de almacenamiento
        if (move_uploaded_file($foto["tmp_name"], $rutaAlmacenamiento)) {
            $respuesta = ModeloProductos::mdlEditarProductoFoto("tb_productos", $id_producto, $rutaAlmacenamiento);
            if ($respuesta == "ok") {
               
                $respuesta1 = ModeloProductos::mdlEditarProducto("tb_productos", $id_producto, $nombre, $categoria, $descripcion, $tamano, $stock, $precio);
                if ($respuesta1 == "ok") {
                    echo '<script>
                            window.location.href = "productos";
                        </script>';
                }
            }

            
            // echo "<a href=" . $rutaAlmacenamiento . ">Ir allá</a>";
        }
    } else {
        $respuesta1 = ModeloProductos::mdlEditarProducto("tb_productos", $id_producto, $nombre, $categoria, $descripcion, $tamano, $stock, $precio);
        if ($respuesta1 == "ok") {
            echo '<script>
                    window.location.href = "productos";
                </script>';
        }
    }
    
        // if (preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $nombre) && preg_match('/^[,\\.\\a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', htmlspecialchars($descripcion))) {

        //     $rutaFoto = "../";

        //     if (isset($foto["foto"]["tmp_name"]) && !empty($datos["foto"]["tmp_name"])) {
        //         // Construir la ruta de la nueva imagen
        //         $rutaNuevaImagen = "vistas/img/productos/" . uniqid() . "." . pathinfo($foto["foto"]["name"], PATHINFO_EXTENSION);

        //         // Mover la imagen al nuevo destino
        //         move_uploaded_file($foto["foto"]["tmp_name"], $rutaNuevaImagen);

        //         // Eliminar la imagen antigua si existe (ten en cuenta la seguridad al eliminar archivos)
        //         if (file_exists($rutaFoto) && $foto != "vistas/img/productos/default/default.jpg") {
        //             unlink($rutaFoto);
        //         }

        //         // Actualizar la base de datos con la nueva ruta
        //         $datosProducto = array(
        //             "id_producto"  => $id_producto,
        //             "FK_CATEGORIA" => $id_producto,
        //             "RUTA_IMAGEN"  => $id_producto,
        //             // Otros campos...
        //         );

        //         $respuesta = 0;

        //         //$respuesta = ModeloProductos::mdlEditarProducto("tb_productos", $datosProducto);

        //         return $respuesta;
        //     }
        //     } else {

        //         echo '<script>

        //             swal({
        //                   type: "error",
        //                   title: "¡El nombre del producto no puede ir vacío o llevar caracteres especiales!",
        //                   showConfirmButton: true,
        //                   confirmButtonText: "Cerrar"
        //                   }).then(function(result){
        //                     if (result.value) {

        //                     window.location = "productos";

        //                     }
        //                 })

        //           </script>';

        //     }

        }

    }

    /*=============================================
    ELIMINAR PRODUCTO
    =============================================*/
    public static function ctrEliminarProducto($id_producto)
    {
        $tabla = "tb_productos";
        $respuesta = ModeloProductos::mdlEliminarProducto($tabla, $id_producto);
        if ($respuesta == "ok") {
            echo '<script>
                    window.location.href = "productos";
                </script>';
        }
    }


    public static function ctrBuscarProducto($busqueda)
    {
        $respuesta = ModeloProductos::mdlBuscarProducto($busqueda);
        return $respuesta;
    }
}



