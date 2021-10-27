<?php
require_once '../model/concepto.model.php';


class ConceptoControlador
{

    public function registarConcepto($pArray)
    {
        $concepto = new Concepto;

        return $pArray;
    }

    public function consultaGeneral()
    {
        $objConcepto = array('concepto_key' => 0
                        ,'clave' => ""
                        ,'descripcion' => ""
                        ,'estatus' => "");
        $ArrData  = array($objConcepto);



        return $ArrData;
    }

    
}
