<?php
require_once '../controller/concepto.controller.php';

$objConceptoController = new ConceptoControlador();
$datos = $_POST["data"];
$accion= $_POST["accion"];

//$respuesta = call_user_func(array($objConceptoController,$accion,$datos));
$respuesta = $objConceptoController->$accion($datos);

echo json_encode($respuesta);
