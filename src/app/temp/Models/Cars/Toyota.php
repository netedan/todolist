<?php

namespace App\temp\Models\Cars;

class Toyota extends BaseCar
{
    public function __construct(
        int $wheelDiameter,
        string $carBody,
        ?string $colour = 'white'
    )
    {
        parent::__construct($wheelDiameter, $carBody, $colour);
    }
    public function carName(): string
    {
        return parent::getCarName();
    }
}