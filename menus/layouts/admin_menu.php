

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrador</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<style>

body {
    margin: 0;
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
}

.sidebar {
    height: 100vh;
    width: 250px;
    position: fixed;
    top: 10px;
    left: 0;
    background-color: #2f4f6f;
    display: flex;
    flex-direction: column;
    transition: width 0.3s ease;
}

 

.sidebar a {
    padding: 15px 20px;
    text-decoration: none;
    font-size: 19px;
    color: white;
    display: flex;
    align-items: center;
    transition: 0.3s;
}

.sidebar a:hover {
    background-color: #1f3f5f;
}

.sidebar a i {
    margin-right: 10px;
}

.sidebar a span {
    display: inline-block;
}

 

.page {
    margin-left: 250px;
    padding: 20px;
    transition: margin-left 0.3s ease;
}

@media screen and (max-width: 768px) {
    .sidebar {
        width: 60px;
    }

    .sidebar a span {
        display: none;
    }

    .sidebar a {
        justify-content: center;
    }

    .sidebar a i {
        margin-right: 0;
    }

    .page {
        margin-left: 60px;
    }
}

@media screen and (max-width: 576px) {
    .sidebar {
        height: 60px;
        width: 100%;
        flex-direction: row;
        bottom: 0;
        top: auto;
        left: 0;
        right: 0;
        justify-content: space-around;
    }

    .sidebar a {
        flex: 1;
        justify-content: center;
        padding: 15px 0;
    }

    .page {
        margin-left: 0;
        margin-bottom: 60px;
    }
}


</style>

<body>
    <div class="sidebar">
        <a href="admin.php" class="active"><i class="glyphicon glyphicon-align-center"></i><span>Comentarios</span></a>
        <a href="users.php"><i class="glyphicon glyphicon-user"></i><span>Usuarios</span></a>
        <a href="group.php"><i class="glyphicon glyphicon-th-large"></i><span>Grupos</span></a>
        <a href="/IRSOH/vistaCitas.php"><i class="glyphicon glyphicon-list-alt"></i><span>Citas</span></a>
        <a href="media.php"><i class="glyphicon glyphicon-picture"></i><span>Galería</span></a>
    </div>
</body>
</html>

