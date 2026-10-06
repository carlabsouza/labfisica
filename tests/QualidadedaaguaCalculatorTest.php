<?php

use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../Calculos/PhCalculator.php';
require_once __DIR__ . '/../Calculos/TurbidezCalculator.php';
require_once __DIR__ . '/../Calculos/CloroCalculator.php';
require_once __DIR__ . '/../Calculos/DurezaCalculator.php';
require_once __DIR__ . '/../Calculos/TemperaturaCalculator.php';
require_once __DIR__ . '/../Calculos/QualidadedaaguaCalculator.php';

class QualidadedaaguaCalculatorTest extends TestCase {
    
    public function testAguaAdequadaParaConsumo() {
        $analisador = new Qualidadedaagua();

        $resultado = $analisador->analisar(7.0, 0.5, 0.5, 40, 20);

        $this->assertEquals(
            "Água adequada para consumo",
            $resultado["qualidadeGeral"]
        );
    }

    public function testAguaInadequadaPorPh() {
        $analisador = new Qualidadedaagua();

        $resultado = $analisador->analisar(5.0, 0.5, 0.5, 40, 20);

        $this->assertEquals(
            "Água inadequada para consumo",
            $resultado["qualidadeGeral"]
        );
    }

    public function testAguaInadequadaPorTurbidez() {
        $analisador = new Qualidadedaagua();

        $resultado = $analisador->analisar(7.0, 6.0, 0.5, 40, 20);

        $this->assertEquals(
            "Água inadequada para consumo",
            $resultado["qualidadeGeral"]
        );
    }

    public function testAguaInadequadaPorCloro() {
        $analisador = new Qualidadedaagua();

        $resultado = $analisador->analisar(7.0, 0.5, 5.5, 40, 20);

        $this->assertEquals(
            "Água inadequada para consumo",
            $resultado["qualidadeGeral"]
        );
    }

    public function testRetornaResultadosDosParametros() {
        $analisador = new Qualidadedaagua();

        $resultado = $analisador->analisar(7.0, 0.5, 0.5, 40, 20);

        $this->assertArrayHasKey("ph", $resultado);
        $this->assertArrayHasKey("turbidez", $resultado);
        $this->assertArrayHasKey("cloro", $resultado);
        $this->assertArrayHasKey("dureza", $resultado);
        $this->assertArrayHasKey("temperatura", $resultado);
        $this->assertArrayHasKey("qualidadeGeral", $resultado);
    }
}