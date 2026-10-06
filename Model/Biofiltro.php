<?php

class Biofiltro
{
    public $parametro;
    public $valorAntes;
    public $valorDepois;
    public $eficiencia;

    public function __construct(
        $parametro,
        $valorAntes,
        $valorDepois,
        $eficiencia = null
    ) {
        $this->parametro = $parametro;
        $this->valorAntes = $valorAntes;
        $this->valorDepois = $valorDepois;
        $this->eficiencia = $eficiencia;
    }
}

