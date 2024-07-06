<?php
// Datos de conexión
private $host = 'localhost';
private $db_name = 'irsoh_db';
private $username = 'root';
private $password = '';
public $conn;

// Configurar DSN (Data Source Name)
$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

try {
    // Crear una nueva instancia de PDO
    $pdo = new PDO($dsn, $user, $pass, $options);
} catch (\PDOException $e) {
    throw new \PDOException($e->getMessage(), (int)$e->getCode());
}

// Consulta para obtener los nombres de las imágenes
$stmt = $pdo->query('SELECT nombre_imagen FROM imagenes');
$imagenes = $stmt->fetchAll();

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard de Imágenes</title>
</head>
<body>
    <h1>Dashboard de Imágenes</h1>
    <div class="imagenes">
        <?php foreach ($imagenes as $imagen): ?>
            <div class="imagen">
            <img src="ruta_a_tu_carpeta_de_imagenes/<?php echo htmlspecialchars($imagen['nombre_imagen']); ?>" alt="Imagen">
            </div>
        <?php endforeach; ?>
    </div>
</body>
</html>