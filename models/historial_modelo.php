<?php

    require_once "conexion.php";
    
    class ModeloHistorial
    {

    /*=============================================
    MOSTRAR HISTORIAL CLINICO DE USUARIO
    =============================================*/

        public static function mdlMostrarHistorial($tabla, $id_usuario)
    {
        $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE FK_USUARIO = :id");
        $stmt->bindParam(":id", $id_usuario, PDO::PARAM_STR);
        $stmt->execute();
        return $stmt->fetchAll();
    }
/*    ESTE MUESTRA TODOS LOS HISTORIALES    
    public static function mdlMostrarHistorial($tabla, $id_historial)
    {
        $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE FK_USUARIO = FK_USUARIO");
        $stmt->execute();        
        return $stmt->fetchAll();
        $stmt->close();
        $stmt = null;
    }


    /*=============================================
    AGREGAR ROL
    =============================================*/

    public static function mdlAgregarHistorial($tabla, $id_usuario, $peso, $talla, $cintura, $abdomen, $cadera, $brazo, $espalda, $icm, $objetivo, $fecha, $observaciones)
    {
        $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla (PESO, TALLA, CIRCUNFERENCIA_CINTURA, CIRCUNFERENCIA_ABDOMEN, CIRCUNFERENCIA_CADERA, CIRCUNFERENCIA_BRAZO, CIRCUNFERENCIA_ESPALDA, ICM, OBJETIVO_PROXIMO, FECHA, OBSERVACIONES, FK_USUARIO) 
                                                            VALUES (:PESO, :TALLA, :CIRCUNFERENCIA_CINTURA, :CIRCUNFERENCIA_ABDOMEN, :CIRCUNFERENCIA_CADERA, :CIRCUNFERENCIA_BRAZO, :CIRCUNFERENCIA_ESPALDA, :ICM, :OBJETIVO_PROXIMO, :FECHA, :OBSERVACIONES, :ID_USUARIO)");
        
            $stmt->bindParam(":ID_USUARIO", $id_usuario, PDO::PARAM_STR);
            $stmt->bindParam(":PESO", $peso, PDO::PARAM_STR);
            $stmt->bindParam(":TALLA", $talla, PDO::PARAM_STR);
            $stmt->bindParam(":CIRCUNFERENCIA_CINTURA", $cintura, PDO::PARAM_STR);
            $stmt->bindParam(":CIRCUNFERENCIA_ABDOMEN", $abdomen, PDO::PARAM_STR);
            $stmt->bindParam(":CIRCUNFERENCIA_CADERA", $cadera, PDO::PARAM_STR);
            $stmt->bindParam(":CIRCUNFERENCIA_BRAZO", $brazo, PDO::PARAM_STR);
            $stmt->bindParam(":CIRCUNFERENCIA_ESPALDA", $espalda, PDO::PARAM_STR);
            $stmt->bindParam(":ICM", $icm, PDO::PARAM_STR);
            $stmt->bindParam(":OBJETIVO_PROXIMO", $objetivo, PDO::PARAM_STR);
            $stmt->bindParam(":FECHA", $fecha, PDO::PARAM_STR);
            $stmt->bindParam(":OBSERVACIONES", $observaciones, PDO::PARAM_STR);

        if ($stmt->execute()) {
            return "ok";
        } else {
            return "error";
        }
    }

    /*=============================================
    ELIMINAR HISTORIAL
    =============================================*/

    public static function mdlEliminarHistorial($tabla, $id)
    {
        try {
        $stmt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE ID_HISTORIAL_CLINICO = :id");
        $stmt->bindParam(":id", $id, PDO::PARAM_STR);
            if ($stmt->execute()) {
                return "ok";
            }
                else {
                    return "error";
                }
    }  catch (PDOException $e) {
        return "error";
        }
    }

    /*=============================================
    MODIFICAR HISTORIAL CLINICO DE USUARIO
    =============================================*/

    public static function mdlActualizarHistorial($tabla, $id_historial, $peso, $talla, $cintura, $abdomen, $cadera, $brazo, $espalda, $icm, $objetivo, $fecha, $observaciones)
    {
        try {
            $stmt = Conexion::conectar()->prepare("UPDATE $tabla SET PESO = :PESO, TALLA = :TALLA, CIRCUNFERENCIA_CINTURA = :CIRCUNFERENCIA_CINTURA, CIRCUNFERENCIA_ABDOMEN = :CIRCUNFERENCIA_ABDOMEN, CIRCUNFERENCIA_CADERA = :CIRCUNFERENCIA_CADERA, CIRCUNFERENCIA_BRAZO = :CIRCUNFERENCIA_BRAZO, CIRCUNFERENCIA_ESPALDA = :CIRCUNFERENCIA_ESPALDA, ICM = :ICM, OBJETIVO_PROXIMO = :OBJETIVO_PROXIMO, FECHA = :FECHA, OBSERVACIONES = :OBSERVACIONES WHERE ID_HISTORIAL_CLINICO = :ID_HISTORIAL");

            $stmt->bindParam(":ID_HISTORIAL", $id_historial, PDO::PARAM_STR);
            $stmt->bindParam(":PESO", $peso, PDO::PARAM_STR);
            $stmt->bindParam(":TALLA", $talla, PDO::PARAM_STR);
            $stmt->bindParam(":CIRCUNFERENCIA_CINTURA", $cintura, PDO::PARAM_STR);
            $stmt->bindParam(":CIRCUNFERENCIA_ABDOMEN", $abdomen, PDO::PARAM_STR);
            $stmt->bindParam(":CIRCUNFERENCIA_CADERA", $cadera, PDO::PARAM_STR);
            $stmt->bindParam(":CIRCUNFERENCIA_BRAZO", $brazo, PDO::PARAM_STR);
            $stmt->bindParam(":CIRCUNFERENCIA_ESPALDA", $espalda, PDO::PARAM_STR);
            $stmt->bindParam(":ICM", $icm, PDO::PARAM_STR);
            $stmt->bindParam(":OBJETIVO_PROXIMO", $objetivo, PDO::PARAM_STR);
            $stmt->bindParam(":FECHA", $fecha, PDO::PARAM_STR);
            $stmt->bindParam(":OBSERVACIONES", $observaciones, PDO::PARAM_STR);
                   
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