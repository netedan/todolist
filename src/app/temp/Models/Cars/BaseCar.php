<?php

namespace App\temp\Models\Cars;

abstract class BaseCar
{
    public function __construct(
        public int    $wheelDiameter,
        public string $carBody,
        public ?string $colour = null,
    )
    {
    }
}