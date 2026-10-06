<?php

use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../Calculos/BiofiltroCalculator.php';

class BiofiltroCalculatorTest extends TestCase
{
    public function testCalculaEficienciaDe60Porcento() {
        $calculadora = new BiofiltroCalculator();
        $resultado = $calculadora->calcularEficiencia(100, 40);
        $this->assertEquals(60, $resultado);
    }

    public function testCalculaEficienciaDe50Porcento() {
        $calculadora = new BiofiltroCalculator();
        $resultado = $calculadora->calcularEficiencia(100, 50);
        $this->assertEquals(50, $resultado);
    }

    public function testEficienciaZero() {
        $calculadora = new BiofiltroCalculator();
        $resultado = $calculadora->calcularEficiencia(100, 100);
        $this->assertEquals(0, $resultado);
    }

    public function testValorInicialInvalido() {
        $calculadora = new BiofiltroCalculator();
        $resultado = $calculadora->calcularEficiencia(0, 50);
        $this->assertEquals(
            "Valor inicial inválido",
            $resultado
        );
    }

    public function testValorInicialNegativo() {
        $calculadora = new BiofiltroCalculator();
        $resultado = $calculadora->calcularEficiencia(-10, 5);
        $this->assertEquals(
            "Valor inicial inválido",
            $resultado
        );
    }

    public function testValorFinalNegativo() {
        $calculadora = new BiofiltroCalculator();
        $resultado = $calculadora->calcularEficiencia(100, -5);
        $this->assertEquals(
            "Valor final inválido",
            $resultado
        );
    }

    public function testValorFinalMaiorQueValorInicial() {
        $calculadora = new BiofiltroCalculator();
        $resultado = $calculadora->calcularEficiencia(50, 70);
        $this->assertEquals(
            "O valor depois não pode ser maior que o valor antes",
            $resultado
        );
    }
}