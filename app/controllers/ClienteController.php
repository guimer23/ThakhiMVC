<?php
namespace App\Controllers;

class   ClienteController{

    private $cliente;


    public function __construct(){
        $this->cliente = new \App\Models\Cliente;
      
    }
    
    public function index() {
        $model = $this->cliente->listar();
        //  $model = $this->empleado->listar();
        require_once _VIEW_PATH_ . 'header.php';
        require_once _VIEW_PATH_ .'cliente/index.php';
        require_once _VIEW_PATH_ . 'footer.php';
    }

    public function agregar() {
  
  
        if(!empty($_GET['id'])) {
            $model = $this->cliente->obtener($_GET['id']);
        }

        $nuevo = empty($model->CLIdni);

       require_once _VIEW_PATH_ . 'header.php';
        require_once _VIEW_PATH_ .'cliente/agregar.php';
        require_once _VIEW_PATH_ . 'footer.php';
    }
    public function guardar() {
        $model = new \App\Models\Cliente;
        $model->CLIdni = $_POST['CLIdni'];
        $model->CLInombre = $_POST['CLInombre'];
        $model->CLIapellido = $_POST['CLIapellido'];
        $model->CLIcelular = $_POST['CLIcelular'];
        

        $result = $this->cliente->guardar($model);

        if(!$result) {
            throw new Exception('No se pudo realizar la operación');
        } else {
            header('location: ?c=cliente');
        }
    }


}

?>