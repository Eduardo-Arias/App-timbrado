<?php
class SatRoute {
    public function conceptos()
    {
        return array('title_page' => "Conceptos sat"
                    ,'child_page' => "conceptos");

    }

    public function registrarConcepto()
    {
        return array('title_page' => "Registrar concepto"
                    ,'child_page' => "formulario_concepto" );
    }
    

    public function peridicidadPago()
    {
        echo "Hola desde la clase SatRoute y desde la funcion conceptos";
        return array('title_page' => "Riesgos de trabajo"
                    ,'child_page' => "");
    }

}

?>