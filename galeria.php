<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galeria de Imagenes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <!-- MENU -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
      <a class="navbar-brand" href="administrador.html">IRSOH</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
        <li class="nav-item">
              <a class="nav-link" href="#">Control</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="galeria.php">Galeria</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Usuario</a>
            </li>
          <li class="nav-item">
            <button class="btn btn-primary" type="button">Cerrar Sesión</button>
          </li>
        </ul>
      </div>
    </div>
  </nav>
    <h1 class="text-center text-secondary font-weight-bold p-4">Galeria de Imagenes de Usuarios</h1>

    <!-- MODAL DE BOTON DE REGISTRO -->
    <!-- Button trigger modal -->
    <div class="mx-5">
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Nueva
        </button>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Nuevo Registro</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="" enctype="multipart/form-data">
                        <input type="file" class="form-control" name="imagen">
                        <input type="text" class="form-control" name="titulo">
                        <input type="submit" value="Subir" name="btnsubir" class="form-control btn btn-success">
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
    <!-- PHP PARA CONSULTA DE IMAGENES -->
    <?php
    require "php/conexion_be.php";
    $sql = $conexion->query("select * from img");
    ?>
    <div class="d-flex justify-content-between flex-wrap mx-5">
        <!--Trjeta de imagenes-->
        <?php
        while ($datos = $sql->fetch_object()) { ?>
            <div class="card mt-3 flex-item mx-2 bg-light p-2" style="width: 18rem;">
                <img src="..." class="card-img-top " alt="...">
                <div class="card-body">
                    <h5 class="card-title"><?= $datos->titulo_img ?></h5>
                    <a href="#" class="btn btn-warning me-1"><i class="fa-solid fa-pen-to-square"></i></a>
                    <a href="#" class="btn btn-danger"><i class="fa-solid fa-trash"></i></a>
                    <div class="container mt-1 position-relative">
                        <div class="position-absolute bottom-0 end-0 p-2 text-dark">
                            <h6>#<?= $datos->id_img ?></h6>
                        </div>
                    </div>
                </div>
            </div>
        <?php }
        ?>
    </div>

    <script src="https://kit.fontawesome.com/1fc2543a6c.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>