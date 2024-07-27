<?php
  $page_title = 'Agregar grupo';
  require_once('includes/load.php');
  // Checkin What level user has permission to view this page
  page_require_level(1);
?>
<?php
  if(isset($_POST['add'])){

   $req_fields = array('group-name','group-level');
   validate_fields($req_fields);

   if(find_by_groupName($_POST['group-name']) === false ){
     $session->msg('d','<b>Error!</b> El nombre de grupo ya existe en la base de datos');
     redirect('add_group.php', false);
   } elseif(find_by_groupLevel($_POST['group-level']) === false) {
     $session->msg('d','<b>Error!</b> El nivel de grupo ya existe en la base de datos');
     redirect('add_group.php', false);
   }
   
   if(empty($errors)){
     $name = remove_junk($db->escape($_POST['group-name']));
     $level = remove_junk($db->escape($_POST['group-level']));
     $status = remove_junk($db->escape($_POST['status']));

     $query  = "INSERT INTO user_groups (";
     $query .="group_name,group_level,group_status";
     $query .=") VALUES (";
     $query .=" '{$name}', '{$level}','{$status}'";
     $query .=")";
     
     if($db->query($query)){
       $session->msg('s',"¡Grupo ha sido creado! ");
       redirect('add_group.php', false);
     } else {
       $session->msg('d','Lamentablemente no se pudo crear el grupo.');
       redirect('add_group.php', false);
     }
   } else {
     $session->msg("d", $errors);
     redirect('add_group.php', false);
   }
 }
?>
<?php include_once('layouts/header.php'); ?>

<style>
  .login-page {
    max-width: 600px;
    margin: 0 auto;
    padding: 20px;
  }
  
  .form-control {
    border-radius: 10px; /* Bordes redondeados para los controles del formulario */
    font-size: 15px; /* Tamaño de letra de los controles del formulario */
    margin-bottom: 15px; /* Espaciado entre los controles */
  }
  
  .btn-info {
    border-radius: 25px; /* Bordes redondeados del botón */
    font-size: 15px; /* Tamaño de letra del botón */
  }
  
  .form-group label {
    font-size: 15px; /* Tamaño de letra de las etiquetas del formulario */
    margin-bottom: 5px; /* Espaciado debajo de las etiquetas */
    display: block;
  }

  .text-center h3 {
    font-size: 15px; /* Tamaño de letra del título */
    margin-bottom: 20px; /* Espaciado debajo del título */
  }
</style>



<div class="login-page">
    <div class="text-center">
      <br>
      <h2>Agregar nuevo grupo de usuarios</h2>
      <br>
    </div>
    <?php echo display_msg($msg); ?>
    <form method="post" action="add_group.php" class="clearfix">
      <div class="form-group">
        <label for="name" class="control-label">Nombre del grupo</label>
        <input type="text" class="form-control" name="group-name" required>
      </div>
      <div class="form-group">
        <label for="level" class="control-label">Nivel del grupo</label>
        <input type="number" class="form-control" name="group-level">
      </div>
      <div class="form-group">
        <label for="status">Estado</label>
        <select class="form-control" name="status">
          <option value="1">Activo</option>
          <option value="0">Inactivo</option>
        </select>
      </div>
      <div class="form-group clearfix">
      <br>
        <button type="submit" name="add" class="btn btn-info">Guardar</button>
      </div>
    
    </form>
</div>

<?php include_once('layouts/footer.php'); ?>
