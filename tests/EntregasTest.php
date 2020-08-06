<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\InvalidArgumentException;
use App\Models\Entregas;

final class EntregasTest extends TestCase
{
    public function testSiPodemosGuardarEntrega()
    {
        $entrega = new Entregas;

        $entrega->ENTdescripcion  = 'Compra de una fuente de chicharrones';
        $entrega->ENTtipo  = 'Comida';
        $entrega->VECid = '5';    
        $entrega->ENTfechahora  = '2020-08-05';
        $entrega->CLIdni  = '2323';
        $entrega->ENTprecio = '30'; 
        $entrega->ENTestado = 'P'; 

        $result = $entrega->guardar($entrega);

        $this->assertTrue($result, true);
    }

    public function testListar()
    {
        $entrega = new Entregas;
        $result = $entrega->listar();

        $this->assertIsArray($result, 'No se pudo listar entregas.');
    }

    public function testSiPodemosObtenerPorId()
    {
    	$id = 3;
        $entrega = new Entregas;

        $result = $entrega->obtener($id);

        $this->assertEquals($result->ENTid, $id);
    }


}