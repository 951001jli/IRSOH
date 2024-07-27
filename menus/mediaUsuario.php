<?php
$page_title = 'Lista de imágenes';
require_once('includes/load.php');
// Checkin What level user has permission to view this page
page_require_level(2);
?>
<?php $media_files = find_all('media'); ?>
<?php
if (isset($_POST['submit'])) {
    $photo = new Media();
    $photo->upload($_FILES['file_upload']);
    if ($photo->process_media()) {
        $session->msg('s', 'Imagen subida al servidor.');
        redirect('media.php');
    } else {
        $session->msg('d', join($photo->errors));
        redirect('media.php');
    }
}?>
<?php include_once('layouts/header.php'); ?>

<!-- Asegúrate de que estos enlaces estén incluidos en tu header -->
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>

<style>
    .card-img-top {
        width: 100%;
        height: 200px;
        object-fit: cover;
    }
    
    .card {
        border: none;
        border-radius: 15px;
        overflow: hidden;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        transition: box-shadow 0.3s ease;
    }
    
    .card:hover {
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.3);
    }

    .card-body {
        background-color: #f8f9fa;
        padding: 1rem;
    }

    .card-title {
        font-size: 15px; /* Tamaño del texto ajustado a 15px */
        margin-bottom: 0.5rem;
        color: black; /* Color negro para el nombre del archivo */
    }

    .card-text {
        color: black; /* Color negro para el tipo de archivo */
    }

    .btn-download {
        font-size: 14px;
        border-radius: 20px;
    }

    .modal-content {
        border-radius: 15px;
    }

    .title-black {
        color: black; /* Color negro para el título */
    }
</style>



<div class="container my-5">
    <?php echo display_msg($msg); ?>
    
    <div class="text-center mb-4">
        <h2 class="fw-bold title-black" >Galería de Imágenes</h2>
    </div>
    <br>
    <div class="row">
        <?php foreach ($media_files as $media_file): ?>
        <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
            <div class="card">
                <img src="uploads/products/<?php echo $media_file['file_name']; ?>" class="card-img-top" alt="<?php echo $media_file['file_name']; ?>" data-bs-toggle="modal" data-bs-target="#imageModal" data-bs-image="uploads/products/<?php echo $media_file['file_name']; ?>">
                <div class="card-body text-center">
                    <h5 class="card-title"><?php echo $media_file['file_name']; ?></h5>
                    
                    <a href="uploads/products/<?php echo $media_file['file_name']; ?>" download class="btn btn-primary btn-download" title="Descargar">
                        Descargar
                    </a>
                    
                </div>
                
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</div>
<br>

<!-- Modal -->
<div class="modal fade" id="imageModal" tabindex="-1" aria-labelledby="imageModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <img id="modalImage" src="" class="img-fluid" alt="Imagen">
      </div>
    </div>
  </div>
</div>

<script>
    var imageModal = document.getElementById('imageModal');
    imageModal.addEventListener('show.bs.modal', function (event) {
        var button = event.relatedTarget;
        var imageSrc = button.getAttribute('data-bs-image');
        var modalImage = document.getElementById('modalImage');
        modalImage.src = imageSrc;
    });
</script>

<?php include_once('layouts/footer.php'); ?>
