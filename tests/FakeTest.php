<?php

use PHPUnit\Framework\TestCase;

class FakeTest extends TestCase
{
    public function testPrimeiroTesteRealizadoComPhpUnit()
    {
        $texto = "dale";
        $this->assertEquals("dale", $texto);
    }
}