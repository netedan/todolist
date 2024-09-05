<?php

namespace App\temp;

use App\temp\Constants\Size;
use App\temp\Models\Cars\BaseCar;
use App\temp\Models\Cars\Ford;
use App\temp\Models\Fleet;
use App\temp\Models\Users\Client;
use App\temp\Models\Users\Dispatcher;
use App\temp\test_folder\User;

class OrderService
{

    public function getCar(): string
    {
        $randomCar = new Fleet(size: Size::Large);
        return $randomCar->getRandomCar();
    }

    public function getDispatcher(): Dispatcher
    {
        return new Dispatcher('a', 'b', 'c');
    }

    public function getClient(): Client
    {
        return new Client('a', 'b', 'c');
    }

    public function getPrice(): int
    {
        $min = 0;
        $max = 150;
        return mt_rand($min, $max);
    }

    public function order(Fleet $fleet): Fleet
    {
        $user = new User();
        $user->addToAccessList(1);
        $user->addToAccessList(2);
        $result = array_diff($user->getAccessList(), $user->getDefaultAccessList());
        $difference = (empty($result));
        echo $difference;
        return $fleet;

//добавить права на чтение и запись и сравнить дефолтные права с теми, что выдал
//
//
//        берёт случайную машину из таксопарка
//        возвращает её
//
//
//        $client = new Client('a', 'b', 'c');
////        $orders = $client->orders;
//        $orders = $client->getOrders();
//
//        $car = new Ford(21, 'sedan');
//
//        $fleet1 = new Fleet();
//        $fleet1->addCar($car);
//
//
//        $car = new Ford(wheelDiameter: 21, carBody: 'sedan');
//        return $car;
    }

    public function accessDifference(): bool
    {
        $user = $this->initUser();
        $user->addToAccessList(1);
        $user->addToAccessList(2);
        $difference = array_diff($user::getDefaultAccessList(), $user->getAccessList());
        return empty($difference);
    }

    public function initUser(): User
    {
        $result = rand(0, 1);
        if ($result === 0) {
            return new User;
        }
        return new \App\temp\test_folder\Client();
        //рандомно возвращает экземпляр класса либо юзера либо клиента
    }

    public function generateID(int $min = 1, int $max = 100): int
    {
        return mt_rand($min, $max);
    }

    public function returnOrder(): array
    {
        $orderId = $this->generateID();
        $randomCar = $this->getCar();
        $dispatcher = $this->getDispatcher();
        $client = $this->getClient();
        $price = $this->getPrice();
        return [
            'orderId' => $orderId,
            'car' => $randomCar,
            'dispatcher' => $dispatcher,
            'client' => $client
            , 'price' => $price
        ];
    }
}