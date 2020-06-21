<?php
namespace App\Controllers;

class   VehiculoConductorController{

    private $vehiculo_conductor;
    private $conductor;
    private $vehiculo;

    public function __construct(){
        $this->vehiculo_conductor = new \App\Models\VehiculoConductor;
        $this->conductor=new \App\Models\Conductor;
        $this->vehiculo=new \App\Models\Vehiculo;
    }
    
    public function index() {
        $model = $this->vehiculo_conductor->listar();
        //  $model = $this->empleado->listar();
        require_once _VIEW_PATH_ . 'header.php';
        require_once _VIEW_PATH_ .'vehiculo_conductor/index.php';
        require_once _VIEW_PATH_ . 'footer.php';
    }

    public function agregar() {  
      //  $conductores = new \App\Models\Conductor;
      $conductores=$this->conductor->listar();
     //   $model2 = new \App\Models\Vehiculo;
        $vehiculos = $this->vehiculo->listar();
        if(!empty($_GET['id'])) {
            $model = $this->vehiculo_conductor->obtener($_GET['id']);
        }

        $nuevo = empty($model->VECid);

       require_once _VIEW_PATH_ . 'header.php';
        require_once _VIEW_PATH_ .'vehiculo_conductor/agregar.php';
        require_once _VIEW_PATH_ . 'footer.php';
    }
    public function guardar() {

        $estado=$_POST['VECestado'];
        $var="";
        if($estado=="Activo"){
           // $datos[6]="A";
           $var="A";
        
          }
            else {
          // code...$datos[6]="A";
          $var="I";
        }  
  
        $model = new \App\Models\VehiculoConductor;
        $model->VECid=$_POST['VECid'];
        $model->CONdni  = $_POST['CONdni'];
        $model->VEHid  = $_POST['VEHid'];
        $model->VECestado = $var;      

        $result = $this->vehiculo_conductor->guardar($model);

        if(!$result) {
            throw new Exception('No se pudo realizar la operación');
        } else {
            header('location: ?c=vehiculoconductor');
        }
    }


}

?>