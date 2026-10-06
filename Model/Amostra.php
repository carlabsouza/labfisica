<?php

class Amostra
{
    public $ph;
    public $turbidez;
    public $cloroResidual;
    public $dureza;
    public $temperatura;

    public function __construct(
        $ph,
        $turbidez,
        $cloroResidual,
        $dureza,
        $temperatura
    ) {
        $this->ph = $ph;
        $this->turbidez = $turbidez;
        $this->cloroResidual = $cloroResidual;
        $this->dureza = $dureza;
        $this->temperatura = $temperatura;
    }
}
