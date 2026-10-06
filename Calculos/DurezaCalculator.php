<?php

class DurezaCalculator
{
    public function classificar($dureza) {
        if ($dureza < 0) {
            return "Valor inválido";
        }

        if ($dureza < 50) {
            return "Água mole (branda)";
        }

        if ($dureza < 150) {
            return "Água moderada";
        }

        if ($dureza <= 300) {
            return "Água dura";
        }

        return "Água muito dura";
    }
}