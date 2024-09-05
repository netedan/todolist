<?php

namespace Tests\Unit;

use App\temp\Constants\Size;
use App\temp\Models\Cars\Ford;
use App\temp\Models\Fleet;
use App\temp\OrderService;
use PHPUnit\Framework\TestCase;
use function PHPUnit\Framework\assertEquals;


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

    public function testAddCarToFleet(): void
    {
        $car = new Ford(21, 'sedan');
        $smallFleet = new Fleet(Size::Small);
        for ($i = 0; $i < 6; $i++) {
            $smallFleet->addCar($car);
        }
        self::assertCount(5, $smallFleet->getAvailableCars());

        $car = new Ford(21, 'sedan');
        $smallFleet = new Fleet(Size::Medium);
        for ($i = 0; $i < 60; $i++) {
            $smallFleet->addCar($car);
        }
        self::assertCount(50, $smallFleet->getAvailableCars());

        $car = new Ford(21, 'sedan');
        $smallFleet = new Fleet(Size::Large);
        for ($i = 0; $i < 100; $i++) {
            $smallFleet->addCar($car);
        }
        self::assertCount(100, $smallFleet->getAvailableCars());
    }

    public function testGetRandomCar(): void
    {
        $fleet = new Fleet(Size::Small);
        $randomCar = $fleet->getRandomCar();
        $this->assertNotNull($randomCar);
        $this->assertIsString($randomCar);
    }

    public function testGetCar(): void
    {
        $return = new OrderService();
        $car = $return->getCar();
        $this->assertNotNull($car);
        $this->assertIsString($car);
    }

    public function testAccessDifference(): void
    {
        $order = new OrderService();
        $this->assertEquals(true, $order->accessDifference());
    }

    public function testInitUser(): void
    {
        $order = new OrderService();
        $order->initUser();
    }

    public function testGenerateId(): void
    {
        $id = new OrderService();
        $id->generateId();
        $this->assertNotNull($id);
    }

    public function testReturnOrder(): void
    {
        $result = new OrderService();
        $result->returnOrder();
        $this->assertIsArray($result->returnOrder());
    }

    public function testGetDispatcher(): void
    {
        $dispatcher = new OrderService();
        $result = $dispatcher->getDispatcher();
        $this->assertNotNull($result);
    }

    public function testGetRand(): void
    {
        $number = new OrderService();
        $number->getPrice();
        $this->assertNotNull($number);
    }
}


