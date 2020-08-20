<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\InvalidArgumentException;
use App\Models\Vehiculo;

final class VehiculoTest extends TestCase
{
    public function testSiPodemosGuardarVehiculo()
    {
        $Vehiculo = new Vehiculo;

        $Vehiculo->VEHplaca = '002366';
        $Vehiculo->VEHmarca = 'Huawari';
        $Vehiculo->VEHmodelo = 'model Z Ulmate';
        $Vehiculo->VEHcolor = 'Negro Oscuro';
        $Vehiculo->VEHanio_fabricacion = '2020';
        $Vehiculo->VEHsoat = '2020-04-15';
        $Vehiculo->VEHestado = 'A';
        $Vehiculo->ruta_foto = 'public/images/user.png';

        $result = $Vehiculo->guardar($Vehiculo);

        $this->assertTrue($result, true);
    }

    public function testListar()
    {
        $Vehiculo = new Vehiculo;
        $result = $Vehiculo->listar();

        $this->assertIsArray($result, 'No se pudo listar vehiculos.');
    }

}