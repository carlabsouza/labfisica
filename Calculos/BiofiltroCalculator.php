<?php

class BiofiltroCalculator
{
    public function calcularEficiencia($valorAntes, $valorDepois) {
        if ($valorAntes <= 0) {
            return "Valor inicial inválido";
        }

        if ($valorDepois < 0) {
            return "Valor final inválido";
        }

        if ($valorDepois > $valorAntes) {
            return "O valor depois não pode ser maior que o valor antes";
        }

        $eficiencia = (($valorAntes - $valorDepois) / $valorAntes) * 100;

        return round($eficiencia, 2);
    }
}