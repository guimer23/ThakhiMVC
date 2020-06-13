<?php
namespace App\Controllers;

class HomeController {
    private $empleado;
    private $profesion;

    public function __construct(){
        $this->empleado = new \App\Models\Empleado;
        $this->profesion = new \App\Models\Profesion;
    }

    public function index() {
        $model = $this->empleado->listar();
        
        require_once _VIEW_PATH_ . 'header.php';
        require_once _VIEW_PATH_ .'home/index.php';
        require_once _VIEW_PATH_ . 'footer.php';
    }

    public function crud() {
        $model = new \App\Models\Empleado;
        $profesiones = $this->profesion->listar();

        if(!empty($_GET['id'])) {
            $model = $this->empleado->obtener($_GET['id']);
        }

        $nuevo = empty($model->id);
        
        require_once _VIEW_PATH_ . 'header.php';
        require_once _VIEW_PATH_ .'home/crud.php';
        require_once _VIEW_PATH_ . 'footer.php';
    }

    public function guardar() {
        $model = new \App\Models\Empleado;
        $model->id = $_POST['id'];
        $model->nombre = $_POST['nombre'];
        $model->apellido = $_POST['apellido'];
        $model->fecha_nacimiento = $_POST['fecha_nacimiento'];
        $model->profesion_id = $_POST['profesion_id'];

        $result = $this->empleado->guardar($model);

        if(!$result) {
            throw new Exception('No se pudo realizar la operación');
        } else {
            header('location: ?c=home');
        }
    }

    public function eliminar() {
        $id = $_GET['id'];

        $result = $this->empleado->eliminar($id);

        if(!$result) {
            throw new Exception('No se pudo realizar la operación');
        } else {
            header('location: ?c=home');
        }
    }

    public function hello() {
        echo 'hello world';
    }
}