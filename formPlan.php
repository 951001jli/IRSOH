<?php
// Iniciar la sesión
session_start();

// Recuperar la variable de la sesión
$plan = isset($_SESSION['plan']) ? $_SESSION['plan'] : 'No se ha establecido un plan';

// Incluir el archivo de conexión
include 'php/conexion_be.php';

// Procesar el formulario cuando se envía
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Preparar y vincular
    $stmt = $conexion->prepare("INSERT INTO citas (nombre_completo, telefono, correo, domicilio, fecha, hora, documentos, plan, estatus) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssssss", $nombre_completo, $telefono, $correo, $domicilio, $fecha, $hora, $documentos, $plan, $estatus);

    // Obtener los datos del formulario
    $nombre_completo = $_POST['nombreCompleto'];
    $telefono = $_POST['telefono'];
    $correo = $_POST['correo'];
    $domicilio = $_POST['domicilio'];
    $fecha = $_POST['fecha'];
    $hora = $_POST['hora'];
    $estatus = 'Pendiente';

    // Manejar el archivo de documentos
    if (isset($_FILES['documentos']) && $_FILES['documentos']['error'] == 0) {
        $documentos = file_get_contents($_FILES['documentos']['tmp_name']);
    } else {
        $documentos = null;
    }

    // Ejecutar la consulta
    if ($stmt->execute()) {
        echo "Nueva cita registrada con éxito";
        header("Location: agradecimiento.html");    
    } else {
        echo "Error: " . $stmt->error;
    }

    // Cerrar la conexión
    $stmt->close();
    $conexion->close();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Plan</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(to bottom, #ffffff, #007bff);
            height: 100vh;
        }
        .container {
            max-width: 600px;
            background-color: #ffffff;
            border-radius: 8px;
            padding: 40px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin-top: 50px;
        }
        h1 {
            color: #007bff;
            text-align: center;
            margin-bottom: 30px;
        }
    </style>
</head>
<body>
<div class="container">
    <h1><?php echo htmlspecialchars($plan); ?></h1>
    <form action="formPlan.php" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label for="nombreCompleto">Nombre Completo</label>
            <input type="text" class="form-control" id="nombreCompleto" name="nombreCompleto" required>
        </div>
        <div class="form-group">
            <label for="telefono">Teléfono</label>
            <input type="tel" class="form-control" id="telefono" name="telefono" required>
        </div>
        <div class="form-group">
            <label for="correo">Correo</label>
            <input type="email" class="form-control" id="correo" name="correo" required>
        </div>
        <div class="form-group">
            <label for="domicilio">Domicilio</label>
            <input type="text" class="form-control" id="domicilio" name="domicilio" required>
        </div>
        <div class="form-group">
            <label for="fecha">Fecha</label>
            <input type="date" class="form-control" id="fecha" name="fecha" required>
        </div>
        <div class="form-group">
            <label for="hora">Hora</label>
            <input type="time" class="form-control" id="hora" name="hora" required>
        </div>
        <div class="form-group">
            <label for="documentos">Subir Documentos</label>
            <input type="file" class="form-control-file" id="documentos" name="documentos" required>
        </div>
        <button type="submit" class="btn btn-primary btn-block">Enviar</button>
    </form>
</div>

<!-- Bootstrap JS y dependencias -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
