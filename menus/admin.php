<?php
  $page_title = 'Admin página de inicio';
  require_once('includes/load.php');
  // Checkin What level user has permission to view this page
  page_require_level(1);
?>
<?php
 $c_categorie     = count_by_id('categories');
 $c_product       = count_by_id('products');
 $c_sale          = count_by_id('sales');
 $c_user          = count_by_id('users');
 $products_sold   = find_higest_saleing_product('10');
 $recent_products = find_recent_product_added('5');
 $recent_sales    = find_recent_sale_added('5');
?>
<?php include_once('layouts/header.php'); ?>

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
            // Conexión a la base de datos
            $servername = "localhost";
            $username = "root"; // Reemplaza con tu usuario de MySQL
            $password = ""; // Reemplaza con tu contraseña de MySQL
            $database = "oswa_inv"; // Reemplaza con el nombre de tu base de datos

            $conn = new mysqli($servername, $username, $password, $database);

            // Verifica la conexión
            if ($conn->connect_error) {
                die("Conexión fallida: " . $conn->connect_error);
            }

            // Consulta SQL para seleccionar todos los comentarios de la tabla contactanos
            $sql = "SELECT nombre, email, asunto, mensaje FROM contactanos";
            $result = $conn->query($sql);

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
    </div>
  </div>
</div>

<?php include_once('layouts/footer.php'); ?>
