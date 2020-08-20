<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\InvalidArgumentException;
use App\Models\Usuario;

final class UsuarioTest extends TestCase
{
    public function testSiPodemosGuardarUsuario()
    {
        $usuario = new Usuario;

        $usuario->USUnombre = 'Jose';
        $usuario->USUapellidos = 'Perez';
        $usuario->USUemail = 'jperez@gmail.com';
        $usuario->USUusuario = 'jperez';
        $usuario->USUpassword = '123456';
        $usuario->USUestado = 'A';
        $usuario->ruta_foto = 'public/images/user.png';

        $result = $usuario->guardar($usuario);

        $this->assertTrue($result, true);
    }

    public function testListar()
    {
        $usuario = new Usuario;
        $result = $usuario->listar();

        $this->assertIsArray($result, 'No se pudo listar usuarios.');
    }

    public function testLogin()
    {
        $USUusuario = 'Sandra';
        $USUpassword = '2323';

        $usuario = new Usuario;
        $result = $usuario->logear($USUusuario, $USUpassword);

        $this->assertEquals($result->USUusuario, $USUusuario);
    }


}