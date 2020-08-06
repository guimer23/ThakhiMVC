<?php
namespace App\Controllers;

class LoginController {
    private $usuario;    

    public function __construct(){
        $this->usuario = new \App\Models\Usuario;   
        $this->entregas = new \App\Models\Entregas;
        $this->conductor = new \App\Models\Conductor;
        $this->vehiculo = new \App\Models\Vehiculo;
    }

    public function index() {    
        
        require_once _VIEW_PATH_ .'login/index.php';      
    }
    public function logear() {     

        if(!empty($_POST['USUusuario'])) {
            $result = $this->usuario->logear($_POST['USUusuario'], $_POST['USUpassword']);            
   
            if(empty($result->USUid))
            {
                $_SESSION['error'] = 'Usuario o contraseña Incorrecto.';
                unset($_SESSION['auth']);

                require_once _VIEW_PATH_ .'login/index.php';
            } else {

                $_SESSION['auth'] = $result->USUusuario;

                $modelUsuario = $this->usuario->listar(); 
                $modelEntregas = $this->entregas->listar();
                $modelConductor = $this->conductor->listar();
                $modelVehiculo = $this->vehiculo->listar();
                
                require_once _VIEW_PATH_ . 'header.php';
                require_once _VIEW_PATH_ .'home/index.php';
                require_once _VIEW_PATH_ . 'footer.php';
            }
        } else {
            require_once _VIEW_PATH_ .'login/index.php';
        }
    }
   
}