<?php 
include 'vista/plantilla.php';

$page = @$_GET['page'];

$class = new Pages;
$class->plantilla($page);


?>


