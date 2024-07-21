<?php
// Incluir el archivo de conexión
include 'php/conexion_be.php';

// Obtener los datos de la URL
$id = isset($_GET['id']) ? intval($_GET['id']) : 0;
$estatus = isset($_GET['estatus']) ? $_GET['estatus'] : '';

// Verificar que el ID sea válido y el estatus sea válido
if ($id > 0 && ($estatus == 'Pendiente' || $estatus == 'Confirmado')) {
    // Actualizar el estatus
    $stmt = $conexion->prepare("UPDATE citas SET estatus = ? WHERE id = ?");
    $stmt->bind_param("si", $estatus, $id);
    $stmt->execute();
    $stmt->close();
}

// Redirigir de vuelta a la vista de citas
header("Location: vistaCitas.php");

// Cerrar la conexión
$conexion->close();
?>
