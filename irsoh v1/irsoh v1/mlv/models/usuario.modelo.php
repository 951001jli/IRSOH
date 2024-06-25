<?php

require_once "conexion.php";

class ModeloUsuario
{

    /*=============================================
    MOSTRAR UsuarioES
    =============================================*/

    public static function mdlMostrarUsuario($tabla, $item, $valor)
    {
        if ($item != null) {

            $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item ORDER BY ID_USUARIO DESC");

            $stmt->bindParam(":" . $item, $valor, PDO::PARAM_STR);
            $stmt->execute();
            return $stmt->fetch();

        } else {

            $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla ORDER BY ID_USUARIO DESC");
            $stmt->execute();
            return $stmt->fetchAll();

        }

    }


    public static function mdlRegistrarUsuario($tabla, $valor, $encriptar, $nombre, $apellidos)
    {

        try {
            $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(NOMBRE_USUARIO, APELLIDOS_USUARIO, CORREO, CONTRASENA, FK_ROL, FK_ESTATUS) 
            VALUES (:nombre, :apellidos, :correo, :contrasena, 1, 1)");

            $stmt->bindParam(":nombre", $nombre, PDO::PARAM_STR);
            $stmt->bindParam(":correo", $valor, PDO::PARAM_STR);
            $stmt->bindParam(":contrasena", $encriptar, PDO::PARAM_STR);
            $stmt->bindParam(":apellidos", $apellidos, PDO::PARAM_STR);

            if ($stmt->execute()) {
                $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE CORREO = :correo ORDER BY ID_USUARIO DESC");

                $stmt->bindParam(":correo", $valor, PDO::PARAM_STR);
                $stmt->execute();
                return $stmt->fetch();
            } else {
                return "error";
            }
        } catch (PDOException $e) {
            return $e;
        }
    }

    

    /*=============================================
    ACTUALIZAR PERFIL
    =============================================*/

    public static function mdlActualizarPerfil($tabla, $item1, $valor1, $item2, $valor2)
    {

        $stmt = Conexion::conectar()->prepare("UPDATE $tabla SET $item1 = :$item1 WHERE $item2 = :$item2");

        $stmt->bindParam(":" . $item1, $valor1, PDO::PARAM_STR);
        $stmt->bindParam(":" . $item2, $valor2, PDO::PARAM_STR);

        if ($stmt->execute()) {

            return "ok";

        } else {

            return "error";

        }

        $stmt->close();

        $stmt = null;

    }

    /*=============================================
    REGISTRO DE PERFIL
    =============================================*/

    public static function mdlIngresarPerfil($tabla, $datos)
    {

        $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(nombre, email, password, perfil, foto, estado) VALUES (:nombre, :email, :password, :perfil, :foto, :estado)");

        $stmt->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
        $stmt->bindParam(":email", $datos["email"], PDO::PARAM_STR);
        $stmt->bindParam(":password", $datos["password"], PDO::PARAM_STR);
        $stmt->bindParam(":perfil", $datos["perfil"], PDO::PARAM_STR);
        $stmt->bindParam(":foto", $datos["foto"], PDO::PARAM_STR);
        $stmt->bindParam(":estado", $datos["estado"], PDO::PARAM_STR);

        if ($stmt->execute()) {

            return "ok";

        } else {

            return "error";

        }

        $stmt->close();

        $stmt = null;

    }

    /*=============================================
    EDITAR PERFIL
    =============================================*/

    public static function mdlEditarPerfil($tabla, $datos)
    {

        $stmt = Conexion::conectar()->prepare("UPDATE $tabla SET nombre = :nombre, email = :email, password = :password, perfil = :perfil, foto = :foto WHERE id = :id");

        $stmt->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
        $stmt->bindParam(":email", $datos["email"], PDO::PARAM_STR);
        $stmt->bindParam(":password", $datos["password"], PDO::PARAM_STR);
        $stmt->bindParam(":perfil", $datos["perfil"], PDO::PARAM_STR);
        $stmt->bindParam(":foto", $datos["foto"], PDO::PARAM_STR);
        $stmt->bindParam(":id", $datos["id"], PDO::PARAM_INT);

        if ($stmt->execute()) {

            return "ok";

        } else {

            return "error";

        }

        $stmt->close();

        $stmt = null;

    }

    /*=============================================
    ELIMINAR PERFIL
    =============================================*/

    public static function mdlEliminarPerfil($tabla, $datos)
    {

        $stmt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE id = :id");

        $stmt->bindParam(":id", $datos, PDO::PARAM_INT);

        if ($stmt->execute()) {

            return "ok";

        } else {

            return "error";

        }

        $stmt->close();

        $stmt = null;

    }

}
