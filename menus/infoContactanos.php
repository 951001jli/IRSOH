 

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comentarios de Contacto</title>
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
</head>
<body>
    <h2>Comentarios de Contacto</h2>
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
</body>
</html>

 