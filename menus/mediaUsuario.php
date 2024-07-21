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
}
?>
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
</style>

<div class="row">
    <div class="col-md-6">
        <?php echo display_msg($msg); ?>
    </div>
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading clearfix">
                <span class="glyphicon glyphicon-picture"></span>
                <span>Imágenes</span>
                <div class="pull-right">
                    <form class="form-inline" action="media.php" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <div class="input-group">
                                <!-- Add input elements here if needed -->
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="panel-body">
                <div class="row">
                    <?php foreach ($media_files as $media_file): ?>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="card mb-4">
                            <img src="uploads/products/<?php echo $media_file['file_name']; ?>" class="card-img-top img-thumbnail" alt="<?php echo $media_file['file_name']; ?>" data-bs-toggle="modal" data-bs-target="#imageModal" data-bs-image="uploads/products/<?php echo $media_file['file_name']; ?>">
                            <div class="card-body">
                                <h5 class="card-title text-center"><?php echo $media_file['file_name']; ?></h5>
                                <p class="card-text text-center"><?php echo $media_file['file_type']; ?></p>
                                <div class="text-center">
                                    <a href="uploads/products/<?php echo $media_file['file_name']; ?>" download class="btn btn-primary btn-sm" title="Descargar">
                                        <span class="glyphicon glyphicon-download"></span> Descargar
                                    </a>
                                </div> <br>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div><br> <br> <br>
    </div>
</div>

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
