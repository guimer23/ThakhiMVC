<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\InvalidArgumentException;
use App\Models\Cliente;

final class ClienteTest extends TestCase
{
    public function testSiPodemosGuardarCliente()
    {
        $cliente = new Cliente;

        $cliente->CLIdni='77127220';
        $cliente->CLInombre='Jhosmell';
        $cliente->CLIapellido='Alfaro';
        $cliente->CLIcelular='952614602';
        $cliente->CLIemail='jhoalfarom@upt.pe';
        $cliente->CLIclave='123456';      

        $result = $cliente->guardar($cliente);

        $this->assertTrue($result, true);
    }

    public function testListar()
    {
        $cliente = new Cliente;
        $result = $cliente->listar();

        $this->assertIsArray($result, 'No se pudo listar clientes.');
    }

    public function testSiPodemosObtenerPorId()
    {
    	$id = '111';
        $cliente = new Cliente;

        $result = $cliente->obtener($id);

        $this->assertEquals($result->CLIdni, $id);
    }


}