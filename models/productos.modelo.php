<?php

require_once "conexion.php";

class ModeloProductos
{
    /*=============================================
    MOSTRAR PRODUCTOS
    =============================================*/
    public static function mdlMostrarProductos($tabla, $item = null, $valor = null)
    {
        try {
            if ($item !== null) {
                $stmt = Conexion::conectar()->prepare("SELECT P.*, C.* FROM $tabla P
                                                        JOIN TB_CATEGORIAS C ON P.FK_CATEGORIA = C.ID_CATEGORIA WHERE $item = :valor");
                $stmt->bindParam(":valor", $valor, PDO::PARAM_STR);
            } else {
                $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla ORDER BY ID_PRODUCTO DESC");
            }

            $stmt->execute();

            return $stmt->fetchAll();
        } catch (PDOException $e) {
            return [];
        }
    }

    /*=============================================
    MOSTRAR EL TOTAL DE PRODUCTO
    =============================================*/
    public static function mdlMostrarTotalProductos($tabla)
    {
        try {
            $stmt = Conexion::conectar()->prepare("SELECT P.*, C.* FROM $tabla P
                                                   JOIN TB_CATEGORIAS C ON P.FK_CATEGORIA = C.ID_CATEGORIA ORDER BY ID_PRODUCTO DESC");
            $stmt->execute();
            return $stmt->fetchAll();
        } catch (PDOException $e) {
            return [];
        }
    }


    public static function mdlBuscarProducto($busqueda)
    {
        try {
            $stmt = Conexion::conectar()->prepare("SELECT * FROM tb_productos WHERE NOMBRE_PRODUCTO LIKE '%$busqueda%' OR DESCRIPCION LIKE '%$busqueda%'");
            $stmt->execute();

            return $stmt->fetchAll();
        } catch (PDOException $e) {
            return [];
        }
    }


    public static function mdlIngresarProducto($tabla, $nombre, $categoria, $descripcion, $tamano, $stock, $precio, $rutaAlmacenamiento)
    {
        try {
            $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(NOMBRE_PRODUCTO, DESCRIPCION, PRECIO, TAMANO, STOCK, FOTO, FK_CATEGORIA) 
                                                   VALUES (:NOMBRE, :DESCRIPCION, :PRECIO, :TAMANO, :STOCK, :FOTO, :FK_CATEGORIA)");
    
            $stmt->bindParam(":NOMBRE", $nombre, PDO::PARAM_STR);
            $stmt->bindParam(":DESCRIPCION", $descripcion, PDO::PARAM_STR);
            $stmt->bindParam(":PRECIO", $precio, PDO::PARAM_STR);
            $stmt->bindParam(":TAMANO", $tamano, PDO::PARAM_STR);
            $stmt->bindParam(":STOCK", $stock, PDO::PARAM_STR);
            $stmt->bindParam(":FOTO", $rutaAlmacenamiento, PDO::PARAM_STR); // Ajusta el tipo de dato según tus necesidades
            $stmt->bindParam(":FK_CATEGORIA", $categoria, PDO::PARAM_STR);
    
            // Ejemplo de ejecución con manejo de errores
            if ($stmt->execute()) {
                return "ok";
            } else {
                return "error";
            }
        } catch (PDOException $e) {
            // Puedes registrar o manejar el error de alguna manera
            return false;
        }
    }
      
    /*=============================================
    EDITAR PRODUCTO
    =============================================*/
    public static function mdlEditarProducto($tabla, $id_producto, $nombre, $categoria, $descripcion, $tamano, $stock, $precio)
    {
        try {
            $stmt = Conexion::conectar()->prepare("UPDATE $tabla SET NOMBRE_PRODUCTO = :NOMBRE, DESCRIPCION = :DESCRIPCION, PRECIO = :PRECIO, TAMANO = :TAMANO, STOCK = :STOCK, FK_CATEGORIA = :FK_CATEGORIA WHERE ID_PRODUCTO = :ID_PRODUCTO");

            $stmt->bindParam(":ID_PRODUCTO", $id_producto, PDO::PARAM_STR);
            $stmt->bindParam(":NOMBRE", $nombre, PDO::PARAM_STR);
            $stmt->bindParam(":DESCRIPCION", $descripcion, PDO::PARAM_STR);
            $stmt->bindParam(":PRECIO", $precio, PDO::PARAM_STR);
            $stmt->bindParam(":TAMANO", $tamano, PDO::PARAM_STR);
            $stmt->bindParam(":STOCK", $stock, PDO::PARAM_STR);
            $stmt->bindParam(":FK_CATEGORIA", $categoria, PDO::PARAM_STR);

            if ($stmt->execute()) {
                return "ok";
            } else {
                return "error";
            }
        } catch (PDOException $e) {
            return "error";
        }
    }



    public static function mdlEditarProductoFoto($tabla, $id_producto, $url)
    {
        try {
            $stmt = Conexion::conectar()->prepare("UPDATE $tabla SET FOTO = :FOTO WHERE ID_PRODUCTO = :ID_PRODUCTO");

            $stmt->bindParam(":ID_PRODUCTO", $id_producto, PDO::PARAM_STR);
            $stmt->bindParam(":FOTO", $url, PDO::PARAM_STR);

            if ($stmt->execute()) {
                return "ok";
            } else {
                return "error";
            }
        } catch (PDOException $e) {
            return "error";
        }
    }
    /*=============================================
    ELIMINAR PRODUCTO
    =============================================*/
    public static function mdlEliminarProducto($tabla, $id)
    {
        try {
            $stmt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE ID_PRODUCTO = :id");
            $stmt->bindParam(":id", $id, PDO::PARAM_INT);

            if ($stmt->execute()) {
                return "ok";
            } else {
                return "error";
            }
        } catch (PDOException $e) {
            return "error";
        }
    }

    /*=============================================
    ACTUALIZAR PRODUCTOS
    =============================================*/
    public static function mdlActualizarProductos($tabla, $item1, $valor1, $item2, $valor2)
    {
        try {
            $stmt = Conexion::conectar()->prepare("UPDATE $tabla SET $item1 = :valor1 WHERE $item2 = :valor2");
            $stmt->bindParam(":valor1", $valor1, PDO::PARAM_STR);
            $stmt->bindParam(":valor2", $valor2, PDO::PARAM_STR);

            if ($stmt->execute()) {
                return "ok";
            } else {
                return "error";
            }
        } catch (PDOException $e) {
            return "error";
        }
    }
}
// SELECT CC.*, P.* FROM tb_productos P join tb_carrito_compras CC on CC.FK_PRODUCTO=P.ID_PRODUCTO;