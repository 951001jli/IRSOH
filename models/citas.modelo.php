<?php

    require_once "conexion.php";
    
    class ModelDetallesCita
    {
        /*=============================================
        MOSTRAR TOTAL DE CITAS DE USUARIO
        =============================================*/
    
        public static function mdlMostrarDestallesCita($tabla, $id_cita)
        {
    
            $stmt = Conexion::conectar()->prepare("
            SELECT C.*, U.*, E.NOMBRE_ESTATUS, T.NOMBRE_TIPO_CITA
                FROM $tabla C
                LEFT JOIN TB_NUTRIOLOGOS N ON C.FK_NUTRIOLOGO = N.ID_NUTRIOLOGO
                LEFT JOIN TB_USUARIOS U ON U.ID_USUARIO = N.FK_USUARIO
                LEFT JOIN tb_tipo_cita T ON C.FK_TIPO_CITA = T.ID_TIPO_CITA 
                LEFT JOIN TB_ESTATUS E ON C.FK_ESTATUS = E.ID_ESTATUS 
                WHERE C.FK_USUARIO = $id_cita");
    
            $stmt->execute();
    
            return $stmt->fetchAll();
    
            $stmt->close();
    
            $stmt = null;
    
        }
    }