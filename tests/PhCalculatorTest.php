<?php

use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../Calculos/PhCalculator.php';

class PhCalculatorTest extends TestCase
{
    public function testPhDentroDaFaixa()
    {
        $calculadora = new PhCalculator();
        $resultado = $calculadora->classificar(7.0);
        $this->assertEquals("Adequado", $resultado);
    }

    public function testPhNoLimiteInferior()
    {
        $calculadora = new PhCalculator();
        $resultado = $calculadora->classificar(6.0);
        $this->assertEquals("Adequado", $resultado);
    }

    public function testPhNoLimiteSuperior()
    {
        $calculadora = new PhCalculator();
        $resultado = $calculadora->classificar(9.5);
        $this->assertEquals("Adequado", $resultado);
    }

    public function testPhAbaixoDaFaixa()
    {
        $calculadora = new PhCalculator();
        $resultado = $calculadora->classificar(5.9);
        $this->assertEquals("Inadequado", $resultado);
    }

    public function testPhAcimaDaFaixa()
    {
        $calculadora = new PhCalculator();
        $resultado = $calculadora->classificar(9.6);
        $this->assertEquals("Inadequado", $resultado);
    }

    public function testPhValorNegativo()
    {
        $calculadora = new PhCalculator();
        $resultado = $calculadora->classificar(-1);
        $this->assertEquals("Valor inválido", $resultado);
    }

    public function testPhMaiorQue14()
    {
        $calculadora = new PhCalculator();
        $resultado = $calculadora->classificar(15);
        $this->assertEquals("Valor inválido", $resultado);
    }
}

