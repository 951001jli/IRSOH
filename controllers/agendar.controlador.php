<?php

class ControladorCitas
{
    /*=============================================
    MOSTRAR TOTAL CITAS DE USUARIOS
    =============================================*/

    public static function ctrMostrarCitas($id_cita)
    {

        $tabla = "TB_CITAS";

        $respuesta = ModeloAgeCita::mdlMostrarCitas($tabla, $id_cita);

        return $respuesta;

    }

    public static function ctrAgendarCita($titulo, $descripcion, $fecha, $hora, $tipo_cita, $costo, $id_nutriologo, $id_usuario)
    {

            
            // Verificamos si el médico trabaja en ese día
            $diaSemana = date('N', strtotime($fecha));
            if (!ModeloAgeCita::trabajaEsteDia($id_nutriologo, $diaSemana)) {

                echo "Lo sentimos, el médico no trabaja en este día." . $diaSemana;
            } else {
                // Verificamos si hay un horario disponible en esa fecha y hora
                $horariosDisponibles = ModeloAgeCita::obtenerHorariosDisponibles($id_nutriologo, $diaSemana);
                $horaSeleccionadaDisponible = false;
                foreach ($horariosDisponibles as $horario) {
                    if ($hora >= $horario["HORA_INICIO"] && $hora <= $horario["HORA_FIN"]) {
                        $horaSeleccionadaDisponible = true;
                        break;
                    }
                }
                
                if ($horaSeleccionadaDisponible) {
                    // Registrar la cita en la base de datos
                    // Aquí iría tu lógica para insertar la cita en la base de datos
                    $idCita = ModeloAgeCita::registrarCita($titulo, $descripcion, $fecha, $hora, $tipo_cita, $costo, $id_nutriologo, $id_usuario);
                    if ($idCita) {
                        echo '<script>
                                window.location.href = "appointment_payment?idCita=' . $idCita . '";
                            </script>';
                        // echo "La cita ha sido reservada exitosamente." . $idCita;
                    } else {
                        echo "La cita no ha sido reservada exitosamente.";
                    }
                    
                } else {
                    echo "Lo sentimos, no hay horario disponible en esa fecha y hora.";
                }
            }
        // $tabla = "TB_CITAS";

        // $respuesta = ModeloCitas::mdlAgendarCita($tabla, $titulo, $descripcion, $fecha, $hora, $tipo_cita, $id_nutriologo, $id_usuario);

        // if ($respuesta == "ok") {
        //     echo '<script>
        //             window.location.href = "citas";
        //         </script>';
        // }

    }

 
    public static function ctrCambiarEstatus($id_cita) {
            
            $respuesta = ModeloAgeCita::mdlCambiarEstatus($id_cita, 1);

            if ($respuesta == "ok") {
                echo '<script>
                        window.location.href = "citas";
                    </script>';
            }
    
            return $respuesta;
    }

    public static function ctrObtenerCita($id_cita) {
        
        
        $respuesta = ModeloAgeCita::mdlObtenerCita($id_cita);

        return $respuesta;
    }
    

    public static function ctrAppointmentPayment($email, $direccion, $card_number, $expiry_date, $cvc, $id_usuario, $total, $id_cita, $estatus)
    {

        $respuesta = ModeloAgeCita::mdlAppointmentPayment($email, $direccion, $card_number, $expiry_date, $cvc, $id_usuario, $total);
        if ($respuesta) {
            $respuesta1 = ModeloAgeCita::mdlCambiarEstatus($id_cita, $estatus, $respuesta, $total);
            if ($respuesta1 == "ok") {
                
                echo '<script>
                        window.location.href = "pay_success";
                    </script>';
                
            }
        }
    }
}