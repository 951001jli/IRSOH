<?php
// Iniciar la sesión
session_start();

// Leer los datos JSON enviados por fetch
$data = json_decode(file_get_contents('php://input'), true);

// Actualizar el plan en la sesión
if (isset($data['plan'])) {
    $_SESSION['plan'] = $data['plan'];
    http_response_code(200); // Enviar una respuesta 200 OK
} else {
    http_response_code(400); // Enviar una respuesta 400 Bad Request
}
?>
