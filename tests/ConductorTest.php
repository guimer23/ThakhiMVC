<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\InvalidArgumentException;
use App\Models\Conductor;

final class ConductorTest extends TestCase
{
    public function testSiPodemosGuardarConductor()
    {
        $conductor = new Conductor;

        $conductor->CONdni='47199490';
        $conductor->CONnombre='Guimer';
        $conductor->CONapellido='Coaquira';
        $conductor->CONlicencia='K1-47199491';
        $conductor->CONvigencialicencia='2021-05-23';
        $conductor->CONcelular='995626969';
        $conductor->CONemail='guicoaquirac@upt.pe';
        $conductor->CONclave='123456';
        $conductor->CONdireccion='Calle San Martin S/N';            
        $conductor->CONestado='A';
        $conductor->ruta_foto='public/images/user.png';
        

        $result = $conductor->guardar($conductor);

        $this->assertTrue($result, true);
    }

    public function testListar()
    {
        $conductor = new Conductor;
        $result = $conductor->listar();

        $this->assertIsArray($result, 'No se pudo listar conductores.');
    }

    public function testSiPodemosObtenerPorId()
    {
    	$id = 33443323;
        $conductor = new Conductor;

        $result = $conductor->obtener($id);

        $this->assertEquals($result->CONdni, $id);
    }


}