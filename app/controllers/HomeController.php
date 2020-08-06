<?php
namespace App\Controllers;

class HomeController {   
    
    public function __construct(){
        $this->usuario = new \App\Models\Usuario;   
        $this->entregas = new \App\Models\Entregas;
        $this->conductor = new \App\Models\Conductor;
        $this->vehiculo = new \App\Models\Vehiculo;
    }  

    public function index() {   
    $modelUsuario = $this->usuario->listar(); 
    $modelEntregas = $this->entregas->listar();
    $modelConductor = $this->conductor->listar();
    $modelVehiculo = $this->vehiculo->listar();

        require_once _VIEW_PATH_ . 'header.php';
        require_once _VIEW_PATH_ .'home/index.php';
        require_once _VIEW_PATH_ . 'footer.php';
    }
    
}