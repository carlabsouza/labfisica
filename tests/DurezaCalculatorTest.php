<?php

use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../Calculos/DurezaCalculator.php';

class DurezaCalculatorTest extends TestCase
{
    public function testAguaMole() {
        $calculadora = new DurezaCalculator();
        $resultado = $calculadora->classificar(30);
        $this->assertEquals(
            "Água mole (branda)",
            $resultado
        );
    }

    public function testLimiteAntesDeAguaModerada() {
        $calculadora = new DurezaCalculator();
        $resultado = $calculadora->classificar(49.9);
        $this->assertEquals(
            "Água mole (branda)",
            $resultado
        );
    }

    public function testAguaModerada() {
        $calculadora = new DurezaCalculator();
        $resultado = $calculadora->classificar(100);
        $this->assertEquals(
            "Água moderada",
            $resultado
        );
    }

    public function testLimiteDeAguaModerada() {
        $calculadora = new DurezaCalculator();
        $resultado = $calculadora->classificar(149.9);
        $this->assertEquals(
            "Água moderada",
            $resultado
        );
    }

    public function testAguaDura() {
        $calculadora = new DurezaCalculator();
        $resultado = $calculadora->classificar(200);
        $this->assertEquals(
            "Água dura",
            $resultado
        );
    }

    public function testLimiteDeAguaDura() {
        $calculadora = new DurezaCalculator();
        $resultado = $calculadora->classificar(300);
        $this->assertEquals(
            "Água dura",
            $resultado
        );
    }

    public function testAguaMuitoDura() {
        $calculadora = new DurezaCalculator();
        $resultado = $calculadora->classificar(301);
        $this->assertEquals(
            "Água muito dura",
            $resultado
        );
    }

    public function testDurezaNegativa() {
        $calculadora = new DurezaCalculator();
        $resultado = $calculadora->classificar(-1);
        $this->assertEquals(
            "Valor inválido",
            $resultado
        );
    }
}