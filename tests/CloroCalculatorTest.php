<?php

use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../Calculos/CloroCalculator.php';

class CloroCalculatorTest extends TestCase
{
    public function testCloroAbaixoDoMinimo()
    {
        $calculadora = new CloroCalculator();
        $resultado = $calculadora->classificar(0.1);
        $this->assertEquals(
            "Inadequado para consumo",
            $resultado
        );
    }

    public function testCloroNoMinimoPermitido()
    {
        $calculadora = new CloroCalculator();
        $resultado = $calculadora->classificar(0.2);
        $this->assertEquals(
            "Ideal para consumo",
            $resultado
        );
    }

    public function testCloroIdeal()
    {
        $calculadora = new CloroCalculator();
        $resultado = $calculadora->classificar(0.5);
        $this->assertEquals(
            "Ideal para consumo",
            $resultado
        );
    }

    public function testCloroNoLimiteDoIdeal()
    {
        $calculadora = new CloroCalculator();
        $resultado = $calculadora->classificar(1.0);
        $this->assertEquals(
            "Ideal para consumo",
            $resultado
        );
    }

    public function testCloroAcimaDoIdeal()
    {
        $calculadora = new CloroCalculator();
        $resultado = $calculadora->classificar(1.5);
        $this->assertEquals(
            "Adequado para consumo",
            $resultado
        );
    }

    public function testCloroNoLimiteDeDois()
    {
        $calculadora = new CloroCalculator();
        $resultado = $calculadora->classificar(2.0);
        $this->assertEquals(
            "Adequado para consumo",
            $resultado
        );
    }

    public function testCloroAcimaDoRecomendado()
    {
        $calculadora = new CloroCalculator();
        $resultado = $calculadora->classificar(3.0);
        $this->assertEquals(
            "Acima do recomendado",
            $resultado
        );
    }

    public function testCloroNoLimiteDeCinco()
    {
        $calculadora = new CloroCalculator();
        $resultado = $calculadora->classificar(5.0);
        $this->assertEquals(
            "Acima do recomendado",
            $resultado
        );
    }

    public function testCloroAcimaDeCinco()
    {
        $calculadora = new CloroCalculator();
        $resultado = $calculadora->classificar(5.1);
        $this->assertEquals(
            "Inadequado para consumo",
            $resultado
        );
    }

    public function testCloroNegativo()
    {
        $calculadora = new CloroCalculator();
        $resultado = $calculadora->classificar(-1);
        $this->assertEquals(
            "Valor inválido",
            $resultado
        );
    }
}