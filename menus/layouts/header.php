<?php $user = current_user(); ?>
<!DOCTYPE html>
  <html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php if (!empty($page_title))
           echo remove_junk($page_title);
            elseif(!empty($user))
           echo ucfirst($user['name']);
            else echo "Sistema IRSOH";?>
    </title>
	
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="/cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker3.min.css" />
    <link rel="stylesheet" href="libs/css/main.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    </head>
  <body>
  <?php  if ($session->isUserLoggedIn(true)): ?>
    <header id="header">

    <div class="logo pull-left">
    <img src="http://localhost/irsoh/img/capturalogo.png" alt="IRSOH Logo" class="img-fluid" style="width: 98px; height: 30px;">

    </div>

      <div class="header-content">
       
      <div class="pull-right clearfix">
        <ul class="info-menu list-inline list-unstyled">
          <li class="profile">
            <a href="#" data-toggle="dropdown" class="toggle" aria-expanded="false">
              <img src="uploads/users/<?php echo $user['image'];?>" alt="user-image" class="img-circle img-inline">
              <span><?php echo remove_junk(ucfirst($user['name'])); ?> <i class="caret"></i></span>
            </a>
            <ul class="dropdown-menu">
               
             <li>
                 <a href="edit_account.php" title="edit account">
                     <i class="glyphicon glyphicon-cog"></i>
                     Configuración
                 </a>
             </li>
             <li class="last">
                 <a href="logout.php">
                     <i class="glyphicon glyphicon-off"></i>
                     Salir
                 </a>
             </li>
           </ul>
          </li>
        </ul>
      </div>
     </div>
    </header>

   
    <div>
      
      <?php if($user['user_level'] === '1'): ?>
        <!-- admin menu -->
      <?php include_once('admin_menu.php');?>

      <?php elseif($user['user_level'] === '2'): ?>
        <!-- Special user -->
      <?php include_once('special_menu.php');?>

      <?php elseif($user['user_level'] === '3'): ?>
        <!-- User menu -->
      <?php include_once('user_menu.php');?>

      <?php endif;?>

   </div>
<?php endif;?>



<div class="page">
  <br>
 
  <div class="container-fluid">


 