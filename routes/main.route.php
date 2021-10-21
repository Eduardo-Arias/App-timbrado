<?php


class MainRoute {


    public function principal()
    {
        $contentPage = "principal.php";
        $titlePage = "Inicio";
        require_once "views/templates/template.php";
    }
    
}

?>