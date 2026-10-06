<?php

class PhCalculator
{
    public function classificar($ph)
    {
        if ($ph < 0 || $ph > 14) {
            return "Valor inválido";
        }

        if ($ph >= 6.0 && $ph <= 9.5) {
            return "Adequado";
        }

        return "Inadequado";
    }
}
