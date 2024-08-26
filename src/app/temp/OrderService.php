<?php

namespace App\temp;

use App\temp\Models\Cars\BaseCar;
use App\temp\Models\Cars\Ford;

class OrderService
{
    public function order(): BaseCar
    {
        $car = new Ford(wheelDiameter: 21, carBody: 'sedan');
        return $car;
    }
}