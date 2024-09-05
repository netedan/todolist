<?php

namespace App\temp\Models;

use App\temp\Constants\Size;
use App\temp\Models\Cars\BaseCar;
use App\temp\Models\Cars\Ford;
use App\temp\Models\Cars\Toyota;
use App\temp\Models\Users\Dispatcher;

class Fleet
{
    public function __construct(
        public Size   $size,
        private array $availableCars = [
            new Ford(21, 'sedan'),
            new Toyota(22, 'suv'),
            new Ford(11, 'sedan'),
        ],
    )
    {
    }

    public function addCar(BaseCar $car): void //BaseCar - тип данных, $car - параметр метода
    {

        if (count($this->availableCars) < 5 && $this->size->value == 'S') {
            $this->availableCars[] = $car;
        } elseif (count($this->availableCars) < 50 && $this->size->value == 'M') {
            $this->availableCars[] = $car;
        } elseif ($this->size->value == 'L') {
            $this->availableCars[] = $car;
        }
    }

    //если количество машин < 5 и таксопарк S
    //то добавляем машину
    //или если количество машин <50 и таксопарк M
    //то добавляем машину
    //или если таксопарк L
    //то добавляем машину


    public function getAvailableCars(): array
    {
        return $this->availableCars;
    }

    public function getCarsCount(): int
    {
        return count($this->availableCars);
    }

    public function getRandomCar(): string
    {
        $randomCarKey = array_rand($this->availableCars,   1);
        $randomCar = $this->availableCars[$randomCarKey];
        return $randomCar->getCarName();
    }
}


//    public function __construct(
//        public string $model,
//        public string $availability,
//    )
//    {
//    }
//
//    public function ShowAvailableCars(array $fleet)
//    {
//
//
//    }



//    public function __construct(
//        public string $model,
//        public string $availability,
//    )
//    {
//    }
//
//    public function ShowAvailableCars(array $fleet)
//    {
//
//
//    }


