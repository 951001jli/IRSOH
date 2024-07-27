<?php
  $page_title = 'Agregar usuarios';
  require_once('includes/load.php');
  // Checkin What level user has permission to view this page
  page_require_level(1);
  $groups = find_all('user_groups');
?>
<?php
  if(isset($_POST['add_user'])){

   $req_fields = array('full-name','username','password','level' );
   validate_fields($req_fields);

   if(empty($errors)){
           $name   = remove_junk($db->escape($_POST['full-name']));
       $username   = remove_junk($db->escape($_POST['username']));
       $password   = remove_junk($db->escape($_POST['password']));
       $user_level = (int)$db->escape($_POST['level']);
       $password = sha1($password);
        $query = "INSERT INTO users (";
        $query .="name,username,password,user_level,status";
        $query .=") VALUES (";
        $query .=" '{$name}', '{$username}', '{$password}', '{$user_level}','1'";
        $query .=")";
        if($db->query($query)){
          //sucess
          $session->msg('s'," Cuenta de usuario ha sido creada");
          redirect('add_user.php', false);
        } else {
          //failed
          $session->msg('d',' No se pudo crear la cuenta.');
          redirect('add_user.php', false);
        }
   } else {
     $session->msg("d", $errors);
      redirect('add_user.php',false);
   }
 }
?>
<?php include_once('layouts/header.php'); ?>
  <?php echo display_msg($msg); ?>
  

  <style>
  .custom-form-control {
    font-size: 15px; /* Ajusta el tamaño de la fuente según tus necesidades */
    border-radius: 25px; /* Radio de bordes redondeados */
    padding: 12px; /* Espaciado interno para mayor comodidad */
  }

  .btn-custom {
    font-size: 15px; /* Ajusta el tamaño de la fuente del botón */
    border-radius: 25px; /* Radio de bordes redondeados para el botón */ 
  }

  /* Redondea los bordes del formulario */
  .panel-body form {
    border-radius: 25px; /* Redondea los bordes del formulario */
    padding: 20px; /* Añade un poco de espacio interno alrededor del formulario */
    border: 0px solid #ddd; /* Añade un borde gris claro alrededor del formulario */
  }
 


</style>



  <div class="col-md-12">
  <div class="panel panel-default">
    <div class="panel-heading">
      <div class="panel-heading clearfix">
        <strong>
          <span class="glyphicon glyphicon-th"></span>
          <span>Agregar usuario</span>
        </strong>
      </div>
    </div>
    <div class="panel-body">
      <form method="post" action="add_user.php">
        <div class="form-group mb-3">
          <label for="name"><h3>Nombre</h3></label>
          <input type="text" class="form-control custom-form-control" name="full-name" placeholder="Nombre completo" required>
        </div>
        <div class="form-group mb-3">
          <label for="username"><h3>Usuario</h3></label>
          <input type="text" class="form-control custom-form-control" name="username" placeholder="Nombre de usuario">
        </div>
        <div class="form-group mb-3">
          <label for="password"><h3>Contraseña</h3></label>
          <input type="password" class="form-control custom-form-control" name="password" placeholder="Contraseña">
        </div>
        <div class="form-group mb-3">
          <label for="level"><h3>Rol de usuario</h3></label>
          <select class="form-control custom-form-control" name="level">
            <?php foreach ($groups as $group): ?>
              <option value="<?php echo $group['group_level']; ?>"><?php echo ucwords($group['group_name']); ?></option>
            <?php endforeach; ?>
          </select>
        </div>
        <div class="form-group clearfix">
          <br>
          <button type="submit" name="add_user" class="btn btn-primary btn-custom">Guardar</button>
        </div>
      </form>
    </div>
  </div>
</div>

<?php include_once('layouts/footer.php'); ?>
