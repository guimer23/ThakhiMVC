<?php
namespace App\Controllers;

class LoginController {
    private $usuario;
    private $profesion;
    private $empleado;

    public function __construct(){
        $this->usuario = new \App\Models\Usuario;
        //$this->profesion = new \App\Models\Profesion;
        $this->empleado = new \App\Models\Empleado;
    }

    public function index() {    
        
        require_once _VIEW_PATH_ .'login/index.php';      
    }
    public function logear() {     
     

        if(!empty($_POST['USUemail'])) {
            $model = $this->usuario->logear($_POST['USUemail']);
            $model = $this->empleado->listar();
   
            require_once _VIEW_PATH_ . 'header.php';
            require_once _VIEW_PATH_ .'home/index.php';
            require_once _VIEW_PATH_ . 'footer.php';
        }else{
            require_once _VIEW_PATH_ .'login/index.php';
        }

       // 
      
    }


  

    

   
}