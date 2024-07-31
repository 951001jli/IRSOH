<?php
$page_title = 'Lista de grupos';
require_once('includes/load.php');
// Check user permissions
page_require_level(1);

// Variables de paginación
$results_per_page = 7; // Número de resultados por página
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$start_from = ($page - 1) * $results_per_page;

// Obtener el número total de grupos
$servername = "localhost";
$username = "root"; // Reemplaza con tu usuario de MySQL
$password = ""; // Reemplaza con tu contraseña de MySQL
$database = "oswa_inv"; // Reemplaza con el nombre de tu base de datos

$conn = new mysqli($servername, $username, $password, $database);

// Verifica la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Consulta para contar el número total de grupos
$count_sql = "SELECT COUNT(*) AS total FROM user_groups";
$count_result = $conn->query($count_sql);
$total_rows = $count_result->fetch_assoc()['total'];
$total_pages = ceil($total_rows / $results_per_page);

// Consulta SQL para seleccionar los grupos con paginación
$sql = "SELECT * FROM user_groups LIMIT $start_from, $results_per_page";
$all_groups = $conn->query($sql);

include_once('layouts/header.php');
?>

<style>
  .custom-table {
    border-collapse: collapse;
    width: 100%;
    font-size: 15px; /* Ajusta el tamaño de la fuente de la tabla */
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
  
  .btn-custom, 
  .label-custom,
  .btn-group .btn {
    border-radius: 25px; /* Bordes redondeados */
  }
  
  .label-success {
    background-color: #5cb85c;
  }
  
  .btn-large-font {
    font-size: 14px; /* Ajusta el tamaño de la fuente del botón */
  }

  .btn-group a {
    margin-right: 5px; /* Ajusta el espaciado entre los botones */
  }

  .btn-group a:last-child {
    margin-right: 0; /* Elimina el margen derecho del último botón */
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
     <?php echo display_msg($msg); ?>
   </div>
</div>
<div class="row">
  <div class="col-md-12">
    <div class="panel panel-default">
      <div class="panel-heading">
        <div class="panel-heading clearfix">
          <strong>
            <span class="glyphicon glyphicon-th-large"></span>
            <span>Grupos</span>
          </strong>
          <a href="add_group.php" class="btn btn-info pull-right btn-sm btn-custom btn-large-font">Agregar grupo</a>
        </div>
      </div>
      <div class="panel-body">
        <table class="custom-table">
          <thead>
            <tr>
              <th class="text-center" style="width: 50px;">#</th>
              <th>Nombre del grupo</th>
              <th class="text-center" style="width: 20%;">Nivel del grupo</th>
              <th class="text-center" style="width: 15%;">Estado</th>
              <th class="text-center" style="width: 100px;">Acciones</th>
            </tr>
          </thead>
          <tbody>
            <?php if ($all_groups->num_rows > 0): ?>
              <?php foreach($all_groups as $a_group): ?>
                <tr>
                  <td class="text-center"><?php echo count_id();?></td>
                  <td><?php echo remove_junk(ucwords($a_group['group_name']))?></td>
                  <td class="text-center">
                    <?php echo remove_junk(ucwords($a_group['group_level']))?>
                  </td>
                  <td class="text-center">
                    <?php if($a_group['group_status'] === '1'): ?>
                      <span class="label label-success label-custom"><?php echo "Activo"; ?></span>
                    <?php else: ?>
                      <span class="label label-danger label-custom"><?php echo "Inactivo"; ?></span>
                    <?php endif;?>
                  </td>
                  <td class="text-center">
                    <div class="btn-group">
                      <a href="edit_group.php?id=<?php echo (int)$a_group['id'];?>" class="btn-lg btn-warning btn-custom" data-toggle="tooltip" title="Editar">
                        <i class="glyphicon glyphicon-pencil"></i>
                      </a>
                      <a href="delete_group.php?id=<?php echo (int)$a_group['id'];?>" class="btn-lg btn-danger btn-custom" data-toggle="tooltip" title="Eliminar">
                        <i class="glyphicon glyphicon-remove"></i>
                      </a>
                    </div>
                  </td>
                </tr>
              <?php endforeach;?>
            <?php else: ?>
              <tr><td colspan="5">No hay grupos registrados.</td></tr>
            <?php endif; ?>
          </tbody>
        </table>

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

<?php include_once('layouts/footer.php'); ?>
