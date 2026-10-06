<?php

require_once __DIR__ . '/../Calculos/PhCalculator.php';
require_once __DIR__ . '/../Calculos/TurbidezCalculator.php';
require_once __DIR__ . '/../Calculos/CloroCalculator.php';
require_once __DIR__ . '/../Calculos/DurezaCalculator.php';
require_once __DIR__ . '/../Calculos/TemperaturaCalculator.php';
require_once __DIR__ . '/../Calculos/QualidadedaaguaCalculator.php';

class AguaController
{
    public function analisar()
    {
        if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
            return null;
        }

        $ph = $_POST['ph'];
        $turbidez = $_POST['turbidez'];
        $cloro = $_POST['cloro'];
        $dureza = $_POST['dureza'];
        $temperatura = $_POST['temperatura'];

        $analisador = new QualidadedaaguaCalculator();

        $resultado = $analisador->analisar($ph, $turbidez, $cloro, $dureza, $temperatura);

        return $resultado;
    }
}