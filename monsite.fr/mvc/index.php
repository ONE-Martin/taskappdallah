<?php
  require_once('connect.php');
  if (isset($_GET['controller']) && isset($_GET['action'])){
   $controller= $_GET['controller'];
   $action=$_GET['action'];

  } else {
   $controller='pages';
   $action='home';

  }

  //echo 'hello';
  require_once('views/layout.php');

?>
