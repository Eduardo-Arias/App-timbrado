<?php
require_once "config/conexion.php";

$route = 'main';
// Todo esta lógica hara el papel de un FrontController
if (!isset($_REQUEST['c'])) {
  //Llamado de la página principal

  /*Contrusccion de la ruta de la clase controlador*/
  require_once "routes/$route.route.php";
  /* Contruccion de la clase controlador */
  $route = ucwords($route) . 'Route';
  /* Instancia de la clase controlador */
  $route = new $route;
  /* Accede al metodo Index para mostrar la pagina principal */
  $route->principal();
} else {
  
  // Obtiene el controlador a cargar
  $route = strtolower($_REQUEST['c']);
  $accion = isset($_REQUEST['a']) ? $_REQUEST['a'] : 'Index';
  // Instancia el controlador
  require_once "./routes/$route.route.php";
  $route = ucwords($route) . 'Route';
  $route = new $route;
  // Llama la accion
  call_user_func(array($route, $accion));
}
