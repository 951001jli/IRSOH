<?php

    require_once "conexion.php";
    
    class ModeloNutriologo
    {
    

        /*=============================================
        MOSTRAR EL TOTAL SOLICITUDES
        =============================================*/
        
        public static function mdlMostrarNutriologo($tabla, $id_usuario)
        {
            $stmt = Conexion::conectar()->prepare("
            SELECT U.*, N.*, E.NOMBRE_ESTATUS
            FROM TB_USUARIOS U 
            JOIN TB_NUTRIOLOGOS N ON U.ID_USUARIO = N.FK_USUARIO 
            JOIN TB_ESTATUS E ON U.FK_ESTATUS = E.ID_ESTATUS
            WHERE U.FK_ROL = 2 AND N.ID_NUTRIOLOGO = :id ORDER BY N.ID_NUTRIOLOGO DESC");
            $stmt->bindParam(":id", $id_usuario, PDO::PARAM_INT);
            $stmt->execute();        
            return $stmt->fetch();
            $stmt->close();
            $stmt = null;
        }


        public static function mdlBuscarNutri($busqueda)
        {
            try {
                $stmt = Conexion::conectar()->prepare("SELECT U.*, N.* FROM tb_usuarios U JOIN TB_NUTRIOLOGOS N ON U.ID_USUARIO = N.FK_USUARIO WHERE U.NOMBRE_USUARIO LIKE '%$busqueda%' OR U.APELLIDOS_USUARIO LIKE '%$busqueda%'");
                $stmt->execute();
    
                return $stmt->fetchAll();
            } catch (PDOException $e) {
                return [];
            }
        }



        public static function mdlMostrarTotalNutri($tabla)
        {

            $stmt = Conexion::conectar()->prepare("
            SELECT U.*, N.*, E.NOMBRE_ESTATUS
            FROM TB_USUARIOS U 
            JOIN TB_NUTRIOLOGOS N ON U.ID_USUARIO = N.FK_USUARIO 
            JOIN TB_ESTATUS E ON U.FK_ESTATUS = E.ID_ESTATUS
            WHERE U.FK_ROL = 2 ORDER BY N.ID_NUTRIOLOGO DESC");
            $stmt->execute();        
            return $stmt->fetchAll();
            $stmt->close();
            $stmt = null;

        }


        public static function mdlMostrarTotalNutriRe($tabla)
        {

            $stmt = Conexion::conectar()->prepare("
            SELECT U.*, N.*, E.NOMBRE_ESTATUS
            FROM TB_USUARIOS U 
            JOIN TB_NUTRIOLOGOS N ON U.ID_USUARIO = N.FK_USUARIO 
            JOIN TB_ESTATUS E ON U.FK_ESTATUS = E.ID_ESTATUS
            WHERE U.FK_ROL = 2 
            ORDER BY N.ID_NUTRIOLOGO DESC
            LIMIT 4");
            $stmt->execute();        
            return $stmt->fetchAll();
            $stmt->close();
            $stmt = null;

        }




        public static function mdlRechazarNutri($tabla, $id_nutriologo)
        {

            $stmt = Conexion::conectar()->prepare("UPDATE $tabla SET FK_ESTATUS = 5 WHERE ID_USUARIO = :id");

            $stmt->bindParam(":id", $id_nutriologo, PDO::PARAM_INT);

            if ($stmt->execute()) {

                return "ok";

            } else {

                return "error";

            }

            $stmt->close();

            $stmt = null;

        }


        public static function mdlAceptarNutri($tabla, $id_nutriologo)
        {

            $stmt = Conexion::conectar()->prepare("UPDATE $tabla SET FK_ESTATUS = 6 WHERE ID_USUARIO = :id");

            $stmt->bindParam(":id", $id_nutriologo, PDO::PARAM_INT);

            if ($stmt->execute()) {

                return "ok";

            } else {

                return "error";

            }

            $stmt->close();

            $stmt = null;

        }

        public static function mdlRevisarCalNutr($id_nutriologo, $id_usuario)
        {
            $stmt = Conexion::conectar()->prepare("SELECT ID_CITA FROM TB_CITAS WHERE FK_NUTRIOLOGO = :ID_NUTRIOLOGO  AND FK_USUARIO = :ID_USUARIO");
            $stmt->bindParam(":ID_NUTRIOLOGO", $id_nutriologo, PDO::PARAM_INT);
            $stmt->bindParam(":ID_USUARIO", $id_usuario, PDO::PARAM_INT);
            $stmt->execute();

            $id_cita = $stmt->fetchColumn();

            $numResultados = $stmt->rowCount();
            if($numResultados > 0) {
                $stmt1 = Conexion::conectar()->prepare("SELECT * FROM TB_CALIFICACION WHERE FK_NUTRIOLOGO = :ID_NUTRIOLOGO  AND FK_USUARIO = :ID_USUARIO AND FK_CITA = :ID_CITA");
                $stmt1->bindParam(":ID_NUTRIOLOGO", $id_nutriologo, PDO::PARAM_INT);
                $stmt1->bindParam(":ID_USUARIO", $id_usuario, PDO::PARAM_INT);
                $stmt1->bindParam(":ID_CITA", $id_cita, PDO::PARAM_INT);
                $stmt1->execute();

                $numResultadosCal = $stmt1->rowCount();

                if($numResultadosCal > 0) {
                    return false;
                } else {
                    return $id_cita;
                }
            } else {
                return $id_cita;
            }

            
            

            
            // return $stmt->fetch();
            // $stmt->close();
            // $stmt = null;
        }


        public static function mdlMostrarCalNutr($id_nutriologo)
        { 
            $stmt = Conexion::conectar()->prepare("SELECT AVG(CALIFICACION) AS promedio_calificacion FROM TB_CALIFICACION WHERE FK_NUTRIOLOGO = :id");
            $stmt->bindParam(":id", $id_nutriologo, PDO::PARAM_INT);
            $stmt->execute();  
            $numResultadosCal = $stmt->rowCount();

            if($numResultadosCal > 0) {
                return $stmt->fetch();

            } else {
                return 0;
            } 

            $stmt->close();
            $stmt = null;
        }

        
    }    

?>    