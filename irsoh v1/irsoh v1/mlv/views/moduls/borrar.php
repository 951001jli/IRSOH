<?php

if(isset($_GET['id_historial'])) {
    $id_historial = $_GET['id_historial'];
    $eliminar_historial = new ControladorHistorial();
    $eliminar = $eliminar_historial->ctrEliminarHistorial($id_historial);
                                    
} else {
    echo "<p style='color: red;'> No se escogio un id valido </p>";
}