<?php

namespace Tests\Unit;
use App\temp\OrderService;
use PHPUnit\Framework\TestCase;


class OrderServiceTest extends TestCase
{
    public function testOrder(): void
    {
        $service = new OrderService();
        $resultCar = $service->order();
        $this->assertEquals('blue', $resultCar->colour);
        $this->assertEquals(21, $resultCar->wheelDiameter);
        $this->assertEquals('sedan', $resultCar->carBody);
    }
}