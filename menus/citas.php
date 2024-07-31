<?php 
  $page_title = 'Lista de citas';
  require_once('includes/load.php');
?>
<?php include_once('layouts/header.php'); ?>

<style>
    .font-size-15 {
        font-size: 15px;
    }

    .custom-table {
        border-collapse: collapse;
        width: 100%;
        font-size: 15px; /* Ajusta el tamaño de la fuente de la tabla */
    }

    .custom-table th,
    .custom-table td {
        border: none; /* Elimina los bordes de las celdas */
        padding: 8px;
    }

    .custom-table tr {
        border-bottom: 1px solid #ddd; /* Línea divisoria entre las filas */
    }

    .custom-table tr:last-child {
        border-bottom: none; /* Elimina la línea divisoria en la última fila */
    }

    .custom-table thead th { 
        font-weight: bold;
    }

    .custom-table tbody tr:nth-child(odd) {
        background-color: #ffffff; /* Fondo blanco para filas impares */
    }

    .custom-table tbody tr:nth-child(even) {
        background-color: #ffffff; /* Fondo blanco para filas pares */
    }

    .btn-custom, 
    .label-custom,
    .btn-group .btn {
        border-radius: 25px; /* Bordes redondeados */
    }

    .pagination {
        margin: 20px 0;
    }

    .pagination a {
        padding: 8px 16px;
        margin: 0 4px;
        border: 1px solid #ddd;
        color: #007bff;
        text-decoration: none;
    }

    .pagination a.active {
        background-color: #007bff;
        color: white;
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
        <div class="table-responsive">
          <table class="table custom-table">
            <thead>
              <tr>
                <th class="text-center" style="width: 50px;">#</th>
                <th class="text-center" style="width: 10%;">Nombre</th>
                <th class="text-center" style="width: 10%;">Teléfono</th>
                <th class="text-center" style="width: 10%;">Correo</th>
                <th class="text-center" style="width: 10%;">Domicilio</th>
                <th class="text-center" style="width: 10%;">Fecha</th>
                <th class="text-center" style="width: 10%;">Hora</th>
                <th class="text-center" style="width: 10%;">Plan</th>
                <th style="width: 10%;">Status</th>
                <th class="text-center" style="width: 100px;">Acciones</th>
              </tr>
            </thead>
            <tbody>
            <?php
              // Variables de paginación
              $results_per_page = 7; // Número de resultados por página
              $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
              $start_from = ($page - 1) * $results_per_page;

              // Conexión a la base de datos
              $con = mysqli_connect("localhost", "root", "", "oswa_inv");

              // Verificar conexión
              if (!$con) {
                die("Conexión fallida: " . mysqli_connect_error());
              }

              // Obtener el número total de citas
              $count_sql = "SELECT COUNT(*) AS total FROM citas";
              $count_result = $con->query($count_sql);
              $total_rows = $count_result->fetch_assoc()['total'];
              $total_pages = ceil($total_rows / $results_per_page);

              // Consultar las citas con paginación
              $sql = "SELECT * FROM citas LIMIT $start_from, $results_per_page";
              $result = $con->query($sql);

              if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
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
                  echo "<button type='submit' class='btn btn-info btn-lg btn-custom' style='font-size: 15px;'>Concretada</button>";
                  echo "</form>";      
                  echo "<a href='media.php' class='btn btn-warning btn-lg btn-custom' style='font-size: 15px;'>Galería</a>";
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

        <!-- Paginación -->
        <div class="pagination">
          <?php
          if ($page > 1) {
              echo "<a href='?page=" . ($page - 1) . "'>&laquo; Anterior</a>";
          }
          for ($i = 1; $i <= $total_pages; $i++) {
              $active = $i == $page ? 'active' : '';
              echo "<a href='?page=$i' class='$active'>$i</a>";
          }
          if ($page < $total_pages) {
              echo "<a href='?page=" . ($page + 1) . "'>Siguiente &raquo;</a>";
          }
          ?>
        </div>
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
