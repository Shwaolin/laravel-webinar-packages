<?php

namespace Shwaolin\LaravelWebinarPackages;

class Temperature
{
    public float $celsius;

    public function __construct(float $celsius) {
        $this->celsius = $celsius;
    }

    public function toFahrenheit(): float
    {
        return ($this->celsius * 1.8) + 32;
    }
}
