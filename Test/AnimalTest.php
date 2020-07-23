<?php
require_once('Animal.php');
class AnimalTest extends PHPUnit_Framework_TestCase
{
     public function testCanInstatiate(){
        $animal = new Animal('', '', '', 11);
        $this->assertEquals($animal->sonido(), 'Muuu');
     }
}
?>