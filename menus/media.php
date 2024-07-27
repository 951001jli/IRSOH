<?php
$page_title = 'Lista de imagenes';
require_once('includes/load.php');
// Checkin What level user has permission to view this page
page_require_level(2);
?>
<?php $media_files = find_all('media');?>
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
<style>
    .custom-table {
        border-collapse: collapse;
        width: 100%; 
        font-size: 15px; /* Ajusta el tamaño de la fuente de la tabla */
    }

    .custom-table th,
     {
        border: none; /* Elimina los bordes de las celdas */
        padding: 8px;
        text-align: center;
    }

    .custom-table tr {
        border-bottom: 1px solid #ddd; /* Línea divisoria entre las filas */
    }

    .custom-table tr:last-child {
        border-bottom: none; /* Elimina la línea divisoria en la última fila */
    }

    .custom-table thead th {
       
        font-weight: bold;
    }

    .btn-custom, 
 

  .btn-group .btn {
    border-radius: 25px; /* Bordes redondeados */
  }

  .form-control, .btn {
    border-radius: 25px; /* Bordes redondeados */
  }

  
</style>
<div class="row">
  <div class="col-md-6">
    <?php echo display_msg($msg); ?>
  </div>

  <div class="col-md-12">
    <div class="panel panel-default">
      <div class="panel-heading">
        <div class="panel-heading clearfix">
          <span class="glyphicon glyphicon-picture"></span>
          <span>Lista de imagenes</span>
          <div class="pull-right">
            <form class="" action="media.php" method="POST" enctype="multipart/form-data">
              <div class="">
                <div class="input-group">
                  <input type="file" name="file_upload" multiple="multiple" class="" id="fileUpload" />
                  <span class="">
                    <button type="submit" name="submit" class="btn-primary">Subir</button>
                  </span>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>

      <div class="panel-body">
        <div class="table-responsive"> <!-- Added responsive wrapper -->
          <table class="table custom-table">
            <thead>
              <tr>
                <th>Imagen</th>
                <th>Nombre imágen</th>
                 
                <th style="width: 50px;">Acciones</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($media_files as $media_file): ?>
                <tr>
                  <td>
                    <img src="uploads/products/<?php echo $media_file['file_name'];?>" class="img-thumbnail" />
                  </td>
                  <td>
                    <?php echo $media_file['file_name'];?>
                  </td>
                 
                  <td>
                    <a href="delete_media.php?id=<?php echo (int) $media_file['id'];?>" class="btn btn-danger btn-lg btn-custom" title="Eliminar">
                      <span class="glyphicon glyphicon-trash"></span>
                    </a>
                  </td>
                </tr>
              <?php endforeach;?>
            </tbody>
          </table>
        </div> <!-- End of table-responsive -->
      </div>
    </div>
  </div>
</div>

<?php include_once('layouts/footer.php'); ?>
