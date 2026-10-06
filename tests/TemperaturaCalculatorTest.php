<?php

use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../Calculos/TemperaturaCalculator.php';

class TemperaturaCalculatorTest extends TestCase
{
    public function testTemperaturaMuitoBaixa() {
        $calculadora = new TemperaturaCalculator();
        $resultado = $calculadora->classificar(3);
        $this->assertEquals(
            "Muito baixa",
            $resultado
        );
    }

    public function testTemperaturaNoLimiteInferior(){
        $calculadora = new TemperaturaCalculator();
        $resultado = $calculadora->classificar(5);
        $this->assertEquals(
            "Adequada",
            $resultado
        );
    }

    public function testTemperaturaAdequada() {
        $calculadora = new TemperaturaCalculator();
        $resultado = $calculadora->classificar(20);
        $this->assertEquals(
            "Adequada",
            $resultado
        );
    }

    public function testTemperaturaNoLimiteSuperior() {
        $calculadora = new TemperaturaCalculator();
        $resultado = $calculadora->classificar(30);
        $this->assertEquals(
            "Adequada",
            $resultado
        );
    }

    public function testTemperaturaMuitoAlta() {
        $calculadora = new TemperaturaCalculator();
        $resultado = $calculadora->classificar(31);
        $this->assertEquals(
            "Muito alta",
            $resultado
        );
    }

    public function testTemperaturaNegativa() {
        $calculadora = new TemperaturaCalculator();
        $resultado = $calculadora->classificar(-1);
        $this->assertEquals(
            "Valor inválido",
            $resultado
        );
    }
}