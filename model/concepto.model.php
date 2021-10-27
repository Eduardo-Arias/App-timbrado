<?php
require_once '../config/conexion.php';
class Concepto 
{
    private $con = null;
    

    public function __construct() {
        $this->con = DataBase::getInstance();
    }


    public function registrar() {
        
    }

}

?>