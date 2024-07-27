<?php
  $page_title = 'Editar Cuenta';
  require_once('includes/load.php');
  page_require_level(3);
?>
<?php
//update user image
  if(isset($_POST['submit'])) {
    $photo = new Media();
    $user_id = (int)$_POST['user_id'];
    $photo->upload($_FILES['file_upload']);
    if($photo->process_user($user_id)){
      $session->msg('s','La foto fue subida al servidor.');
      redirect('edit_account.php');
    } else{
      $session->msg('d',join($photo->errors));
      redirect('edit_account.php');
    }
  }
?>
<?php
 //update user other info
  if(isset($_POST['update'])){
    $req_fields = array('name','username' );
    validate_fields($req_fields);
    if(empty($errors)){
      $id = (int)$_SESSION['user_id'];
      $name = remove_junk($db->escape($_POST['name']));
      $username = remove_junk($db->escape($_POST['username']));
      $sql = "UPDATE users SET name ='{$name}', username ='{$username}' WHERE id='{$id}'";
      $result = $db->query($sql);
      if($result && $db->affected_rows() === 1){
        $session->msg('s',"Cuenta actualizada. ");
        redirect('edit_account.php', false);
      } else {
        $session->msg('d',' Lo siento, actualización falló.');
        redirect('edit_account.php', false);
      }
    } else {
      $session->msg("d", $errors);
      redirect('edit_account.php',false);
    }
  }
?>

<?php include_once('layouts/header.php'); ?>

<style>
  .form-control, .input-group, .btn {
    border-radius: 25px; /* Bordes redondeados */
  }

  /* Ajusta el tamaño del texto en los campos de formulario */
  .form-control, .input-group input, .input-group select, .input-group textarea, .btn {
    font-size: 15px;
  }
</style>

<div class="row">
  <div class="col-md-12">
    <?php echo display_msg($msg); ?>
  </div>
  <div class="col-md-12 mb-4">
    <div class="panel panel-default">
      <div class="panel-heading">
        <div class="panel-heading clearfix">
          <span class="glyphicon glyphicon-camera"></span>
          <span>Cambiar mi foto</span>
        </div>
      </div>

      <div class="panel-body">
        <div class="row">
          <div class="col-md-4">
            <img class="img-circle img-size-2" src="uploads/users/<?php echo $user['image'];?>" alt=""  style="width: 200px; height: 200px;"><br><br><br>
          </div>

          <div class="col-md-6">
            <form class="form" action="edit_account.php" method="POST" enctype="multipart/form-data">
              <div class="form-group mb-3">
                <div class="input-group">
                  <input type="file" name="file_upload" multiple="multiple" class="" id="fileUpload" />
                  <span class="">
                    <button type="submit" name="submit" class="btn btn-warning btn-lg">Cambiar</button>
                  </span>
                </div>
              </div>
              <input type="hidden" name="user_id" value="<?php echo $user['id'];?>">
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="col-md-12">
    <div class="panel panel-default">
      <div class="panel-heading">
        <div class="panel-heading clearfix">
          <span class="glyphicon glyphicon-edit"></span>
          <span>Editar mi cuenta</span>
        </div>
      </div>
      <div class="panel-body">
        <form method="post" action="edit_account.php?id=<?php echo (int)$user['id'];?>" class="clearfix">
          <div class="form-group">
            <label for="name" class="control-label"><h3>Nombres</h3></label>
            <input type="name" class="form-control" name="name" value="<?php echo remove_junk(ucwords($user['name'])); ?>">
          </div>
          <div class="form-group">
            <label for="username" class="control-label"><h3>Usuario</h3></label>
            <input type="text" class="form-control" name="username" value="<?php echo remove_junk(ucwords($user['username'])); ?>">
          </div>
          <br>
          <div class="form-group clearfix">
            <a href="change_password.php" title="change password" class="btn btn-danger pull-right">Cambiar contraseña</a>
            <button type="submit" name="update" class="btn btn-info">Actualizar</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<br>
<br>
<br>
<br>
<?php include_once('layouts/footer.php'); ?>
