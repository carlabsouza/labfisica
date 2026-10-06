<?php

class Qualidadedaagua
{
    public function analisar($ph, $turbidez, $cloro, $dureza, $temperatura) {
        $resultados = [];

        $phCalculator = new PhCalculator();
        $turbidezCalculator = new TurbidezCalculator();
        $cloroCalculator = new CloroCalculator();
        $durezaCalculator = new DurezaCalculator();
        $temperaturaCalculator = new TemperaturaCalculator();

        $resultados["ph"] = $phCalculator->classificar($ph);
        $resultados["turbidez"] = $turbidezCalculator->classificar($turbidez);
        $resultados["cloro"] = $cloroCalculator->classificar($cloro);
        $resultados["dureza"] = $durezaCalculator->classificar($dureza);
        $resultados["temperatura"] = $temperaturaCalculator->classificar($temperatura);

        $inadequados = 0;

        foreach ($resultados as $resultado) {
            if (
                $resultado === "Inadequado" ||
                $resultado === "Inadequado para consumo" ||
                $resultado === "Valor inválido"
            ) {
                $inadequados++;
            }
        }

        if ($inadequados == 0) {
            $resultados["qualidadeGeral"] = "Água adequada para consumo";
        } else {
            $resultados["qualidadeGeral"] = "Água inadequada para consumo";
        }

        return $resultados;
    }
}

