<?php
namespace App\Controllers;

class   VehiculoController{

    private $vehiculo;
    
    public function __construct(){
        $this->vehiculo = new \App\Models\Vehiculo;
      
    }
    
    public function index() {
        $model = $this->vehiculo->listar();
        //  $model = $this->empleado->listar();
        require_once _VIEW_PATH_ . 'header.php';
        require_once _VIEW_PATH_ .'vehiculo/index.php';
        require_once _VIEW_PATH_ . 'footer.php';
    }

    public function agregar() {  
  
        if(!empty($_GET['id'])) {
            $model = $this->vehiculo->obtener($_GET['id']);
        }

        $nuevo = empty($model->VEHid);

       require_once _VIEW_PATH_ . 'header.php';
        require_once _VIEW_PATH_ .'vehiculo/agregar.php';
        require_once _VIEW_PATH_ . 'footer.php';
    }
    public function guardar() {

        $nombreImg=$_FILES['imagen']['name'];
        $rutaAlmacenamiento=$_FILES['imagen']['tmp_name'];
        $carpeta='public/images/';
        $rutaFinal=$carpeta.$nombreImg;

        move_uploaded_file($rutaAlmacenamiento, $rutaFinal);
        $model = new \App\Models\Vehiculo;
        $model->VEHplaca = $_POST['VEHplaca'];
        $model->VEHmarca = $_POST['VEHmarca'];
        $model->VEHmodelo = $_POST['VEHmodelo'];
        $model->VEHcolor = $_POST['VEHcolor'];
        $model->VEHanio_fabricacion = $_POST['VEHanio_fabricacion'];
        $model->VEHestado = $_POST['VEHestado']; 
        $model->ruta_foto = $rutaFinal;          

        $result = $this->vehiculo->guardar($model);

        if(!$result) {
            throw new Exception('No se pudo realizar la operación');
        } else {
            header('location: ?c=vehiculo');
        }
    }


}

?>