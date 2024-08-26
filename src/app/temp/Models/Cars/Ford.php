<?php

namespace App\temp\Models\Cars;

class Ford extends BaseCar
{
        public function __construct(
            int $wheelDiameter,
            string $carBody,
            ?string $colour = 'blue'
        )
        {
            parent::__construct($wheelDiameter, $carBody, $colour);
        }
}