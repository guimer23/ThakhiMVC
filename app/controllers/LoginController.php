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

        if(!empty($_POST['USUusuario'])) {
            $_SESSION['auth'] = $this->usuario->logear($_POST['USUusuario'], $_POST['USUpassword']);            
   
            if(empty($_SESSION['auth']->USUid))
            {
                $_SESSION['error'] = 'Usuario o contraseña Incorrecto.';
                unset($_SESSION['auth']);

                require_once _VIEW_PATH_ .'login/index.php';
            } else {
                require_once _VIEW_PATH_ . 'header.php';
                require_once _VIEW_PATH_ .'home/index.php';
                require_once _VIEW_PATH_ . 'footer.php';
            }
        } else {
            require_once _VIEW_PATH_ .'login/index.php';
        }
    }
   
}