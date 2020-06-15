<?php
namespace App\Controllers;

class   UsuarioController{

    private $usuario;


    public function __construct(){
        $this->usuario = new \App\Models\Usuario;
      
    }
    
    public function index() {
        $model = $this->usuario->listar();
        //  $model = $this->empleado->listar();
        require_once _VIEW_PATH_ . 'header.php';
        require_once _VIEW_PATH_ .'usuario/index.php';
        require_once _VIEW_PATH_ . 'footer.php';
    }

    public function agregar() {
   
        if(!empty($_GET['id'])) {
            $model = $this->usuario->obtener($_GET['id']);
        }

        $nuevo = empty($model->USUid);

       require_once _VIEW_PATH_ . 'header.php';
        require_once _VIEW_PATH_ .'usuario/agregar.php';
        require_once _VIEW_PATH_ . 'footer.php';
    }
    public function guardar() {
        $nombreImg=$_FILES['imagen']['name'];
        $rutaAlmacenamiento=$_FILES['imagen']['tmp_name'];
        $carpeta='public/images/';
        $rutaFinal=$carpeta.$nombreImg;

        $model = new \App\Models\Usuario;
        $model->USUnombre = $_POST['USUnombre'];
        $model->USUapellidos = $_POST['USUapellidos'];
        $model->USUemail = $_POST['USUemail'];
        $model->USUusuario = $_POST['USUusuario'];
        $model->USUpassword = $_POST['USUpassword'];
        $model->USUestado = $_POST['USUestado'];
        $model->ruta_foto = $rutaFinal;

        $result = $this->usuario->guardar($model);

        if(!$result) {
            throw new Exception('No se pudo realizar la operación');
        } else {
            header('location: ?c=usuario');
        }
    }


}

?>