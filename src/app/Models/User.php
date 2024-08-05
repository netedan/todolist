<?php

namespace App\Models;

class User implements BaseModel
{
    public function __construct(
        public ?int    $id,
        public ?string $surname,
        public ?string $name,
        public ?string $patronymic
    )
    {
    }

    // Метод для получения всех пользователей
    public static function all(): array
    {
        return [
            new User(
                id: 1,
                surname: "Ivanov",
                name: 'Ivan',
                patronymic: 'Ivanovich'
            ),
            new User(
                id: 2,
                surname: "Petrov",
                name: 'Petr',
                patronymic: 'Petrovich'
            ),
            new User(
                id: 3,
                surname: "Sergeev",
                name: 'Sergej',
                patronymic: 'Sergejevich'
            )
        ];
    }
    public function setFullName(string $surname, string $name, string $patronymic): void //метод
    {
        $this->surname = $surname;//запись параметра методов свойства
        $this->name = $name;
        $this->patronymic = $patronymic;
    }

    public
    function getFullName(): string
    {
        return $this->surname . ' ' . $this->name . ' ' . $this->patronymic;
    }

    public
    function printFullNameWithBr(): void
    {
        echo $this->getFullName();
        echo $this->br();
    }

    private
    function br(): string
    {
        return '<br>';
    }

}


