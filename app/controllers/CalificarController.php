<?php
    namespace App\Controllers;

    class CalificarController{

        public function __construct(){
 
        }

        public function index() {
            //$model = $this->usuario->listar();
            //  $model = $this->empleado->listar();
            require_once _VIEW_PATH_ . 'header.php';
            require_once _VIEW_PATH_ .'calificar/index.php';
            require_once _VIEW_PATH_ . 'footer.php';
        }
    
    }
?>