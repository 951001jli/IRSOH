<?php
$page_title = 'Lista de usuarios';
require_once('includes/load.php');
// Check user permissions
page_require_level(1);

// Variables de paginación
$results_per_page = 7; // Número de resultados por página
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$start_from = ($page - 1) * $results_per_page;

// Obtener el número total de usuarios
$servername = "localhost";
$username = "root"; // Reemplaza con tu usuario de MySQL
$password = ""; // Reemplaza con tu contraseña de MySQL
$database = "oswa_inv"; // Reemplaza con el nombre de tu base de datos

$conn = new mysqli($servername, $username, $password, $database);

// Verifica la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Consulta para contar el número total de usuarios
$count_sql = "SELECT COUNT(*) AS total FROM users";
$count_result = $conn->query($count_sql);
$total_rows = $count_result->fetch_assoc()['total'];
$total_pages = ceil($total_rows / $results_per_page);

// Consulta SQL para seleccionar los usuarios con paginación
$sql = "SELECT * FROM users LIMIT $start_from, $results_per_page";
$all_users = $conn->query($sql);

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
            <span class="glyphicon glyphicon-user"></span>
            <span>Usuarios</span>
          </strong>
          <a href="add_user.php" class="btn btn-info pull-right btn-custom btn-large-font">Agregar usuario</a>
        </div>
      </div>
      <div class="panel-body">
        <div class="table-responsive">
          <table class="table custom-table">
            <thead>
              <tr>
                <th class="text-center" style="width: 50px;">#</th>
                <th>Nombre</th>
                <th>Usuario</th>
                <th class="text-center" style="width: 15%;">Rol de usuario</th>
                <th class="text-center" style="width: 10%;">Estado</th>
                <th style="width: 20%;">Último login</th>
                <th class="text-center" style="width: 100px;">Acciones</th>
              </tr>
            </thead>
            <tbody>
              <?php if ($all_users->num_rows > 0): ?>
                <?php foreach($all_users as $a_user): ?>
                  <tr>
                    <td class="text-center"><?php echo count_id();?></td>
                    <td><?php echo remove_junk(ucwords($a_user['name']))?></td>
                    <td><?php echo remove_junk(ucwords($a_user['username']))?></td>
                    <td class="text-center"><?php echo remove_junk(ucwords($a_user['group_name']))?></td>
                    <td class="text-center">
                      <?php if($a_user['status'] === '1'): ?>
                        <span class="label label-success label-custom"><?php echo "Activo"; ?></span>
                      <?php else: ?>
                        <span class="label label-danger label-custom"><?php echo "Inactivo"; ?></span>
                      <?php endif;?>
                    </td>
                    <td><?php echo read_date($a_user['last_login'])?></td>
                    <td class="text-center">
                      <div class="btn-group">
                        <a href="edit_user.php?id=<?php echo (int)$a_user['id'];?>" class="btn-lg btn-warning btn-custom" data-toggle="tooltip" title="Editar">
                          <i class="glyphicon glyphicon-pencil"></i>
                        </a>
                        <a href="delete_user.php?id=<?php echo (int)$a_user['id'];?>" class="btn-lg btn-danger btn-custom" data-toggle="tooltip" title="Eliminar">
                          <i class="glyphicon glyphicon-remove"></i>
                        </a>
                      </div>
                    </td>
                  </tr>
                <?php endforeach;?>
              <?php else: ?>
                <tr><td colspan="7">No hay usuarios registrados.</td></tr>
              <?php endif; ?>
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
</div>

<?php include_once('layouts/footer.php'); ?>
