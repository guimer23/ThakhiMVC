<?php
namespace App\Controllers;

class   ConductorController{

    private $conductor;


    public function __construct(){
        $this->conductor = new \App\Models\Conductor;
      
    }
    
    public function index() {
        $model = $this->conductor->listar();
        //  $model = $this->empleado->listar();
        require_once _VIEW_PATH_ . 'header.php';
        require_once _VIEW_PATH_ .'conductor/index.php';
        require_once _VIEW_PATH_ . 'footer.php';
    }

    public function agregar() {
  
  
        if(!empty($_GET['id'])) {
            $model = $this->conductor->obtener($_GET['id']);
        }

        $nuevo = empty($model->CLIdni);

       require_once _VIEW_PATH_ . 'header.php';
        require_once _VIEW_PATH_ .'conductor/agregar.php';
        require_once _VIEW_PATH_ . 'footer.php';
    }
    public function guardar() {

        $nombreImg=$_FILES['imagen']['name'];
        $rutaAlmacenamiento=$_FILES['imagen']['tmp_name'];
        $carpeta='public/images/';
        $rutaFinal=$carpeta.$nombreImg;

        move_uploaded_file($rutaAlmacenamiento, $rutaFinal);
        $model = new \App\Models\Conductor;
        $model->CONdni = $_POST['CONdni'];
        $model->CONnombre = $_POST['CONnombre'];
        $model->CONapellido = $_POST['CONapellido'];
        $model->CONlicencia = $_POST['CONlicencia'];
        $model->CONvigencialicencia = $_POST['CONvigencialicencia'];
        $model->CONcelular = $_POST['CONcelular'];
        $model->CONemail = $_POST['CONemail'];
        $model->CONclave = $_POST['CONclave'];
        $model->CONdireccion = $_POST['CONdireccion'];
        $model->ruta_foto = $rutaFinal;   

        $result = $this->conductor->guardar($model);

        if(!$result) {
            throw new Exception('No se pudo realizar la operación');
        } else {
            header('location: ?c=conductor');
        }
    }


}

?>