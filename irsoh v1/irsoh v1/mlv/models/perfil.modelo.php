<?php

require_once "conexion.php";

class ModeloPerfil
{


    public static function mdlMostrarPerfil($tabla, $id_perfil)
    {
        try {
            $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE ID_USUARIO = $id_perfil");
            $stmt->execute();
            return $stmt->fetch();
        } catch (PDOException $e) {
            return [];
        }
    }


    public static function mdlEditarPerfil($tabla, $id_perfil, $nombre, $apellidos, $correo, $nacimiento, $telefono, $ocupacion, $genero)
    {
        try {
            $stmt = Conexion::conectar()->prepare("UPDATE $tabla SET NOMBRE_USUARIO = :NOMBRE, APELLIDOS_USUARIO = :APELLIDOS_USUARIO, CORREO = :CORREO, FECHA_NACIMIENTO = :NACIMIENTO, TELEFONO = :TELEFONO, OCUPACION = :OCUPACION, GENERO = :GENERO WHERE ID_USUARIO = :ID_USUARIO");

            $stmt->bindParam(":ID_USUARIO", $id_perfil, PDO::PARAM_STR);
            $stmt->bindParam(":NOMBRE", $nombre, PDO::PARAM_STR);
            $stmt->bindParam(":APELLIDOS_USUARIO", $apellidos, PDO::PARAM_STR);
            $stmt->bindParam(":CORREO", $correo, PDO::PARAM_STR);
            $stmt->bindParam(":NACIMIENTO", $nacimiento, PDO::PARAM_STR);
            $stmt->bindParam(":TELEFONO", $telefono, PDO::PARAM_STR);
            $stmt->bindParam(":OCUPACION", $ocupacion, PDO::PARAM_STR);
            $stmt->bindParam(":GENERO", $genero, PDO::PARAM_STR);

            if ($stmt->execute()) {
                return "ok";
            } else {
                return "error";
            }
        } catch (PDOException $e) {
            return "error";
        }
    }



    public static function mdlEditarPerfilFoto($tabla, $id_perfil, $url)
    {
        try {
            $stmt = Conexion::conectar()->prepare("UPDATE $tabla SET FOTO_PERFIL = :FOTO WHERE ID_USUARIO = :ID_USUARIO");

            $stmt->bindParam(":ID_USUARIO", $id_perfil, PDO::PARAM_STR);
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


    public static function mdlAgregarEstudios($tabla, $id_perfil, $url)
    {
        try {
            $stmt = Conexion::conectar()->prepare("UPDATE $tabla SET ESTUDIOS_LABORATORIO = :ESTUDIOS WHERE ID_USUARIO = :ID_USUARIO");

            $stmt->bindParam(":ID_USUARIO", $id_perfil, PDO::PARAM_STR);
            $stmt->bindParam(":ESTUDIOS", $url, PDO::PARAM_STR);

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
