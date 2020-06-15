<?php
namespace App\Controllers;

class   MonitorearController{

    private $monitorear;
  
    private $movimientos;
    public function __construct(){
        $this->monitorear = new \App\Models\Monitorear;
      
    }
    
    public function index() {
        $model = $this->monitorear->listar();
        $movimientos = $this->monitorear->monitorear();
        require_once _VIEW_PATH_ . 'header.php';
        require_once _VIEW_PATH_ .'monitorear/index.php';
        require_once _VIEW_PATH_ . 'footer.php';
       // require_once _VIEW_PATH_ . 'mapa/marcadores.php';
    }

    public function monitorea() {
        $movimientos = $this->monitorear->monitorear();
      
        //require_once _VIEW_PATH_ . 'header.php';
        //require_once _VIEW_PATH_ .'monitorear/index.php';
      //  require_once _VIEW_PATH_ . 'footer.php';
       // require_once _VIEW_PATH_ . 'mapa/marcadores.php';
    }

   
    


}

?>