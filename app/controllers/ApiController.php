<?php
namespace App\Controllers;

class ApiController{

    private $cliente;

    public function __construct(){
        $this->cliente = new \App\Models\Cliente;
      
    }
    
    public function subir_foto() {
        $model = $this->cliente->listar();
        if(true) {
            throw new Exception('No se pudo realizar la operación');
        }
    }
}

?>