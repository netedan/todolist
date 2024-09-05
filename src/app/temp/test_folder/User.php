<?php

namespace App\temp\test_folder;

class User
{
    const int WRITE = 1;
    const int READ = 2;
    const int EXECUTE = 3;

    private array $accessList = [];

    public static function getDefaultAccessList(): array //вызывает список дефолтных доступов
    {
        return [
            self::WRITE,
            self::READ,
        ];
    }

    public function getAccessList(): array //метод, получающий список доступов
    {
        return $this->accessList;
    }

    public function addToAccessList(int $access): void //метод, добавляющий доступ
    {
        $this->accessList[] = $access;
    }


}