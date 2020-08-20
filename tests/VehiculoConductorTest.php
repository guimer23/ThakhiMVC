<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\InvalidArgumentException;
use App\Models\VehiculoConductor;

final class VehiculoConductorTest extends TestCase
{
    public function testSiPodemosGuardarVehiculoConductor()
    {
        $VehiculoConductor = new VehiculoConductor;

        $VehiculoConductor->CONdni = '47199491';
        $VehiculoConductor->VEHid = '6';
        $VehiculoConductor->VECestado = 'A';

        $result = $VehiculoConductor->guardar($VehiculoConductor);

        $this->assertTrue($result, true);
    }

    public function testListar()
    {
        $VehiculoConductor = new VehiculoConductor;
        $result = $VehiculoConductor->listar();

        $this->assertIsArray($result, 'No se pudo listar Vehiculo-Conductor.');
    }

}