<?php

namespace App\temp;

use App\temp\Models\Cars\BaseCar;
use App\temp\Models\Cars\Ford;
use App\temp\Models\Fleet;
use App\temp\Models\Users\Client;

class OrderService
{
    public function order(Fleet $fleet): Fleet
    {
        $client = new Client('a', 'b', 'c');
//        $orders = $client->orders;
        $orders = $client->getOrders();

        $car = new Ford(21, 'sedan');

        $fleet1 = new Fleet();
        $fleet1->addCar($car);


//        $car = new Ford(wheelDiameter: 21, carBody: 'sedan');
//        return $car;
    }
}