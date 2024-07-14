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
 $recent_sales    = find_recent_sale_added('5')
?>
<?php include_once('layouts/header.php'); ?>

<div class="row">
   <div class="col-md-6">
     <?php echo display_msg($msg); ?>
   </div>
</div>

  

  <div class="col-md-10">
 
        <strong>
         
          <h3>Comentarios</h3>
        </strong>
 

      <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid #ddd;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
 
    
    <table>
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
 
 
  



<?php include_once('layouts/footer.php'); ?>
