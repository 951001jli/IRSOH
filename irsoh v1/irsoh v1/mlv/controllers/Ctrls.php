<?php 
include 'views/templates.php';

$page = @$_GET['page'];

$class = new Pages;
$class->templates($page);


?>


