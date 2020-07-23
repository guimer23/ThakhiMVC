<?php
require_once('Calculator.php');
class FirstTest extends PHPUnit_Framework_TestCase
{
    public function testSum()
    {
        $c=new Calculator();
        $this->assertEquals(5, $c->suma(3,2));

    }
} 
?>

