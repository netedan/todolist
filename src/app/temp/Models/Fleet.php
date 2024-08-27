<?php

namespace App\temp\Models;

use App\temp\Constants\Size;
use App\temp\Models\Cars\BaseCar;
use App\temp\Models\Cars\Ford;

class Fleet
{
    public function __construct(
        public Size   $size,
        private array $availableCars = [],
    )
    {
    }

    public function addCar(BaseCar $car): void //BaseCar - тип данных, $car - параметр метода
    {
//        $this->availableCars[] = $car;
        //проверяем количество элементов в массиве на наличие в нём пяти или менее элементов (машин)
        //если меньше или равно 5 - таксопарк определяется, как малый и туда добавляется элемент (машина)

        //если количество машин < 5
        //то добавляем машину
        //иначе не добавляем

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

