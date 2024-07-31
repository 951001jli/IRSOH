<?php
$page_title = 'Admin página de inicio';
require_once('includes/load.php');
// Checkin What level user has permission to view this page
page_require_level(1);

// Variables de paginación
$results_per_page = 7; // Número de resultados por página
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$start_from = ($page - 1) * $results_per_page;

// Obtener el número total de comentarios
$servername = "localhost";
$username = "root"; // Reemplaza con tu usuario de MySQL
$password = ""; // Reemplaza con tu contraseña de MySQL
$database = "oswa_inv"; // Reemplaza con el nombre de tu base de datos

$conn = new mysqli($servername, $username, $password, $database);

// Verifica la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Consulta para contar el número total de comentarios
$count_sql = "SELECT COUNT(*) AS total FROM contactanos";
$count_result = $conn->query($count_sql);
$total_rows = $count_result->fetch_assoc()['total'];
$total_pages = ceil($total_rows / $results_per_page);

// Consulta SQL para seleccionar los comentarios con paginación
$sql = "SELECT nombre, email, asunto, mensaje FROM contactanos LIMIT $start_from, $results_per_page";
$result = $conn->query($sql);

include_once('layouts/header.php');
?>

<style>
  .large-font {
    font-size: 14px; /* Ajusta el tamaño de la fuente según tus necesidades */
  }
  .custom-table {
    border-collapse: collapse;
    width: 100%;
  }
  .custom-table th,
  .custom-table td {
    border: none;
    padding: 8px;
  }
  .custom-table tr {
    border-bottom: 1px solid #ddd;
  }
  .custom-table tr:last-child {
    border-bottom: none;
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

<div class="row large-font">
  <div class="col-md-12">
    <?php echo display_msg($msg); ?>
  </div>
</div>

<div class="col-md-12 mb-4">
  <div class="panel panel-default">
    <div class="panel-heading large-font">
      <div class="panel-heading clearfix">
      <span class="glyphicon glyphicon-align-center"></span>
      <span>Comentarios</span>
      </div>
    </div>
    <div class="panel-body large-font">
      <div class="table-responsive">
        <table class="table custom-table">
          <thead>
            <tr>
              <th>Nombre</th>
              <th>Email</th>
              <th>Asunto</th>
              <th>Mensaje</th>
            </tr>
          </thead>
          <tbody>
            <?php
            // Mostrar los resultados en la tabla
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row['nombre'] . "</td>";
                    echo "<td>" . $row['email'] . "</td>";
                    echo "<td>" . $row['asunto'] . "</td>";
                    echo "<td>" . $row['mensaje'] . "</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='4'>No hay comentarios registrados.</td></tr>";
            }
            $conn->close();
            ?>
          </tbody>
        </table>
      </div>
      
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

<?php include_once('layouts/footer.php'); ?>
