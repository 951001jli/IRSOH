<?php 
  $page_title = 'Lista de citas';
  require_once('includes/load.php');
?>
<?php include_once('layouts/header.php'); ?>

<style>
    .font-size-15 {
        font-size: 15px;
    }
</style>

<div class="row">
  <div class="col-md-12">
  </div>
</div>
<div class="row">
  <div class="col-md-12">
  <div class="panel panel-default">
    <div class="panel-heading">
      <div class="panel-heading clearfix">
      <strong>
      <span class="glyphicon glyphicon-list-alt"></span>
      <span>Citas</span>
      </strong>
      </div>
      </div>
      <div class="panel-body">
        <div class="table-responsive"> <!-- Añadir esta línea -->
        <table class="table table-bordered table-striped">
        <thead>
              <tr>
                <th class="text-center" style="width: 50px; font-size: 15px;">#</th>
                <th class="text-center" style="width: 10%; font-size: 15px;">Nombre</th>
                <th class="text-center" style="width: 10%; font-size: 15px;">Teléfono</th>
                <th class="text-center" style="width: 10%; font-size: 15px;">Correo</th>
                <th class="text-center" style="width: 10%; font-size: 15px;">Domicilio</th>
                <th class="text-center" style="width: 10%; font-size: 15px;">Fecha</th>
                <th class="text-center" style="width: 10%; font-size: 15px;">Hora</th>
                <th class="text-center" style="width: 10%; font-size: 15px;">Plan</th>
                <th style="width: 10%; font-size: 15px;">Status</th>
                <th class="text-center" style="width: 100px; font-size: 15px;">Acciones</th>
              </tr>
            </thead>
            <tbody>
            <?php
// Incluir el archivo de conexión
$con = mysqli_connect("localhost", "root", "", "oswa_inv");

// Verificar conexión
if (!$con) {
    die("Conexión fallida: " . mysqli_connect_error());
}

// Consultar las citas
$sql = "SELECT * FROM citas";
$result = $con->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td class='font-size-15'>" . $row['id'] . "</td>";
        echo "<td class='font-size-15'>" . htmlspecialchars($row['nombre_completo']) . "</td>";
        echo "<td class='font-size-15'>" . htmlspecialchars($row['telefono']) . "</td>";
        echo "<td class='font-size-15'>" . htmlspecialchars($row['correo']) . "</td>";
        echo "<td class='font-size-15'>" . htmlspecialchars($row['domicilio']) . "</td>";
        echo "<td class='font-size-15'>" . htmlspecialchars($row['fecha']) . "</td>";
        echo "<td class='font-size-15'>" . htmlspecialchars($row['hora']) . "</td>";
        echo "<td class='font-size-15'>" . htmlspecialchars($row['plan']) . "</td>";
        echo "<td class='font-size-15'>" . htmlspecialchars($row['estatus']) . "</td>";
        echo "<td class='font-size-15'>";
  // Formulario para actualizar el estatus
  echo "<form method='post' action=''>";
  echo "<input type='hidden' name='id' value='" . $row['id'] . "'>";
  echo "<input type='hidden' name='estatus' value='Concretada'>";
  echo "<button type='submit' class='btn btn-info btn-sm' style='font-size: 12px;'>Concretada</button>";
  echo "</form>";      
  echo "<a href='media.php' class='btn btn-warning btn-sm' style='font-size: 12px;'>Galería</a>";
          echo "</td>";
        echo "</tr>";
    }
} else {
    echo "<tr><td colspan='10' class='text-center'>No hay citas registradas</td></tr>";
}

// Cerrar la conexión
$con->close();
?>
          </tbody>
          </table>
        </div> <!-- Cerrar el div table-responsive -->
      </div>
    </div>
  </div>
</div>


<?php
// Lógica de actualización del estatus
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = isset($_POST['id']) ? intval($_POST['id']) : 0;
    $estatus = isset($_POST['estatus']) ? $_POST['estatus'] : '';

    if ($id > 0 && !empty($estatus)) {
        // Crear la consulta de actualización
        $con = mysqli_connect("localhost", "root", "", "oswa_inv");

        if (!$con) {
            die("Conexión fallida: " . mysqli_connect_error());
        }

        $stmt = $con->prepare("UPDATE citas SET estatus = ? WHERE id = ?");
        $stmt->bind_param("si", $estatus, $id);
        $stmt->execute();
        $stmt->close();
        $con->close();

      }
}
?>
<?php include_once('layouts/footer.php'); ?>
