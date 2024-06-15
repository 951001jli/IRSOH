<?php

    require_once "conexion.php";
    
    class ModeloAgeCita
    {
        /*=============================================
        MOSTRAR TOTAL DE CITAS DE USUARIO
        =============================================*/
    
        public static function mdlMostrarCitas($tabla, $id_cita)
        {
    
            $stmt = Conexion::conectar()->prepare("SELECT C.*, U.NOMBRE_USUARIO, U.APELLIDOS_USUARIO, TC.NOMBRE_TIPO_CITA, E.NOMBRE_ESTATUS
            FROM $tabla C
            LEFT JOIN TB_USUARIOS U ON C.FK_NUTRIOLOGO = U.ID_USUARIO 
            LEFT JOIN TB_TIPO_CITA TC ON C.TIPO_CITA = TC.ID_TIPO_CITA
            LEFT JOIN TB_ESTATUS E ON C.FK_ESTATUS = E.ID_ESTATUS
            WHERE C.FK_USUARIO = $id_cita");
    
            $stmt->execute();
    
            return $stmt->fetchAll();
    
            $stmt->close();
    
            $stmt = null;
    
        }
    

    public static function mdlAgeCita($tabla, $nombre, $apellido, $email, $telefono)
    {
        try{
            $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla ( NOMBRE, APELLIDO, EMAIL, TELEFONO)  VALUES (:NOMBRE, :APELLIDO, :EMAIL, :TELEFONO)");
            $stmt->bindParam(":NOMBRE", $nombre, PDO::PARAM_STR);
            $stmt->bindParam(":APELLIDO", $apellido, PDO::PARAM_STR);
            $stmt->bindParam(":EMAIL", $email, PDO::PARAM_STR);
            $stmt->bindParam(":TELEFONO", $telefono, PDO::PARAM_STR);
    
            if ($stmt->execute()) {
                return "ok";
            } else {
                return "error";
            }

        } catch (PDOException $e) {
            return "error";
        }

    }

    public static function trabajaEsteDia($medicoId, $diaSemana) {
        $stmt = Conexion::conectar()->prepare("SELECT COUNT(*) FROM tb_horarios_nutriologo WHERE FK_NUTRIOLOGO = ? AND DIA_SEMANA = ?");
        $stmt->execute([$medicoId, $diaSemana]);
        $result = $stmt->fetchColumn();
        
        return $result > 0;

        $stmt->close();

        $stmt = null;
    }


    public static function obtenerHorariosDisponibles($medicoId, $diaSemana) {
        $stmt = Conexion::conectar()->prepare("SELECT * FROM tb_horarios_nutriologo WHERE FK_NUTRIOLOGO = ? AND DIA_SEMANA = ?");
        $stmt->execute([$medicoId, $diaSemana]);
        $horarios = $stmt->fetchAll(PDO::FETCH_ASSOC);
        
        return $horarios;
        $stmt->close();

        $stmt = null;
    }


    public static function registrarCita($titulo, $descripcion, $fecha, $hora, $tipo_cita, $costo, $id_nutriologo, $id_usuario) {


        // $url = "https://meet.jit.si/".uniqid();
        $url = "";
        if ($tipo_cita == 2) {
            $url = "https://meet.google.com/nwz-rhjh-sez";
        }
        
        $stmt = Conexion::conectar()->prepare("INSERT INTO tb_citas (TITULO_CITA, DESCRIPCION_CITA, FECHA, HORA, URL_VIDEOLLAMADA, COSTO, FK_TIPO_CITA, FK_NUTRIOLOGO, FK_USUARIO, FK_ESTATUS) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, 4)");
        
        
        

        if ($stmt->execute([$titulo, $descripcion, $fecha, $hora, $url, $costo, $tipo_cita, $id_nutriologo, $id_usuario])) {
            $idCita = Conexion::conectar()->query("SELECT MAX(ID_CITA) FROM tb_citas;")->fetchColumn();

            // Llama a la función mdlCleanCarrito para limpiar el carrito
            return $idCita;
            
        }

        return false;
    }

    public static function mdlAppointmentPayment($email, $direccion, $card_number, $expiry_date, $cvc, $id_usuario, $total)
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

    public static function mdlCambiarEstatus($id_cita, $estatus, $pago, $total) {


        $stmt = Conexion::conectar()->prepare("UPDATE TB_CITAS SET FK_ESTATUS = ?, FK_PAGO = ?, COSTO = ? WHERE ID_CITA = ?");
        $stmt->execute([$estatus, $pago, $total, $id_cita]);
        
        

        if ($stmt->execute()) {
            return "ok";
            
        }

        return false;
    }


    public static function mdlObtenerCita($id_cita) {
        $stmt = Conexion::conectar()->prepare("SELECT * FROM TB_CITAS WHERE ID_CITA = ?");
        $stmt->execute([$id_cita]);
        $cita = $stmt->fetch(PDO::FETCH_ASSOC);
        
        return $cita;
        $stmt->close();

        $stmt = null;
    }


}