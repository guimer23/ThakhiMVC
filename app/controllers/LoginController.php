<?php
namespace App\Controllers;

class LoginController {
    private $usuario;    

    public function __construct(){
        $this->usuario = new \App\Models\Usuario;       
    }

    public function index() {    
        
        require_once _VIEW_PATH_ .'login/index.php';      
    }
    public function logear() {     
     

        if(!empty($_POST['USUemail'])) {
            $model = $this->usuario->logear($_POST['USUemail']);            
   
            require_once _VIEW_PATH_ . 'header.php';
            require_once _VIEW_PATH_ .'home/index.php';
            require_once _VIEW_PATH_ . 'footer.php';
        }else{
            require_once _VIEW_PATH_ .'login/index.php';
        }

    }
   
}