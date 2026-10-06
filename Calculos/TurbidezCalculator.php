<?php

class TurbidezCalculator
{
    public function classificar($turbidez) {
        if ($turbidez < 0) {
            return "Valor inválido";
        }

        if ($turbidez < 1) {
            return "Ideal para consumo";
        }

        if ($turbidez <= 5) {
            return "Adequada para consumo";
        }

        return "Inadequada para consumo";
    }
}