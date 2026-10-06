<?php

class CloroCalculator
{
    public function classificar($cloro) {
        if ($cloro < 0) {
            return "Valor inválido";
        }

        if ($cloro < 0.2) {
            return "Inadequado para consumo";
        }

        if ($cloro <= 1.0) {
            return "Ideal para consumo";
        }

        if ($cloro <= 2.0) {
            return "Adequado para consumo";
        }

        if ($cloro <= 5.0) {
            return "Acima do recomendado";
        }

        return "Inadequado para consumo";
    }
}