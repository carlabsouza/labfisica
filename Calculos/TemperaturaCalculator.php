<?php

class TemperaturaCalculator
{
    public function classificar($temperatura) {
        if ($temperatura < 0) {
            return "Valor inválido";
        }

        if ($temperatura < 5) {
            return "Muito baixa";
        }

        if ($temperatura <= 30) {
            return "Adequada";
        }

        return "Muito alta";
    }
}