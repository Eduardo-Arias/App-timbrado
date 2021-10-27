<?php


class MainRoute {


    public function principal()
    {
        $contentPage = "templates/principal.php";
        $titlePage = "Inicio";
        require_once 'views/template.php';
    }

    public function sat()
    {
        $titlePage = "Inicio";
        $childPage = '';
        // Llama la accion
        if (isset($_REQUEST['sa']) ) {
            require_once 'sat.route.php';
            $subAccion = $_REQUEST['sa'];
            $sat = new SatRoute;
            $params = call_user_func(array($sat, $subAccion));
            $titlePage = $params['title_page'];
            $childPage = $params['child_page'];
        }
        $contentPage = 'views/catalogos/sat/main_sat.php';
        require_once 'views/template.php';
    }

    public function nomina()
    {
        $contentPage = "templates/principal.php";
        $titlePage = "Inicio";
        require_once 'views/template.php';
    }
}

?>