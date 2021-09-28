<?php
    class templateControllerClass {

        public function GetTemplate() {
            include 'Views/template.php';
        }
        
        public function linktemplateController() {
            $template = templateModelClass::linkModel($_GET["action"]);
            include $template;
        }
    }
?>