<?php

use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../Calculos/TurbidezCalculator.php';

class TurbidezCalculatorTest extends TestCase
{
    public function testTurbidezIdealParaConsumo() {
        $calculadora = new TurbidezCalculator();
        $resultado = $calculadora->classificar(0.5);
        $this->assertEquals("Ideal para consumo", $resultado);
    }

    public function testTurbidezNoLimiteDoIdeal() {
        $calculadora = new TurbidezCalculator();
        $resultado = $calculadora->classificar(0.9);
        $this->assertEquals("Ideal para consumo", $resultado);
    }

    public function testTurbidezAdequadaParaConsumo() {
        $calculadora = new TurbidezCalculator();
        $resultado = $calculadora->classificar(3.0);
        $this->assertEquals("Adequada para consumo", $resultado);
    }

    public function testTurbidezNoLimiteMaximo() {
        $calculadora = new TurbidezCalculator();
        $resultado = $calculadora->classificar(5.0);
        $this->assertEquals("Adequada para consumo", $resultado);
    }

    public function testTurbidezAcimaDoLimite() {
        $calculadora = new TurbidezCalculator();
        $resultado = $calculadora->classificar(5.1);
        $this->assertEquals("Inadequada para consumo", $resultado);
    }

    public function testTurbidezMuitoAlta() {
        $calculadora = new TurbidezCalculator();
        $resultado = $calculadora->classificar(10.0);
        $this->assertEquals("Inadequada para consumo", $resultado);
    }

    public function testTurbidezNegativa() {
        $calculadora = new TurbidezCalculator();
        $resultado = $calculadora->classificar(-1);
        $this->assertEquals("Valor inválido", $resultado);
    }
}