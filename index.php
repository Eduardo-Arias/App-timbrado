<?php
require_once 'routes/main.route.php';
$route = new MainRoute();

// Todo esta lógica hara el papel de un FrontController
if (!isset($_REQUEST['a'])) {
  //Llamado de la página principal
  $route->principal();
} else {
  $accion = isset($_REQUEST['a']) ? $_REQUEST['a'] : 'principal';
  call_user_func(array($route, $accion));
}
