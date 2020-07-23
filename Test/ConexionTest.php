
<?php
require_once 'PHPUnit/Conexion.php';
class ConexionTest extends PHPUnit_Framework_TestCase
{
    public function testConexion()
    {
        $c=new Conexion();
        $this->assertEquals('Conectado', $c->Conectar('Conectado'));

    }
} 
?>
